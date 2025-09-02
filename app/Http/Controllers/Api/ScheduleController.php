<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SessionActivity;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use App\Http\Resources\ActivityResource;

class ScheduleController extends Controller
{
    //
    public function getSchedule(Request $request)
    {
        try {
            $user = Auth::user();

        if (!$user->meetup_session_id) {
            return response()->json(['data' => []]); // Devuelve vacío si el usuario no tiene sesión
        }

        // Buscamos todas las actividades de la sesión del usuario,
        // ordenadas por hora de inicio.
        $schedule = SessionActivity::with('activity') // Carga la info de la actividad para no hacer más consultas (N+1)
            ->whereHas('activity', function ($query) use ($user) {
                $query->where('meetup_session_id', $user->meetup_session_id);
            })
            ->orderBy('start_time', 'asc')
            ->get();

        // Transformamos los datos para que el frontend los reciba más limpios.
        $formattedSchedule = $schedule->map(function ($sessionActivity) {
            return [
                'title' => $sessionActivity->activity->title,
                'type' => $sessionActivity->activity->type,
                'start_time' => $sessionActivity->start_time,
                'end_time' => $sessionActivity->end_time,
            ];
        });

        return response()->json(['data' => $formattedSchedule]);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $activities = Activity::where('meetup_session_id', $user->meetup_session_id)
                                ->with('activityDetail.activityDetailContents')
                                ->orderBy('start_date')
                                ->get();
        return ActivityResource::collection($activities);
    }
}

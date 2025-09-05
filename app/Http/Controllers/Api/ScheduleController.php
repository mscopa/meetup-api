<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use App\Http\Resources\ActivityResource;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $activities = Activity::where('meetup_session_id', $user->meetup_session_id)
                                ->with('activityDetails.activityDetailContents')
                                ->orderBy('start_date')
                                ->get();
        return ActivityResource::collection($activities);
    }
}

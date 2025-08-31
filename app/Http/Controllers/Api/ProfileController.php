<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRole;

class ProfileController extends Controller
{
    //
    public function getHeaderData(Request $request)
    {
        // Obtenemos el usuario autenticado gracias a Sanctum
        $user = $request->user();

        // Preparamos la base de datos que todos los usuarios tendrán
        $headerData = [
            'userName' => $user->first_name . ' ' . $user->last_name,
            'sessionName' => $user->meetupSession->name ?? 'Global', // Asumiendo que tienes la relación
            'announcements' => 2, // Lógica para contar anuncios irá aquí
            'currentActivity' => 'Búsqueda del Tesoro', // Lógica para la actividad actual irá aquí
        ];

        // Ahora, personalizamos el "paquete" según el rol
        switch ($user->role) {
            case UserRole::Participante:
                // Un participante tiene compañía y monedas a través de la tabla 'participants'
                // Asegúrate de tener esta relación en tu modelo User:
                // public function participation() { return $this->hasOne(Participant::class); }
                $participation = $user->participation;
                if ($participation) {
                    $headerData['companyName'] = $participation->company->name ?? 'Sin Asignar';
                    $headerData['score'] = $participation->company->score ?? 0;
                    $headerData['coins'] = $participation->coins;
                }
                break;

            case UserRole::Consejero:
                // Un consejero tiene compañía directamente o a través de una tabla
                // Asegúrate de tener esta relación en tu modelo User:
                // public function company() { return $this->belongsTo(Company::class); }
                if ($user->company) {
                    $headerData['companyName'] = $user->company->name;
                    $headerData['score'] = $user->company->score;
                }
                break;

            case UserRole::MatrimonioDirector:
                // El Matrimonio Director no tiene compañía ni score individual.
                // Podríamos añadir algo específico para ellos si quisiéramos.
                break;

            case UserRole::Administrador:
                // El Admin es global, no tiene compañía, score ni monedas.
                $headerData['sessionName'] = 'Todas las Sesiones';
                break;
        }

        return response()->json($headerData);
    }
}

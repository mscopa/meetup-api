<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Resources\ParticipantListResource;
use App\Models\Participant;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Devuelve una lista de todos los participantes de la sesión para la búsqueda.
     */
    public function index(Request $request)
    {
        // Usamos el Gate que ya definimos para proteger este endpoint
        $this->authorize('perform-check-in');

        $meetupSessionId = $request->user()->meetup_session_id;

        $participants = Participant::whereHas('company.user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->with('company') // Precargamos el nombre de la compañía
        ->orderBy('last_name')
        ->orderBy('first_name')
        ->get();
            
        // Usamos nuestro nuevo Resource liviano para la lista
        return ParticipantListResource::collection($participants);
    }

    /**
     * Almacena un nuevo participante registrado en el evento.
     */
    public function store(StoreParticipantRequest $request)
    {
        // El FormRequest ya validó y autorizó la petición
        $validated = $request->validated();
        
        $participant = Participant::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'company_id' => $validated['company_id'],
            'tshirt_size' => $validated['tshirt_size'],
            'approval_status' => 'Approved', // Lo aprobamos por defecto
            'attended' => true, // Marcamos que asistió
            'kit_delivered' => false, // El kit aún no se entrega
        ]);

        // Devolvemos el nuevo participante con el formato que el frontend ya entiende
        return new ParticipantListResource($participant->load('company'));
    }

    /**
     * Actualiza el estado de 'attended' y 'kit_delivered' de un participante.
     */
    public function update(Request $request, Participant $participant)
    {
        // Protegemos la ruta de actualización también
        $this->authorize('perform-check-in');
        
        $validated = $request->validate([
            'attended' => 'required|boolean',
            'kit_delivered' => 'required|boolean',
        ]);

        $participant->update($validated);

        // Devolvemos el participante actualizado con el formato de lista
        return new ParticipantListResource($participant->load('company'));
    }
}

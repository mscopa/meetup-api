<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Resources\ParticipantListResource;
use App\Models\Participant;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('perform-check-in');

        $meetupSessionId = $request->user()->meetup_session_id;

        $participants = Participant::whereHas('company.user', function ($query) use ($meetupSessionId) {
            $query->where('meetup_session_id', $meetupSessionId);
        })
        ->with('company') 
        ->orderBy('last_name')
        ->orderBy('first_name')
        ->get();
            
        return ParticipantListResource::collection($participants);
    }

    public function store(StoreParticipantRequest $request)
    {
        $validated = $request->validated();
        
        $participant = Participant::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'company_id' => $validated['company_id'],
            'tshirt_size' => $validated['tshirt_size'],
            'approval_status' => 'Approved',
            'attended' => true,
            'kit_delivered' => false,
        ]);

        return new ParticipantListResource($participant->load('company'));
    }

    public function update(Request $request, Participant $participant)
    {
        $this->authorize('perform-check-in');
        
        $validated = $request->validate([
            'attended' => 'required|boolean',
            'kit_delivered' => 'required|boolean',
        ]);

        $participant->update($validated);

        return new ParticipantListResource($participant->load('company'));
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'preferred_name' => $this->preferred_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'contact_name' => $this->contact_name,
            'email_contact_name' => $this->email_contact_name,
            'phone_contact_name' => $this->phone_contact_name,
            'contact_name_two' => $this->contact_name_two,
            'email_contact_name_two' => $this->email_contact_name_two,
            'phone_contact_name_two' => $this->phone_contact_name_two,
            'age' => $this->age,
            'stake' => $this->stake,
            'ward' => $this->ward,
            'bishop_email' => $this->bishop_email,
            'bishop_name' => $this->bishop_name,
            'gender' => $this->gender,
            'dietary_restrictions' => $this->dietary_restrictions,
            'tshirt_size' => $this->tshirt_size,
            'approval_status' => $this->approval_status,
            'attended' => $this->attended,
            'is_member' => $this->is_member,
            'kit_delivered' => $this->kit_delivered,
            'company' => new CompanyResource($this->whenLoaded('company')),
        ];
    }
}

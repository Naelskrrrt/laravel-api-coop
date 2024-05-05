<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'nomClient' => $this->nom_client,
            'adresseClient' => $this->adresse_client,
            'phoneClient' => $this->phone_client,
            'emailClient' => $this->email_client,
        ];
    }
}

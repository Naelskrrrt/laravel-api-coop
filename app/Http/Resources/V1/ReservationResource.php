<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'idClient' => $this->id_client,
            'idVoiture' => $this->id_voiture,
            'idAdmin' => $this->id_admin,
            'villeDestination' => $this->ville_destination,
            'dateDepart' => $this->date_depart,
            'dateReservation' => $this->date_reservation,
            'nbPers' => $this->nb_pers,
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         $method = $this->method();
            return [
                'idClient' => ['required', 'max:255'],
                'idVoiture' => ['required'],
                'idAdmin' => ['required'],
                'nomClient' => ['required', 'min:3', 'max:255'],
                'adresseClient' => ['min:3'],
                'emailClient' => ['required', 'email'],
                'phoneClient' => ['required', 'min:10'],
                'villeDestination' => ['required', 'min:3', 'max:255'],
                'dateDepart' => ['required'],
                'dateReservation' => ['required'],
                'nbPers' => ['required']
            ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'id_client' => $this->idClient,
            'id_voiture' => $this->idVoiture,
            'id_admin' => $this->idAdmin,
            'nom_client' => $this->nomClient,
            'adresse_client' => $this->adresseClient,
            'email_client' => $this->emailClient,
            'phone_client' => $this->phoneClient,
            'ville_destination' => $this->villeDestination,
            'date_depart' => $this->dateDepart,
            'date_reservation' => $this->dateReservation,
            'nb_pers' => $this->nbPers,
        ]);
    }
}

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
            'ville_destination' => $this->villeDestination,
            'date_depart' => $this->dateDepart,
            'date_reservation' => $this->dateReservation,
            'nb_pers' => $this->nbPers,
        ]);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
        return [
            'nomClient' => ['required', 'min:3', 'max:255'],
            'adresseClient' => ['min:3'],
            'emailClient' => ['required', 'email'],
            'phoneClient' => ['required', 'min:10']
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'nom_client' => $this->nomClient,
            'adresse_client' => $this->adresseClient,
            'email_client' => $this->emailClient,
            'phone_client' => $this->phoneClient

        ]);
    }
}

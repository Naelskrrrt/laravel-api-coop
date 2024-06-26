<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVoitureRequest extends FormRequest
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
            'modelVoiture' => ['required', 'min:3', 'max:255'],
            'nbPlace' => ['required'],
            'statut' => ['required']
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'model_voiture' => $this->modelVoiture,
            'nb_place' => $this->nbPlace,
            'statut' => $this->statut
        ]);
    }
}

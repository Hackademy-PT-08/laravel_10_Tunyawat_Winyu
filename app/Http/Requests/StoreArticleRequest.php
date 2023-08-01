<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'img' => 'required'
        ];
    }

    // Personalizzazione del messaggio di errore
    public function messages(): array
    {
        return [
            'title.required' => 'Titolo non inserito',
            'content.required' => 'Contenuto non inserito',
            'img.required' => 'Immagine non caricata'
        ];
    }
}

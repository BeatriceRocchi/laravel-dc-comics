<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
            'thumb' => 'required|min:3',
            'price' => 'required|min:3|max:7',
            'series' => 'required|min:3|max:150',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo non può avere più di :max caratteri',
            'description.required' => 'Il campo descrizione è obbligatorio',
            'description.min' => 'Il campo descrizione deve avere almeno :min caratteri',
            'thumb.required' => 'Il campo immagine è obbligatorio',
            'thumb.min' => 'Il campo immagine deve avere almeno :min caratteri',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.min' => 'Il campo prezzo deve avere almeno :min cifre',
            'price.max' => 'Il campo prezzo non può avere più di :max cifre',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.min' => 'Il campo serie deve avere almeno :min caratteri',
            'series.max' => 'Il campo serie non può avere più di :max caratteri',
            'sale_date' => 'Il campo data di vendita è obbligatorio',
            'type.required' => 'Il campo tipo è obbligatorio',
            'type.min' => 'Il campo tipo deve avere almeno :min caratteri',
            'type.max' => 'Il campo tipo non può avere più di :max caratteri',
        ];
    }
}

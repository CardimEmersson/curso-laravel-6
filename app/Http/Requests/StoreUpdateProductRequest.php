<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
           'description' => 'required|min:3|max:10000',
           'price' => 'required',
           'foto' => 'nullable|image'
        ];
    }

    public function messages() 
    {
        return [
            "name.required" => 'Nome é obrigratório',
            "name.min" => 'Precisa informar pelo menos 3 caracteres',
            "price.required" => 'Preço é obrigatório',
            "foto.required" => "Precisa enviar um arquivo"
        ];
    }
}

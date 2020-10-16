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

        $id = $this->segment(2);

        return [
           'name' => "required|min:3|max:255|unique:products,name,{$id}, id",
           'description' => 'required|min:3|max:10000',
           'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
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

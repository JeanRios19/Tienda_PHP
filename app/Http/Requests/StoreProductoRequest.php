<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //1. establecer reglas de validacion
        return [
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|max:100',
            "precio" => 'required|numeric|max:100000000',
            "imagen" => 'required|image',
            "categoria" => 'required',
            "marca" => 'required'
        ];
    }

    //mensajes personalizados
    public function messages(){
        return [
            'required' => 'Este campo debe ser obligatorio',
            'alpha' => 'Este campo solo debe contener letras',
            'max' => 'Este campo solo puede contener maximo :max caractéres',
            'numeric' => 'Este campo solo debe contener números',
            'image' => 'Este campo debe ser de tipo imagen',
            'unique' => 'Este nombre ya esta registrado'
        ];
    }
}

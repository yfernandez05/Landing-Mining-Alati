<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
        return [
            'nombres'=>'required|max:300',
            //'apellidos'=>'required|max:300',
            'email'=>'required|email|max:150',
            // 'dni'=>'required|min:8|max:8',
            'celular'=>'required|min:9',
            'profesion'=>'required|max:150',
            //'carrera'=>'required|max:300',
            //'campus'=>'required|max:300',
            //'egreso'=>'required|min:4|max:4',
            // 'terminos'=>'required',
        ];
    }
}

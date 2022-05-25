<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostProductosController extends FormRequest
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
        $rules =  [
            
            'nombre' => 'required|unique:productos|max:255',
            'codigo' => 'required|unique:productos|max:255',
            'descripcion' => 'required',   
            'precio' => 'required',
            'idestado' => 'required',
            'idcategoria' => 'required',          
            
        ];

        if($this->get('imagen'))
        $rules = array_merge($rules, ['imagen'    =>'mimes:jpg,jpeg,png']);
        return $rules;
       
    }
}

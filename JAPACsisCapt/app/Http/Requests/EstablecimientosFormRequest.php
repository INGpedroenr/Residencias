<?php

namespace JAPACsisCapt\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstablecimientosFormRequest extends FormRequest
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
            'nombre_establecimiento'=>'required|max:100',
            'razon_social'=>'required|max100',
            'rfc'=>'required|max:30',
            'actividad'=>'required|max:30',
            'calle'=>'required|max:100',
            'num_exterior'=>'required',
            'num_interior'=>'required|max:7',
            'colonia'=>'required|max:100',
            'codigo_postal'=>'required',
            'telefono'=>'required|max:15',
            'num_medidor'=>'required',
            'cuenta'=>'required',
            'correo_electronico'=>'required|max:50'

        ];
    }
}

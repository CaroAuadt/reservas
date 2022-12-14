<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'dni' => 'required|numeric|digits:8|unique:socios,dni,'.$this->id,
            'celular' => 'required|max:255',
            'email' => 'nullable|email',
        ];
    }
}

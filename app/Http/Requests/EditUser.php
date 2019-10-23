<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class EditUser extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'document' => ['required', Rule::unique('users')->ignore($this->route('user'))],
            'email' => ['required', Rule::unique('users')->ignore($this->route('user'))],
            'phone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        $document = $this->input('document');
        $email = $this->input('email');
        return [
            'document.unique' => "La cédula $document ya está registrada",
            'document.required' => "La cédula es obligatorio",
            'document.numeric' => "La cédula debe contener sólo números",
            'email.unique' => "El correo $email ya está registrado",
            'email.email' => "El correo no es válido",
            'phone.number' => "El teléfono debe contener sólo números",
            'phone.required' => "El teléfono es obligatorio",
        ];
    }
}

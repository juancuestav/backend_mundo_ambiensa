<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombres' => 'required|string|max:255',
            'apellidos' => 'nullable|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $this->route('cliente'),
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string',
            'ciudad' => 'nullable|string|max:100',
            'fecha_nacimiento' => 'nullable|date',
            'identificacion' => 'nullable|string|max:20|unique:clientes,numero_documento,' . $this->route('cliente'),
            'activo' => 'boolean',
        ];
    }
}

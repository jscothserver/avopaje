<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotRequest extends FormRequest
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
            'customer_id' => 'required|exists:customers,id',
            'reference_id' => 'nullable|exists:lots,id',
            'acopio_id' => 'nullable|exists:acopios,id',
            'huerto_id' => 'nullable|exists:huertos,id',
            'guia' => 'nullable|string|max:50',
            'fecha_corte' => 'nullable|date',
            'peso_externo' => 'nullable|numeric',
            'peso_interno' => 'required|numeric',
            'total_tarimas' => 'required|integer',
            'proceso_id' => 'required|exists:procesos,id',
            'tipo' => 'required|string|max:50',
            'marca' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'placa' => 'nullable|string|max:50',
            'chofer' => 'required|string|max:100',
            'comentarios' => 'nullable|string',
        ];
    }
}

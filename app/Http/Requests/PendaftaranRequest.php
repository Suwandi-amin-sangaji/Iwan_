<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
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
            'nama_kapal' => 'required|string|max:255',
            'email' => 'required|email|unique:registers',
            'no_hp' => 'required|unique:registers',
            'jumlah_penumpang' => 'required|integer',
            'cluster_id' => 'required',
            'tanggal' => 'required|date',
            'titik_selam_id' => 'required',
            'waktu_id' => 'required',
            'note' => 'nullable|string',

        ];
    }
}

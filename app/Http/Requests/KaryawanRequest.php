<?php

namespace App\Http\Requests;

use App\Enums\AgamaEnums;
use App\Enums\GolonganEnums;
use App\Enums\JenisKelaminEnums;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class KaryawanRequest extends FormRequest
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
            'nip' => 'required|numeric|unique:karyawans,nip',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => [
                'required',
                new Enum(JenisKelaminEnums::class)
            ],
            'golongan' => [
                'required',
                new Enum(GolonganEnums::class)
            ],
            'eselon' => 'nullable|integer',
            'jabatan_id' => 'nullable|exists:jabatans,id',
            'tempat_tugas' => 'nullable|string|max:255',
            'agama' => [
                'required',
                new Enum(AgamaEnums::class)
            ],
            'unit_kerja_id' => 'nullable|exists:unit_kerjas,id',
            'no_hp' => 'nullable|string|regex:/^[0-9]+$/|max:15',
            'npwp' => 'nullable|string|max:255',
        ];
    }
}

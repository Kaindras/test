<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PsertadidikUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'nipd' => 'unique:psertadidiks|min:4|required',
            'nisn' => 'min:10',
            'nama_lengkap' =>'required',
            'jnsklmn' => 'required',
            'tempatlhr' => 'required',
            'tgllhr' => 'required',
            'agama' => 'required',
            // 'kwgnegaraan' =>'required',
            'foto_in' => 'image|max:5120'
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Ppdb;
use App\Models\Tinggal;
use App\Models\Kegemaran;
use App\Models\Kesehatan;
use App\Models\Ibukandung;
use App\Models\Pendidikan;
use App\Models\Ayahkandung;
use App\Models\Perkembangan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;

class PsertadidikCreateRequest extends FormRequest
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
            'kwgnegaraan' =>'required',
            'foto_in' => 'image|max:5120'


        ];

    }
    public function attributes(): array
    {
    return [
        'nipd' => 'NIPD',
        'nisn' => 'NISN',
        'nama_lengkap' => 'Nama Lengkap',
        'jnsklmn' => 'Jenis Kelamin',
        'tempatlhr' => 'Tempat Lahir',
        'tgllhr' => 'Tgl Lahir',
        'agama' => 'Agama',
        'kwgnegaraan' => 'Kewarganegaraan',
        // 'foto_in' => 'Foto Pesertadidik'
    ];
    }

    public function messages(){
        return [
            'nipd.required' => 'NIPD wajib di isi',
            'nipd.unique.' => 'NIPD sudah ada',
            'nipd.min' => 'NIPD Minimal:min Angka',
            'nisn.min' => 'NISN Minimal:min Angka',
            'nama_lengkap.required' => ' Nama Lengkap Harus Diisi',
            'jnsklmn.required' => 'Jenis Kelamin Harus Diisi',
            'tempatlhr.required' => ' Tempat Lahir Harus Diisi',
            'tgllhr.required' => ' Tanggal lahir Harus Diisi',
            'agama.required' => ' Agama Harus Diisi',
            'kwgnegaraan.required' => ' Kewarganegaraan Harus Diisi',
            // 'foto_in.max' => 'Foto harus dibawah 4Mega Byte'
        ];
    }

}

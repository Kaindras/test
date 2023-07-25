<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayahkandung extends Model
{
    use HasFactory;
      protected $fillable = [
            'nama_ayah',
            'tmpt_ayah',
            'tgl_ayah',
            'agama_ayah',
            'kwg_ayah',
            'pndidikan_ayah',
            'pkrjaan_ayah',
            'pngeluaran_ayah',
            'almt_ayah',
            'nohp_ayah',
            'hdp_mninggal_ayah',
            'psertadidik_id'
    ];

    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

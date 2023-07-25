<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
      protected $fillable = [
        'nama_wali',
            'tmpt_wali',
            'tgl_wali',
            'agama_wali',
            'kwg_wali',
            'pndidikan_wali',
            'pkrjaan_wali',
            'pngeluaran_wali',
            'almt_wali',
            'nohp_wali',
            'hdp_mninggal_wali',
            'psertadidik_id'
    ];

     public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

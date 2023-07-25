<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibukandung extends Model
{
    use HasFactory;
     protected $fillable = [
            'nama_ibu',
            'tmpt_ibu',
            'tgl_ibu',
            'agama_ibu',
            'kwg_ibu',
            'pndidikan_ibu',
            'pkrjaan_ibu',
            'pngeluaran_ibu',
            'almt_ibu',
            'nohp_ibu',
            'hdp_mninggal_ibu',
            'psertadidik_id'
    ];
    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

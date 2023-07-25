<?php

namespace App\Models;

use App\Models\Psertadidik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendidikan extends Model
{
    use HasFactory;

      protected $fillable = [
           'tamat_dr',
           'tgl_no_ijsh',
           'tgl_no_skhu',
           'lama_bljr',
           'pdh_dr_sklh',
           'alasan_pdh',
           'dtrm_kelas',
           'dtrm_bidang',
           'dtrm_program',
           'dtrm_komp',
           'tgl_dtrima',
           'psertadidik_id'
    ];

    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class,'psertadidik_id','id');
    }
}

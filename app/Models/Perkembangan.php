<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    use HasFactory;
      protected $fillable = [
            'beasiswa_thn',
            'beasiswa_kls',
            'beasiswa_dari',
            'tgl_tinggal_sklh',
            'alasan_tinggal',
            'lulus_pdk',
            'no_tgl_ijasah',
            'no_tgl_skhu',
            'mlanjutkan_ke',
            'bkerja_di',
            'tgl_mulai_krja',
            'nma_prshaan',
            'penghasilan',
            'psertadidik_id'
    ];

    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

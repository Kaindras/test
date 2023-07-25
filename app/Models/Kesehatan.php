<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;

    protected $fillable =[
        'gol_drh',
        'pnykit_yg_drt',
        'kel_jasmani',
        'tinggi',
        'bb',
        'psertadidik_id',

    ];
      public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

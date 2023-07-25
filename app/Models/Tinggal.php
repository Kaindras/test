<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinggal extends Model
{
    use HasFactory;
    protected $fillable =[
        'almt',
          'nohp',
          'tinggaldgn',
          'jrk_k_sklh',
          'psertadidik_id'
    ];
    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

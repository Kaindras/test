<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegemaran extends Model
{
    use HasFactory;
    protected $fillable =[
        'kgm_kesenian',
        'kgm_olhraga',
        'kgm_orgnsasi',
        'kgm_lain',
        'psertadidik_id'
    ];
    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

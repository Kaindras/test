<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_ppdb',
        'nik',
        'kk',
        'psertadidik_id'
    ];
    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class);
    }
}

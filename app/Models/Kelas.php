<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_kelas'
    ];
    public function naikkelas(){

        return $this->hasMany(Naikkelas::class,'kelas_id','id');
    }
    // public function psertadidik(){

    //     return $this->hasMany(Psertadidik::class);
    // }
}

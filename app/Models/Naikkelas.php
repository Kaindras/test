<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Ajaran;
use App\Models\Psertadidik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Naikkelas extends Model
{
    use HasFactory;

    protected $fillable =[
        'tahun',
        'kelas_id',
        'thnplajaran_id',
        'psertadidik_id',
        'user_id',
    ];

    public function ajaran()
    {
        return $this->hasOne(Ajaran::class, 'thnplajaran_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function psertadidik()
    {
        return $this->belongsTo(Psertadidik::class, 'psertadidik_id', 'id');
    }

    public function nilai(){
        return $this->belongsToMany(Nilai::class,'nilai_id','id');
    }

}

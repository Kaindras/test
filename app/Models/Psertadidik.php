<?php

namespace App\Models;


use App\Models\Ppdb;
use App\Models\Wali;
use App\Models\Tinggal;
use App\Models\Kegemaran;
use App\Models\Kesehatan;
use App\Models\Naikkelas;
use App\Models\Ibukandung;
use App\Models\Pendidikan;
use App\Models\Ayahkandung;
use App\Models\Perkembangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psertadidik extends Model
{
    use HasFactory;
    protected $fillable = [
            'nama_lengkap',
            'namapgl',
            'nipd',
            'nisn',
            'jnsklmn',
            'tempatlhr',
            'tgllhr',
            'agama',
            'kwgnegaraan',
            'anakke',
            'jml_s_kd',
            'jml_s_tr',
            'jml_s_angkat',
            'anky_yp_p',
            'bhs',
            'foto_in',
            'foto_out',
        ];
        public function tinggal()
        {
            return $this->hasOne(Tinggal::class, 'psertadidik_id', 'id');
        }
    public function kesehatan()
    {
        return $this->hasOne(Kesehatan::class, 'psertadidik_id', 'id');
    }
    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'psertadidik_id', 'id');
    }
    public function ayahkandung()
    {
        return $this->hasOne(Ayahkandung::class, 'psertadidik_id', 'id');
    }
    public function ibukandung()
    {
        return $this->hasOne(Ibukandung::class, 'psertadidik_id', 'id');
    }
    public function wali()
    {
        return $this->hasOne(Wali::class, 'psertadidik_id', 'id');
    }
     public function kegemaran()
    {
        return $this->hasOne(Kegemaran::class, 'psertadidik_id', 'id');
    }
    public function perkembangan()
    {
        return $this->hasOne(Perkembangan::class, 'psertadidik_id', 'id');
    }
    public function ppdb()
    {
        return $this->hasOne(Ppdb::class, 'psertadidik_id', 'id');
    }

    public function naikkelas()
    {
        return $this->hasOne(Naikkelas::class,'psertadidik_id','id');
    }



}

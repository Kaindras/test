<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }

    public function semester()
    {
        return $this->hasMany(Semester::class);
    }


        public function naikkelas()
        {
            return $this->belongsTo(Naikkelas::class, 'naikelas', 'naikkelas_id', 'id');
        }



}

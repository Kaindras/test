<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_semester'
    ];

     public function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajaran extends Model
{
    use HasFactory;
    protected $fillable =[
        'nm_thnplajaran',
    ];

    public function naikkelas()
    {
        return $this->belongsTo(Naikkelas::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = ["kriteria_id", "pertanyaan", "kode_atribut"];


    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    use HasFactory;
    protected $table = 'waktus';

    // relasi Waktu ke Registrasi
    public function register()
    {
        return $this->hasMany(Register::class);
    }

    // relasi Waktu ke Titik Selam
    public function titik_selam()
    {
        return $this->belongsTo(TitikSelam::class);
    }

    // relasi Waktu ke Cluster
    public function cluster()
    {
        return $this->belongsTo(Cluster::class);
    }


}

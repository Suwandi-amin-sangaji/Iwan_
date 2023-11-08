<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Register extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    
    public function cluster()
    {
        return $this->belongsTo(Cluster::class, 'cluster_id');
    }

    public function titikSelam()
    {
        return $this->belongsTo(TitikSelam::class, 'titik_selam_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }
}

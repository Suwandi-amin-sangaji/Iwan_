<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function titikSelams()
    {
        return $this->hasMany(TitikSelam::class, 'cluster_id');
    }
}

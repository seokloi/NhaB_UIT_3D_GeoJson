<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurFace extends Model
{
    protected $table = 'surfaces';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'desc'
    ];

    public function faces(){
        return $this->hasMany(Face::class, 'surface_id');
    }
}

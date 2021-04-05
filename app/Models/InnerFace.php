<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InnerFace extends Model
{
    protected $table = 'innerface';
    public $incrementing = false;
    protected $fillable = [
        'id', 'face_id',
    ];

    public function nodes(){
        return $this->hasMany(Node::class, 'innerface_id');
    }

    public function face(){
        return $this->belongsTo(Face::class, 'face_id');
    }
}

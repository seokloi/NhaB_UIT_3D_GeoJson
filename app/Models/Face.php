<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    protected $table = 'faces';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'desc', 'body_id', 'surface_id'
    ];

    public function facenodes(){
        return $this->hasMany(FaceNode::class, 'face_id');
    }

//    public function node_seq(){
//        return $this->nodes()->sortBy('seq');
//    }

    public function innerFaces(){
        return $this->hasMany(InnerFace::class, 'face_id');
    }

//    public function innerFace_seq(){
//        return $this->innerFaces()->sortBy('seq');
//    }

    public function body(){
        return $this->belongsTo(Body::class, 'body_id');
    }

    public function surface(){
        return $this->hasMany(SurFace::class, 'surface_id');
    }
}

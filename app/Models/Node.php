<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $table = 'nodes';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'desc',
        'body_id',
        'innerface_id',
        'seq_inner'
    ];

    public function point(){
        return $this->hasOne(Point::class, 'node_id');
    }

    public function lines(){
        return $this->belongsToMany(Line::class);
    }

    public function faces(){
        return $this->belongsToMany(Face::class);
    }

    public function innerFace(){
        return $this->belongsTo(InnerFace::class, 'innerface_id');
    }

    public function body(){
        return $this->belongsTo(Body::class, 'body_id');
    }
}

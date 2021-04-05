<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $table = 'bodies';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'desc', 'floor_id'
    ];

    public function nodes(){
        return $this->hasMany(Node::class, 'body_id');
    }

    public function faces(){
        return $this->hasMany(Face::class, 'body_id');
    }

    public function floor(){
        return $this->belongsTo(Floor::class, 'floor_id');
    }

}

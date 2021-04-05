<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'points';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'id', 'name', 'long', 'lat', 'z', 'node_id'
    ];

    public function node(){
        return $this->belongsTo(Node::class, 'node_id');
    }
}

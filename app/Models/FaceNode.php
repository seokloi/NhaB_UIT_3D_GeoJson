<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaceNode extends Model
{
    protected $table = 'face_node';

    public $timestamps = false;

    protected $fillable = [
        'face_id',
        'node_id',
        'seq'
    ];

    public function node(){
        return $this->belongsTo(Node::class, 'node_id');
    }

}

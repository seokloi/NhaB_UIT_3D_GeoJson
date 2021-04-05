<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineNode extends Model
{
    protected $table = 'line_node';

    public $timestamps = false;

    protected $fillable = [
        'line_id',
        'node_id',
        'seq'
    ];

    public function node(){
        return $this->belongsTo(Node::class, 'node_id');
    }

}

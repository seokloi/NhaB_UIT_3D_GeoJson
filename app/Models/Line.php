<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $table = 'lines';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'desc'
    ];

    public function linenode(){
        return $this->hasMany(LineNode::class, 'line_id');
    }
}

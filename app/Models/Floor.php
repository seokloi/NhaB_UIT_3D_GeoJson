<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = 'floors';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'desc'
    ];

    public function body(){
        return $this->hasMany(Body::class, 'body_id');
    }

//    public function getIdAttribute(){
//        dd($this->id);
//    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function getCmp(){
        return $this->hasOne('App\Models\companie');
    }public function getCmps(){
        return $this->hasMany('App\Models\companie');
    }
}

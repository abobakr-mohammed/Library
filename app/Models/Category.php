<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name','image','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];

    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}

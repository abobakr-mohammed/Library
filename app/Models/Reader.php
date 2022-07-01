<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $table = "readers" ;
    protected $fillable = ['name','username','email','password','created_at','updated_at','pivot'];
    protected $hidden  = ['created_at','updated_at','pivot'];

    public function books(){
       return $this->belongsToMany('App\Models\Book','reader_books','reader_id','book_id','id','id');
    }
}
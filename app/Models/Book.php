<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
   protected $table = "books";
   protected $fillable = ['name','upload_file','image','discription','category_id','created_at','updated_at'];
   protected $hidden = ['created_at','updated_at','pivot'];

   public function categories(){

    return $this->belongsTo('App\Models\Category','Category_id','id');
   }

   public function readers(){
       return $this->belongsToMany('App\Models\Reader','reader_books','book_id','reader_id','id','id');


   }
}

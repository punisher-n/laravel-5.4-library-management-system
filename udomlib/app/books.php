<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class books extends Model
{
   protected $fillable = [
       'name',
       'author',
       'title'
   ];

   public function scopePublished($query){

      $query->where ('created_at', '<=', Carbon::now());
   }
   public function scopeUnPublished($query){

      $query->where ('created_at', '>', Carbon::now());
   }
}

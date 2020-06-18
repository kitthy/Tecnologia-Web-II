<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //nombre de la tabla 
   //protected $table = 'my_table';
  // public $fillable = ['title', 'description'];
    protected $guarded =[];

   public function getRouteKeyName()
   {
       return 'id';
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //nombre de la tabla 
   //protected $table = 'my_table';
  // public $fillable = ['title', 'description'];
    //protected $table ='projects';
  //  protected $primaryKey = 'protect_id';

    protected $guarded =[];

   public function getRouteKeyName()
   {
       return 'id';
   }
}

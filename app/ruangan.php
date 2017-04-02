<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
   protected $table ='ruangan';
   protected $fillable =['title'];

   public function jadwalmatakuliah(){
   	return $this->hasMany(jadwalmatakuliah::class);
   }
}

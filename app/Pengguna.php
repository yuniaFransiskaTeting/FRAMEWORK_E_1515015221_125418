<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as Authenticatablecontract;

class Pengguna extends Model implements AuthenticatableContract



{
		use Authenticatable;

	protected $table = 'pengguna';
	protected $fillable =['username','password'];
	
	public function dosen(){
		return $this->hasOne(Dosen::class);
	}
	public function mahasiswa()
	{
		return $this->hasOne(Mahasiswa::class);
	}
	// public function peran()
	// {
	// 	return $this->belongsToMany(Peran::class);
	// }
}
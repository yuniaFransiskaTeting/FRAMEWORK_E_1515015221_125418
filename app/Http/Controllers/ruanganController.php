<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{

	public function awal()
	{
		return "hallo dari ruanganController";
	}
  

  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$ruangan = new ruangan();
		$ruangan->id = '';
		$ruangan->title='ruangan kelas';
		$ruangan->save();
    
		return "data dengan username {$ruangan->id} telah disimpan";
	}
    //
}

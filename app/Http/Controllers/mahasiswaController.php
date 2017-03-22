<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
	public function awal()
	{
		return "hallo dari mahasiswaController";
	}
  

  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama='yunia';
		$mahasiswa->nim='N0001';
		$mahasiswa->pengguna_id='1';
		$mahasiswa->save();
    
		return "data dengan username {$mahasiswa->nama} telah disimpan";
	}
    //
}

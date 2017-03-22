<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
	public function awal()
	{
		return "hallo dari DosenController";
	}
  

  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = 'yunia';
		$dosen->nip='001';
		$dosen->pengguna_id='1';
		$dosen->save();
    
		return "data dosen dengan nama : {$dosen->nama} dan nip:{$dosen->nip} telah disimpan";
	}
    //
}

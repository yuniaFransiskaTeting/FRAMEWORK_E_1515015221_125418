<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwalmatakuliah;


class jadwalmatakuliahController extends Controller
{
	public function awal()
	{
		return "hallo dari jadwalmatakuliahController";
	}
  

  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$jadwalmatakuliah = new jadwalmatakuliah();
		$jadwalmatakuliah->mahasiswa_id='1';
		$jadwalmatakuliah->ruangan_id='1';
		$jadwalmatakuliah->dosen_matakuliah_id='1';
		$jadwalmatakuliah->save();
    
		return "data dengan username {$jadwalmatakuliah->mahasiswa_id} telah disimpan";
	}
    //
}

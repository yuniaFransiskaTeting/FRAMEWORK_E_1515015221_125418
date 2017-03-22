<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosenmatakuliah;

class dosenmatakuliahController extends Controller
{
	public function awal()
	{
		return "hallo dari Dosen_matakuliahController";
	}
  

  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosenmatakuliah = new dosenmatakuliah();
		$dosenmatakuliah->id = '';
		$dosenmatakuliah->dosen_id='5';
		$dosenmatakuliah->matakuliah_id='1';
		$dosenmatakuliah->save();
    
		return "data dengan id :{$dosenmatakuliah->id} telah disimpan";
	}
    //
}

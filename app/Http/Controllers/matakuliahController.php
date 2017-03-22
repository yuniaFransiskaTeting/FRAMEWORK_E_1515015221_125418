<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\matakuliah;


class matakuliahController extends Controller
{
	public function awal()
	{
		return "hallo dari matakuliahController";
	}
  public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->id = '';
		$matakuliah->title = 'sosbud';
		$matakuliah->keterangan='selasa pagi jam 7.30';
		$matakuliah->save();
    
		return "data dengan id matakuliah :{$matakuliah->id} dan nama matakuliah  : {$matakuliah->title} telah disimpan";
	}
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
	public function awal()
	{
		return "Hello dari PenggunaConntroller";
	}

	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna->username = 'jon_doe';
		$pengguna->password='doe_jon';
		$pengguna->save();
    
		return "data dengan username {$pengguna->username} telah disimpan";
	}
}



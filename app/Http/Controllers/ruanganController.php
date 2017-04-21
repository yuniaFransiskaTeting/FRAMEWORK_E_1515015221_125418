<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ruangan;
use Input;
use Redirect;
use Informasi;
use App\Http\Requests\ruanganrequest;

class ruangancontroller extends Controller
{
    public function awal(){
        return view('ruangan.awal',['data'=>ruangan::all()]);
    }
    public function tambah(){
        return view('ruangan.tambah');
    }
    public function simpan(ruanganrequest $input){
        $ruangan = new ruangan;
        $ruangan->id=$input->id;
        $ruangan->title=$input->title;
        $ruangan->Keterangan=$input->Keterangan;
        $informasi = $ruangan->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $ruangan=ruangan::find($id);
        return view('ruangan.edit', compact('ruangan'));
    }
public function lihat($id){
        $ruangan=ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }

    public function update($id, ruanganrequest $input){
        $ruangan = ruangan::find($id);
        $ruangan -> id = $input -> id;
        $ruangan -> title = $input -> title;
        $informasi = $ruangan-> save()? 'berhasil update data' : 'gagal update date';
        return redirect('ruangan')-> with(['informasi'=> $informasi]);
    }
    public function hapus($id){
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    }
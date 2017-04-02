<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class jadwalmatakuliahcontroller extends Controller
{
     public function awal(){
        return view('jadwalmatakuliah.awal',['data'=>jadwalmatakuliah::all()]);
    }
    public function tambah(){
        return view('jadwalmatakuliah.tambah');
    }
    public function simpan(Request $input){
        $jadwalmatakuliah = new jadwalmatakuliah;
        $jadwalmatakuliah->id=$input->id;
        $jadwalmatakuliah->nama=$input->nama;
        $jadwalmatakuliah->nip=$input->nip;
        $jadwalmatakuliah->alamat=$input->alamat;
        $informasi = $jadwalmatakuliah->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $jadwalmatakuliah=jadwalmatakuliah::find($id);
        return view('jadwalmatakuliah.edit', compact('jadwalmatakuliah'));
    }
public function lihat($id){
        $jadwalmatakuliah=jadwalmatakuliah::find($id);
        return view('jadwalmatakuliah.lihat')->with(array('jadwalmatakuliah'=>$jadwalmatakuliah));
    }

    public function update($id, Request $input){
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        $jadwalmatakuliah -> id = $input -> id;
        $jadwalmatakuliah -> nama = $input -> nama;
        $jadwalmatakuliah -> nip = $input -> nip;
         $jadwalmatakuliah -> alamat = $input -> alamat;
        $informasi = $jadwalmatakuliah-> save()? 'berhasil update data' : 'gagal update date';
        return redirect('jadwalmatakuliah')-> with(['informasi'=> $informasi]);
    }
    public function hapus($id){
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        $informasi = $jadwalmatakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
    }
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
     public function awal(){
        return view('dosen.awal',['data'=>dosen::all()]);
    }
    public function tambah(){
        return view('dosen.tambah');
    }
    public function simpan(Request $input){
        $dosen = new dosen;
        $dosen->id=$input->id;
        $dosen->nama=$input->nama;
        $dosen->nip=$input->nip;
        $dosen->alamat=$input->alamat;
        $informasi = $dosen->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $dosen=dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }
public function lihat($id){
        $dosen=dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update($id, Request $input){
        $dosen = dosen::find($id);
        $dosen -> id = $input -> id;
        $dosen -> nama = $input -> nama;
        $dosen -> nip = $input -> nip;
         $dosen -> alamat = $input -> alamat;
        $informasi = $dosen-> save()? 'berhasil update data' : 'gagal update date';
        return redirect('dosen')-> with(['informasi'=> $informasi]);
    }
    public function hapus($id){
        $dosen = dosen::find($id);
        $informasi = $dosen->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;
use App\dosen;
use App\Matakuliah;
use App\JadwalMatakuliah;

class dosenmatakuliahcontroller extends Controller
{
    
    public function awal(){
        // $dosenmatakuliah = dosenmatakuliah::all();
        return view('dosenmatakuliah.awal',['data'=>dosenmatakuliah::all()]);
    }
    public function tambah(){
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.tambah',compact('dosen','matakuliah'));
        return $this->simpan();
    }
    public function simpan(Request $input){
       $dosenmatakuliah = new DosenMatakuliah($input->only('dosen_id','matakuliah_id'));
       if($dosenmatakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil disimpan";
    return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $dosenmatakuliah=dosenmatakuliah::find($id);
        return view('dosenmatakuliah.edit', compact('dosenmatakuliah'));
    }
public function lihat($id){
        $dosenmatakuliah=dosenmatakuliah::find($id);
        return view('dosenmatakuliah.lihat')->with(array('dosenmatakuliah'=>$dosenmatakuliah));
    }

    public function update($id, Request $input){
        $dosenmatakuliah = dosenmatakuliah::find($id);
        $dosenmatakuliah -> id = $input -> id;
        $dosenmatakuliah -> nama = $input -> nama;
        $dosenmatakuliah -> nip = $input -> nip;
         $dosenmatakuliah -> alamat = $input -> alamat;
        $informasi = $dosenmatakuliah-> save()? 'berhasil update data' : 'gagal update date';
        return redirect('dosenmatakuliah')-> with(['informasi'=> $informasi]);
    }
    public function hapus($id){
        $dosenmatakuliah = dosenmatakuliah::find($id);
        $informasi = $dosenmatakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosenmatakuliah')->with(['informasi'=>$informasi]);
    }
    }
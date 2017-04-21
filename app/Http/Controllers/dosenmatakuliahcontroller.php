<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenmatakuliah;
use App\dosen;
use App\Matakuliah;
use App\JadwalMatakuliah;
use App\Http\Requests\dosenmatakuliahrequest;

class dosenmatakuliahcontroller extends Controller
{
    
    public function awal(){
        // $dosenmatakuliah = dosenmatakuliah::all();
        $Semua_Dosen_Matakuliah = dosenmatakuliah::all();
        return view('dosenmatakuliah.awal',compact('Semua_Dosen_Matakuliah'));
    }
    public function tambah(){
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.tambah',compact('dosen','matakuliah'));
        return $this->simpan();
    }
    public function simpan(dosenmatakuliahrequest $input){
       $dosenmatakuliah = new dosenmatakuliah($input->only('dosen_id','matakuliah_id'));
    
       if($dosenmatakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil disimpan";
    return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $dosenmatakuliah=DosenMatakuliah::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.edit', compact('dosenmatakuliah','dosen','matakuliah'));
    }
public function lihat($id){
        $dosenmatakuliah=DosenMatakuliah::find($id);
        return view('dosenmatakuliah.lihat', compact('dosenmatakuliah'));
    }

    public function update($id, dosenmatakuliahequest $input){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosenmatakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosenmatakuliah->save()) $this->informasi = "matakuliah dan Dosen Mengajar berhasil di update";
        // $dosenmatakuliah -> id = $input -> id;
        // $dosenmatakuliah -> nama = $input -> nama;
        // $dosenmatakuliah -> nip = $input -> nip;
        //  $dosenmatakuliah -> alamat = $input -> alamat;
        // $informasi = $dosenmatakuliah-> save()? 'berhasil update data' : 'gagal update date';
        return redirect('dosenmatakuliah')-> with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        if($dosenmatakuliah->delete()) $this->informasi = "matakuliah dan mahahasiswa berhasil dihapus";
        // $informasi = $dosenmatakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    }

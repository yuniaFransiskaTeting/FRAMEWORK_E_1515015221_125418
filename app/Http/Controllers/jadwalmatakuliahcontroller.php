<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;
use App\mahasiswa;
use App\ruangan;
use App\dosenmatakuliah;

class jadwalmatakuliahcontroller extends Controller
{
    protected $informasi = 'gagal melakukan aksi';
     public function awal(){
        $semuajadwalmatakuliah = jadwalmatakuliah::all();
        return view('jadwalmatakuliah.awal',['data'=>jadwalmatakuliah::all()]);
    }
    public function tambah(){
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosenmatakuliah = new dosenmatakuliah;
        return view('jadwalmatakuliah.tambah', compact('mahasiswa', 'ruangan', 'dosenmatakuliah'));
    }
    public function simpan(Request $input){
    $jadwalmatakuliah = new jadwalmatakuliah($input->only('ruangan_id', 'dosen_matakuliah_id'));
        if ($jadwalmatakuliah->save()) $this->informasi='jadwal mahasiswa berubah';
        return redirect('jadwalmatakuliah')->with (['informasi'=>$this->informasi]);}

       // $jadwalmatakuliah = new jadwalmatakuliah;
       //  $jadwalmatakuliah->mahasiswa_id=$input->mahasiswa_id;
       //  $jadwalmatakuliah->dosen_matakuliah_id=$input->dosen_matakuliah_id;
       //  $jadwalmatakuliah->ruangan_id=$input->ruangan_id;
       //  $informasi = $jadwalmatakuliah->save() ? 'berhasil input' : 'gagal simpan';
       //  return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
    }

//     public function edit($id){
//         $jadwalmatakuliah=jadwalmatakuliah::find($id);
//         return view('jadwalmatakuliah.edit', compact('jadwalmatakuliah'));
//     }
// public function lihat($id){
//         $jadwalmatakuliah=jadwalmatakuliah::find($id);
//         return view('jadwalmatakuliah.lihat')->with(array('jadwalmatakuliah'=>$jadwalmatakuliah));
//     }

//     public function update($id, Request $input){
//         $jadwalmatakuliah = jadwalmatakuliah::find($id);
//         $jadwalmatakuliah -> ruangan_id = $input -> ruangan_id;
//         $jadwalmatakuliah -> dosen_matakuliah_id = $input -> dosen_matakuliah_id;
//         $jadwalmatakuliah -> mahasiswa_id = $input -> mahasiswa_id;
//         $informasi = $jadwalmatakuliah-> save()? 'berhasil update data' : 'gagal update date';
//         return redirect('jadwalmatakuliah')-> with(['informasi'=> $informasi]);
//     }
//     public function hapus($id){
//         $jadwalmatakuliah = jadwalmatakuliah::find($id);
//         $informasi = $jadwalmatakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
//         return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
//     }
//     }
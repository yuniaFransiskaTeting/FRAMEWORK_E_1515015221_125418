<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
use App\dosen;
use App\Http\Requests\dosenrequest;

class dosencontroller extends Controller
{
     public function awal(){
        $semuadosen = dosen::all();
        return view ('dosen.awal',compact('semuadosen'));
        // return view('dosen.awal',['data'=>dosen::all()]);
    }
    public function tambah(){
        return view('dosen.tambah');
    }
    public function simpan(dosenrequest $input){
    $pengguna= new pengguna($input->only('username','password'));
            if($pengguna->save()){
        $dosen = new dosen;
        $dosen->nama=$input->nama;
        $dosen->nip=$input->nip;
        $dosen->alamat=$input->alamat;
        $dosen->pengguna_id=$input->pengguna_id;
        if ($pengguna->dosen()->save($dosen))
            $this->informasi = 'berhasil simpan data';
    }
    return redirect('dosen')->with (['informasi'=> $this->informasi]);
        // $informasi = $dosen->save() ? 'berhasil input' : 'gagal simpan';
        // return redirect('dosen')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $dosen=dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }
public function lihat($id){
        $dosen=dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update($id, dosenrequest $input){
        $dosen = dosen::find($id);
        $pengguna = $dosen->pengguna;
        // $dosen -> id = $input -> id;
        $dosen-> nama = $input -> nama;
        $dosen-> nip = $input -> nip;
        $dosen-> alamat = $input -> alamat;
        $dosen->save();
        if(!is_null($input->username)){
            $pengguna->fill($input->only('username'));
            if(!empty($input->password)){
                $pengguna->password = $input->password;
            }
            if($pengguna->save()) $this->informasi="berhasil simpan data";
        }
        else{
            $this->informasi='berhasil simpan data';
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
        // $informasi = $dosen-> save()? 'berhasil update data' : 'gagal update date';
        // return redirect('dosen')-> with(['informasi'=> $informasi]);
    }
    public function hapus($id){
        $dosen = dosen::find($id);
        $informasi = $dosen->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }}
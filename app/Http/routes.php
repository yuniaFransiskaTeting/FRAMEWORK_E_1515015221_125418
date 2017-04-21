<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('ujiHas', 'RelationshipRebornController@ujiHas');

Route::get('pengguna', 'penggunaController@awal');
Route::get('pengguna/tambah', 'penggunaController@tambah');
Route::get('pengguna/{pengguna}', 'penggunaController@lihat');
Route::post('pengguna/simpan', 'penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'penggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunaController@hapus');


Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::get('ruangan/{ruangan}', 'ruanganController@lihat');
Route::post('ruangan/simpan', 'ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'ruanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'ruanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'ruanganController@hapus');


Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}', 'matakuliahController@lihat');
Route::post('matakuliah/simpan', 'matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'matakuliahController@hapus');



Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');
Route::get('dosen/{dosen}', 'dosenController@lihat');
Route::post('dosen/simpan', 'dosenController@simpan');
Route::get('dosen/edit/{dosen}', 'dosenController@edit');
Route::post('dosen/edit/{dosen}', 'dosenController@update');
Route::get('dosen/hapus/{dosen}', 'dosenController@hapus');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('mahasiswa/{mahasiswa}', 'mahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'mahasiswaController@hapus');


Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal');
Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahController@tambah');
Route::get('jadwalmatakuliah/{jadwalmatakuliah}', 'jadwalmatakuliahcontroller@lihat');
Route::post('jadwalmatakuliah/simpan', 'jadwalmatakuliahController@simpan');
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}', 'jadwalmatakuliahcontroller@edit');
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}', 'jadwalmatakuliahController@update');
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}', 'jadwalmatakuliahcontroller@hapus');


Route::get('dosenmatakuliah','dosenmatakuliahcontroller@awal');
Route::get('dosenmatakuliah/tambah','dosenmatakuliahcontroller@tambah');
Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}', 'dosenmatakuliahcontroller@lihat');
Route::post('dosenmatakuliah/simpan', 'dosenmatakuliahcontroller@simpan');
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}', 'dosenmatakuliahcontroller@edit');
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}', 'dosenmatakuliahcontroller@update');
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}', 'dosenmatakuliahcontroller@hapus');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/public', function () {
    return view('yunia');
});

Route::get('/', function(Illuminate\Http\Request $request){
	echo "ini adalah request dari method get". $request->nama;
});


use Illuminate\Http\Request;
Route::get('/', function(){
	echo Form::open(['url'=>'/']).
		 Form::label('nama').
		 Form::text('nama', null).
		 Form::submit('kirim').
		 Form::close();
});

Route::post('/', function(Request $request){
	echo "hasil dari form yang di inputkan adalah : ". $request->nama;
});


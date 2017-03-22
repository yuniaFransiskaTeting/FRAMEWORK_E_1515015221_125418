<?php


//dosen
Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'Dosencontroller@tambah');

//dosenmatakuliah
Route::get('dosenmatakuliah', 'dosenmatakuliahController@awal');
Route::get('dosenmatakuliah/tambah', 'dosenmatakuliahcontroller@tambah');

//jadwalmatakuliah
Route::get('jadwalmatakuliah', 'jadwalmatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah', 'jadwalmatakuliahcontroller@tambah');

//mahasiswa
Route::get('mahasiswa', 'mahasiswaController@awal');
Route::get('mahasiswa/tambah', 'mahasiswacontroller@tambah');

//matakuliah
Route::get('matakuliah', 'matakuliahController@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::get('matakuliah/simpan{matakuliah}', 'Penggunacontroller@simpan');
Route::post('matakuliah/simpan{matakuliah}', 'Penggunacontroller@simpan');
Route::get('matakuliah/edit{matakuliah}', 'Penggunacontroller@edit');
Route::post('matakuliah/edit{matakuliah}', 'Penggunacontroller@edit');
Route::get('matakuliah/hapus/{matakuliah}', 'PenggunaController@hapus');

//penggguna
Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'Penggunacontroller@tambah');
Route::get('pengguna/simpan{pengguna}', 'Penggunacontroller@simpan');
Route::post('pengguna/simpan{pengguna}', 'Penggunacontroller@simpan');
Route::get('pengguna/edit{pengguna}', 'Penggunacontroller@edit');
Route::post('pengguna/edit{pengguna}', 'Penggunacontroller@edit');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');




//ruangan
Route::get('ruangan', 'ruanganController@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::get('ruangan/simpan{ruangan}', 'Penggunacontroller@simpan');
Route::post('ruangan/simpan{ruangan}', 'Penggunacontroller@simpan');
Route::get('ruangan/edit{ruangan}', 'Penggunacontroller@edit');
Route::post('ruangan/edit{ruangan}', 'Penggunacontroller@edit');
Route::get('ruangan/hapus/{ruangan}', 'PenggunaController@hapus');

Route::get('/', function(){
	return view('welcome');
});




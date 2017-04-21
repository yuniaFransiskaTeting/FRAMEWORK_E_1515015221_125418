@extends('master')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('dosenmatakuliah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Dosen Mengajar</strong>
	</div>
	<table class="table">
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>{{$dosenmatakuliah->dosen->nama}}</td>
		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>:</td>
			<td>{{$dosenmatakuliah->matakuliah->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosenmatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosenmatakuliah->update_at}}</td>
		</tr>
	</table>
</div>
@stop
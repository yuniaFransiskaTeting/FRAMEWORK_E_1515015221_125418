@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('matakuliah') }}">
		<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
		</a> Detail data Ruangan</strong>
	</div>
	
	<table class="table">
		<tr>
			<td>Id</td>
			<td>:</td>
			<td>{{$matakuliah->id}}</td>
		</tr>

		<tr>
			<td>title</td>
			<td>:</td>
			<td>{{ $matakuliah->title}}</td>
		</tr>

		<tr>
			<td>keterangan</td>
			<td>:</td>
			<td>{{ $matakuliah->keterangan}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matakuliah->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matakuliah->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop
@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('pengguna')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbraui data pengguna</strong>
	</div>
	{!! form::model($pengguna, ['method' => 'PATCH', 'route' => ['pengguna.update', $pengguna->id],'class' => 'form-horizontal']) !!}
       			 @include('pengguna/form/form', ['submit_text' => 'Edit Data pengguna'])
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fa fa-undo"></i>Ulangi
			</button>
		</div>
		{!!form::close()!!}
		</div>
@stop
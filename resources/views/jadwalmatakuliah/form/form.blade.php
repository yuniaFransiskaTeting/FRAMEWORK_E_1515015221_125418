
<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->lists('id'),null,['class'=>'form-control','id'=> 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosenmatakuliah->lists('id'),null,['class'=>'form-control','id'=> 'dosen_id','placeholder'=>"dosen"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id', $ruangan->lists('title','id'), null, ['class'=>'form-control', 'id'=>'ruangan_id']) !!}
		
		
	</div>
</div>

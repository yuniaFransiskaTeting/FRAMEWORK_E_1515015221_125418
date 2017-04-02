<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Nama mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->mahasiswa(),null,['class'=>'form-control','id'=> 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label"> Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}	
	</div>
</div>

@extends('template')
@section('konten')
<div class="card-header bg-dark text-white fw-bold mb-3">DATA TAHUN AJARAN</div>
<div class="row">
	<div class="col-md-6">
		<form method="post" enctype="multipart/form-data" action="<?php echo url('tahun_ajaran') ?>">
			@csrf
			@method('post')
			<div class="mb-3">
				<label class="form-label">TAHUN AJARAN</label>
				<input type="text" class="form-control" name="tahun_ajaran" required>
			</div>

			<div class="mb-3">
				<button class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
	
</div>

@endsection
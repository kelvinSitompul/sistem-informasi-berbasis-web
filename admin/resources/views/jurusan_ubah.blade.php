@extends('template')
@section('konten')
<div class="card-header bg-dark text-white fw-bold mb-3">DATA JURUSAN</div>
<div class="row">
	<div class="col-md-6">
		<form method="post" enctype="multipart/form-data" action="<?php echo url('jurusan/'.$jurusan['id_jurusan']); ?>">
			@csrf
			@method('put')
			<div class="mb-3">
				<label class="form-label">jurusan</label>
				<input type="text" class="form-control" name="nama_jurusan" value="<?php echo $jurusan['nama_jurusan']; ?>" required>
			</div>

			<div class="mb-3">
				<button class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
	
</div>

@endsection
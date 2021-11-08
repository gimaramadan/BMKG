<br>

<div class="card mb-3">
	<div class="card-body">
		<h3>ADD NEW PROSPEK CUACA</h3>
		<?= $this->session->flashdata('message'); ?>
		<form action="<?= base_url('prospek_cuaca/save') ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>
				<input class="form-control" type="text" name="judul" required>
			</div>
			<div class="form-group">
				<label>Tanggal</label>
				<input class="form-control" type="date" name="tanggal" required>
			</div>
			<div class="form-group">
				<label>File</label>
				<input class="form-control" type="file" name="file" required>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-warning">Reset</button>
		</form>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<table class="table table-bordered table-hover">
			<thead>
				<th>No</th>
				<th>Judul</th>
				<th>File</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $x = 1  ?>
				<?php  foreach($prospek as $data): ?>
				<tr align='center'>	
					<td><?= $x++ ?></td>
					<td><?= $data['judul'] ?></td>
					<td><a href="<?= base_url('prospek_cuaca/download/' . $data['id']); ?>" target="_blank"><?= $data['file'] ?></a></td>
					<td><?= $data['tanggal'] ?></td>
					<td >
						<a onclick="return confirm('hapus data ini?');" href="<?= base_url('prospek_cuaca/delete/' . $data['id']); ?>" class="btn  btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						<a href="<?= base_url('prospek_cuaca/edit/' . $data['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
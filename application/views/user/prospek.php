<div>

	<h2 class="blog-grid-title-lg">Ikhtisar Cuaca Harian</h2>
	<?php  foreach($prospekuser->result() as $row): ?>
	<iframe src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->file; ?>" width='100%' height='750px' allowfullscreen webkitallowfullscreen></iframe><br>
	<em>Klik <a href="<?php echo base_url(); ?>assets/uploads/<?php echo $row->file; ?>" target="_blank" rel="noopener noreferrer">tautan ini</a> jika PDF di atas tidak muncul</em>
	<?php endforeach; ?>

</div>
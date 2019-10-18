<div class="container mt-5">
	<div>
		<?php if($this->session->flashdata('message')): ?>
			<?php echo  $this->session->flashdata('message'); ?>
		<?php endif; ?>
	</div>
	<a href="<?= base_url('mahasiswa/tambah_data'); ?>" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
	<div class="row">
		<div class="col-lg-8">
			<ul class="list-group">
			<?php foreach($mahasiswa as $mhs): ?>
			  <li class="list-group-item mr-2">
			  	<?= $mhs['nama'] ?>

			  	<a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('mahasiswa/hapus/'); echo $mhs['id']; ?>
			  	" class="badge badge-danger float-right mr-2">Hapus</a>

			  	<a href="<?= base_url('mahasiswa/ubah/'); echo $mhs['id']; ?>" class="badge badge-warning float-right mr-2">Ubah</a>

			  	<a href="<?= base_url('mahasiswa/detail'); ?>/<?= $mhs['id']; ?>" class="badge badge-info float-right mr-2">Detail</a>
			  	
			  	
			  </li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	

</div>


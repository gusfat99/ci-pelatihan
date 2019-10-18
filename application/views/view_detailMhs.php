<div class="container mt-5">
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img src="<?= base_url('assets/img/'); echo $mahasiswa['foto'] ?>" class="card-img">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h4 class="card-title"><?= $mahasiswa['nama']; ?></h4>
	        <h6><?= $mahasiswa['npm']; ?></h6>
	        <p class="card-text"><?= $mahasiswa['email']; ?></p>
	        <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
	        <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
	        <a href="<?= base_url('mahasiswa') ?>" class="float-right mb-2">Kembali</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
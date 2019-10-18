<div class="container mt-3">
	<div class="card">
	  <div class="card-header">
	    Tambah Data Mahasiswa
	  </div>
	  <div class="card-body">
	    <form action="<?= base_url('mahasiswa/tambah_data'); ?>" method="post" >
	    	<div class="form-group">
		    <label for="nama">Nama</label>
		    <input type="text" class="form-control" id="nama" name="nama">
		    <small class="text-danger"><?= form_error('nama'); ?></small>
		  </div>	
		  <div class="form-group">
		    <label for="npm">NPM</label>
		    <input type="text" class="form-control" id="npm" name="npm">
		    <small class="text-danger"><?= form_error('npm'); ?></small>
		  </div>	
		  <div class="form-group">
		    <label for="alamat">Alamat</label>
		    <input type="text" class="form-control" id="alamat" name="alamat">
		    <small class="text-danger"><?= form_error('alamat'); ?></small>
		  </div>	
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
		    <small class="text-danger"><?= form_error('email'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="jurusan">Jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="Teknik Informatika">Teknik Informatika</option>
		      <option value="Teknik Mesin">Teknik Mesin</option>
		      <option value="Teknik Sipil">Teknik Sipil</option>
		      <option value="Teknik Elektro">Teknik Elektro</option>
		    </select>
		  </div>
		  <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-info float-right">CANCEL</a>
		  <button type="submit" class="btn btn-info float-right mr-3">SAVE</button>
		</form>
	  </div>
	</div>
</div>
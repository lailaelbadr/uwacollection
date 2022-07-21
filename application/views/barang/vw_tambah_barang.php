<section class="add-page account">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="block text-center">
					<a class="logo" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					<h2 class="text-center">Tambah Barang</h2>

					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="nama_produk" class="form-control form-control-user" value="<?= set_value('nama_produk'); ?>" id="nama_produk" placeholder="Nama Barang">
							<?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<select name="kategori" value="<?= set_value('kategori') ?>" id="kategori" placeholder="kategori" class="form-control form-control-user">
								<option value="">Kategori</option>
								<option value="Pakaian">Pakaian</option>
								<option value="Hijab">Hijab</option>
							</select>
							<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" value="<?= set_value('warna'); ?>" id="warna" name="warna" placeholder="warna Barang">
							<?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" value="<?= set_value('stok'); ?>" id="stok" name="stok" placeholder="Stok Barang">
							<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" value="<?= set_value('harga'); ?>" id="harga" name="harga" placeholder="harga Barang">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<input type="file" class="form-control form-control-user" name="gambar" id="gambar">
							<label for="gambar" class="custom-file-label"></label>

							<div class="form-group">
								<input type="text" class="form-control form-control-user" value="<?= set_value('detail_produk'); ?>" id="detail_produk" name="detail_produk" placeholder="detail produk">
								<?= form_error('detail_produk', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>

						<button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
							Tambah Barang
						</button></br>
						<a href="<?= base_url('barang') ?>" class="btn btn-danger">Kembali</a>
					</form>
					<hr>
					</form>
				</div>
			</div>
		</div>
</section>
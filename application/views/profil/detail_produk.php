<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('Profil/index') ?>">Dashboard</a></li>
                    <li><a href="shop.html">Detail Produk</a></li>
                </ol>
            </div>

        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <div class="single-product-slider">
                    <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                        <div class='carousel-outer'>
                            <!-- me art lab slider -->
                            <div class='carousel-inner '>
                                <div class='item active'>
                                    <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" alt='' data-zoom-image="" />
                                </div>

                            </div>

                            <!-- sag sol -->
                            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                <i class="tf-ion-ios-arrow-left"></i>
                            </a>
                            <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                <i class="tf-ion-ios-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-details">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                        <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                        <input type="hidden" name="stok" value="<?= $produk['stok'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama produk</label>
                            <input name="nama" type="text" value="<?= $produk['nama_produk']; ?>" readonly class="form-control" id="nama">

                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input name="harga" value="<?= $produk['harga']; ?>" type="text" readonly class="form-control" id="harga">

                        </div>
                        <div class="form-group">
                            <label for="ukuran">Warna</label>

                            <input name="ukuran" value="<?= $produk['warna']; ?>" type="text" readonly class="form-control" id="harga">

                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" value="<?= $produk['detail_produk']; ?>" type="text" readonly class="form-control" id="harga">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="total">Total Harga</label>
                            <input type="text" name="total" id="total" readonly class="form-control">
                        </div>
                        <button type="submit" id="tambah" name="tambah" class="btn btn-main btn-medium btn-round btn-icon">Tambah Ke Keranjang</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</section>
<section class="add-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">Tambah Supplier</h2>
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="nama_supplier" class="form-control form-control-user"
                                    value="<?= set_value('nama_supplier'); ?>" id="nama_supplier" placeholder="Nama Supplier">
                                <?= form_error('nama_supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    value="<?= set_value('alamat'); ?>" id="alamat" name="alamat"
                                    placeholder="Alamat Supplier">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    value="<?= set_value('no_telp'); ?>" id="no_telp" name="no_telp"
                                    placeholder="No Telephone">
                                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
                                Tambah Supplier
                            </button></br>
                            <a href="<?= base_url('supplier') ?>" class="btn btn-danger">Kembali</a>
                        </form>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
</section>
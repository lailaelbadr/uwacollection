<body id="body">
    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline dashboard-menu text-center">
                        <li><a href="<?= base_url('pelanggan/') ?>">Pelanggan</a></li>
                        <li><a class="active" href="<?= base_url('barang/') ?>">Barang</a></li>
                        <li><a href="<?= base_url('supplier/') ?>">Supplier</a></li>
                        <li><a href="<?= base_url('transaksi/') ?>">Transaksi</a></li>
                    </ul>
                    <div class="row-md-6"><a href="<?= base_url() ?>barang/tambah" class="btn btn-warning mb-2">Tambah
                            Barang</a></div>
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Warna</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($barang as $us) : ?>
                                        <tr>
                                            <td><?= $i; ?>.</td>
                                            <td><?= $us['nama_produk']; ?></td>
                                            <td><?= $us['kategori']; ?></td>
                                            <td><?= $us['warna']; ?></td>
                                            <td><?= $us['stok']; ?></td>
                                            <td><?= $us['harga']; ?></td>
                                            <td><img src="<?= base_url('assets/images/produk/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                            <td>
                                                <a href="<?= base_url('barang/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
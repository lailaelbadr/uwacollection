<section class="user-dashboard page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline dashboard-menu text-center">
                    <li><a href="<?= base_url('pelanggan/') ?>">Pelanggan</a></li>
                    <li><a href="<?= base_url('barang/') ?>">Barang</a></li>
                    <li><a class="active" href="<?= base_url('supplier/') ?>">Supplier</a></li>
                    <li><a href="<?= base_url('transaksi/') ?>">Transaksi</a></li>
                </ul>
                <div class="row-md-6"><a href="<?= base_url() ?>supplier/tambah" class="btn btn-warning mb-2">Tambah
                            Supplier</a></div>
                <div class="dashboard-wrapper user-dashboard">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telephone</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($supplier as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?>.</td>
                                        <td><?= $us['nama_supplier']; ?></td>
                                        <td><?= $us['alamat']; ?></td>
                                        <td><?= $us['no_telp']; ?></td>
                                        
                                        <td>
                                            <a href="<?= base_url('supplier/hapus/') . $us['id']; ?>"
                                                class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('supplier/edit/') . $us['id']; ?>"
                                                class="badge badge-warning">Edit</a>
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
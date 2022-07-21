<section class="user-dashboard page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline dashboard-menu text-center">
                    <li><a class="active" href="<?= base_url('pelanggan/') ?>">Pelanggan</a></li>
                    <li><a href="<?= base_url('barang/') ?>">Barang</a></li>
                    <li><a href="<?= base_url('supplier/') ?>">Supplier</a></li>
                    <li><a href="<?= base_url('transaksi/') ?>">Transaksi</a></li>
                </ul>
                <div class="dashboard-wrapper user-dashboard">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?>.</td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['email']; ?></td>

                                        <td>
                                            <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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
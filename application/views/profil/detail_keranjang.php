<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Keranjang</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url('Profil/index') ?>">Dashboard</a></li>
                        <li class="active">keranjang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-wrapper">
    <div class="cart shopping">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="block">
                        <div class="product-list">
                            <form action="<?= base_url('profil/checkout/'); ?>" method="POST" enctype="multipart/form-data">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="">Tanggal</th>
                                            <th class="">Nama Produk</th>
                                            <th class="">Harga</th>
                                            <th class="">Jumlah</th>
                                            <th class="">Subtotal</th>
                                            <th class="">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    function rupiah($angka)
                                    {
                                        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                        return $hasil_rupiah;
                                    }
                                    $i = 1;
                                    $total_bayar = 0;
                                    $total_p = 0; ?>
                                    <?php foreach ($keranjang as $us) :
                                        $total_bayar += $us['total'];
                                    ?>
                                        <tbody>
                                            <tr class="">
                                            <tr>
                                                <td><?= $us['tanggal']; ?></td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['harga']; ?></td>
                                                <td><?= $us['jumlah']; ?></td>
                                                <td><?= $us['total']; ?></td>
                                                <td>
                                                    <a class="product-remove" href="<?= base_url('profil/delkeranjang/') . $us['id']; ?>">Remove</a>
                                                </td>

                                            </tr>
                                            <input type="hidden" name="produk[]" value="<?= $us['id']; ?>">
                                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">

                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </tbody>
                                </table>
                                <button type="submit" id="tambah" name="tambah" class="btn btn-main btn-medium btn-round btn-icon pull-right">Checkout</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
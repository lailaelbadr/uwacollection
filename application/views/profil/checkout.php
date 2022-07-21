<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Checkout</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-wrapper">
    <div class="checkout shopping">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="block billing-details">
                        <h4 class="widget-title">Detail Pembayaran</h4>
                        <form href="<?= base_url('Profil/pesanan'); ?>" class="checkout-form">
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
                                <input type="hidden" name="transaksi[]" value="<?= $us['id']; ?>">
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <div class="form-group">
                                <label for="user_address">Pembayaran</label>
                                <input id="card-number" name="pembayaran" id="pembayaran" readonly class="form-control" type="" placeholder="BRI - 6285-01-025463-20-1">
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="custom-file-label" type="tel">Bukti Transfer</label>
                                <input type="file" class="form-control" id="user_country" placeholder="" name="gambar" id="gambar">
                            </div>
                            <div class="form-group">
                                <label for="user_country">Keterangan</label>
                                <input name="keterangan" type="text" class="form-control" id="keterangan">
                            </div>

                            <button type="submit" id="tambah" name="tambah" class="btn btn-main mt-20">Checkout</button>



                    </div>


                </div>
                <div class="col-md-4">
                    <div class="product-checkout-details">
                        <div class="block">
                            <h4 class="widget-title">Detail Produk</h4>
                            <?php foreach ($keranjang as $us) :
                                $total_bayar += $us['total'];
                            ?>
                                <div class="media product-card">

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="product-single.html"><?= $us['nama']; ?></a></h4>
                                        <p class="price"><?= $us['jumlah']; ?> x <?= $us['harga']; ?></p>
                                    </div>
                                </div>

                                <ul class="summary-prices">
                                    <li>
                                        <span>Subtotal:</span>
                                        <span class="price"><?= $us['total']; ?></span>
                                    </li>
                                </ul>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <div class="summary-total">
                                <span>Total</span>
                                <span><?= rupiah($total_bayar); ?></span>
                            </div>
                            <td>
                                <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">

                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">


                            </td>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter Coupon Code">
                    </div>
                    <button type="submit" class="btn btn-main">Apply Coupon</button>
                </form>
            </div>
        </div>
    </div>
</div>
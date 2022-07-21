<section class="products section">
    <div class="container">
        <div class="row">

            <?php $i = 1; ?>
            <?php foreach ($produk as $us) : ?>
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="<?= base_url('assets/images/produk/') . $us['gambar']; ?>" alt="product-img" />

                        </div>
                        <div class="product-content">
                            <h4><a href="<?= base_url('profil/keranjang/') . $us['id']; ?>"><?= $us['nama_produk'] ?></a></h4>
                            <p class="price"><?= $us['harga'] ?></p>
                        </div>

                    </div>
                </div>



                <!-- Modal -->
                <div class="modal product-modal fade" id="product-modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tf-ion-close"></i>
                    </button>
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div class="modal-image">
                                            <a href="<?= base_url('profil/keranjang/') . $us['id']; ?>">
                                                <img class="img-responsive" src="<?= base_url('assets/images/produk/') . $us['gambar']; ?>" alt="product-img" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-short-details">
                                            <h2 class="product-title"><?= $us['nama_produk'] ?></h2>
                                            <p class="product-price"><?= $us['harga'] ?></p>
                                            <p class="product-short-description">
                                                <?= $us['detail_produk'] ?>
                                            </p>
                                            <a href="<?= base_url('profil/keranjang/') . $us['id']; ?>" class="btn btn-main">Add To Cart</a>
                                            <a href="<?= base_url('profil/keranjang/') . $us['id']; ?>" class="btn btn-transparent">View Product Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- /.modal -->
            <?php endforeach ?>
        </div>
    </div>
</section>
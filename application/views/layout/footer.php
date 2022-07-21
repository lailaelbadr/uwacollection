<footer class="footer section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com/themefisher">
                            <i class="tf-ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/themefisher">
                            <i class="tf-ion-social-instagram"></i>
                        </a>
                    </li>
                </ul>
                <ul class="footer-menu text-uppercase">
                    <li>
                        <a href="contact.html">CONTACT</a>
                    </li>
                </ul>
                <p class="copyright-text">Copyright &copy;2022, Designed &amp; Developed by <a href="https://themefisher.com/">Laila & Jabran</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- 
    Essential Scripts
    =====================================-->

<!-- Main jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="<?= base_url('assets/') ?>plugins/instafeed/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="<?= base_url('assets/') ?>plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="<?= base_url('assets/') ?>plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="<?= base_url('assets/') ?>plugins/slick/slick.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/slick/slick-animation.min.js"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="<?= base_url('assets/') ?>js/script.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.cunstom-file-label').addClass("selected").html(fileName);
    })
    $(document).ready(function() {
        $("#jumlah").on('keydown keyup change blur', function() {
            var harga = $("#harga").val();
            var jumlah = $("#jumlah").val();
            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
            if (parseInt($('input[name="stok"]').val()) <=

                parseInt(jumlah)) {

                alert('stok tidak tersedia! stok tersedia : ' +

                    parseInt($('input[name="stok"]').val()))

                reset()
            }
        });

        function reset() {
            $('input[name="jumlah"]').val('')
            $('input[name="total"]').val('')
        }
    })
</script>

</body>

</html>
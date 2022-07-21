<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <h2 class="text-center">UWA Collection</h2>
                    <h4 class="text-center">Welcome</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" 
                            placeholder="Masukkan Alamat Email...">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="password" id="password" 
                            placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-main text-center">Login</button>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>auth/registrasi">Buat akun!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
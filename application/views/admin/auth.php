<div class="container py-5 h-100">
    <div class="row row-card-login h-100">
        <div class="col-lg-6">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center login-logo">
                                <img src="<?= base_url() ?>assets/img/logo.png" style="width: 185px;" alt="logo">
                            </div>
                            <?= $this->session->flashdata('pesan') ?>
                            <form action="<?= base_url() ?>admin/auth" method="post">
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input name="username" type="text" id="Username" class="form-control" placeholder="Username" />
                                    <div class="form-text text-danger"><?= form_error('username') ?></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Password</label>
                                    <input name="password" type="password" id="Password" class="form-control" placeholder="Password" />
                                    <div class="form-text text-danger"><?= form_error('password') ?></div>
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-outline-primary w-100" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
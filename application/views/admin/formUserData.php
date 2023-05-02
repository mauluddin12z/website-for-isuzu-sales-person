<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">USERS</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
    <!-- FORM TAMBAH -->
    <?php
    $form_tambah_toggle = 'tambahUser';
    ?>
    <div class="row <?php if ($form_tambah_toggle != $this->uri->segment(2)) {
                        echo "d-none";
                    } ?>">
        <div class="col-lg-12">
            <div class="form-wrapper card">
                <?php if (validation_errors())
                    echo validation_errors();
                ?>
                <?= $this->session->flashdata('pesan') ?>
                <div class="card-header">
                    <div class="card-title"><strong>TAMBAH USER</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('admin/' . $nama_proses); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="Password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- FORM EDIT -->
    <?php
    $form_edit_toggle = 'editUser';
    foreach ($userbyId as $ubyid) {
    ?>
        <div class="row <?php if ($form_edit_toggle != $this->uri->segment(2)) {
                            echo "d-none";
                        } ?>">
            <div class="col-lg-12">
                <div class="form-wrapper card">
                    <?php if (validation_errors())
                        echo validation_errors();
                    ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="card-header">
                        <div class="card-title"><strong>EDIT KATEGORI PRODUK </strong></div>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('admin/' . $nama_proses . '/' . $ubyid['id_user']); ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="<?= $ubyid['username'] ?>" class="form-control" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="Password" name="password" value="emptyemptyempty" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>
</div>
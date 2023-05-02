<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">PRODUCTS</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
    <!-- FORM TAMBAH -->
    <?php
    $form_tambah_toggle = 'tambahProducts';
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
                    <div class="card-title"><strong>TAMBAH PRODUK</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('products/' . $nama_proses); ?>
                    <div class="mb-3">
                        <label for="produk" class="form-label">Nama Produk</label>
                        <input type="text" name="produk" class="form-control" placeholder="Nama Produk">
                    </div>
                    <div class="mb-3">
                        <label for="kategoriproduk" class="form-label">Kategori Produk</label>
                        <select name="id_kp" class="form-select" aria-label="Default select example">
                            <option selected value="">Open this select menu</option>
                            <?php foreach ($productsCategory as $pc) {
                            ?>
                                <option value="<?= $pc['id_kp'] ?>"><?= $pc['kategori_produk'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- FORM EDIT -->
    <?php
    $form_edit_toggle = 'editProducts';
    foreach ($productsbyId as $pbyid) {
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
                        <div class="card-title"><strong>EDIT PRODUK </strong></div>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('products/' . $nama_proses . '/' . $pbyid['id_product']); ?>
                        <div class="mb-3">
                            <label for="produk" class="form-label">Nama Produk</label>
                            <input type="text" name="produk" value="<?= $pbyid['produk'] ?>" class="form-control" placeholder="Nama Produk">
                        </div>
                        <div class="mb-3">
                            <label for="kategoriproduk" class="form-label">Kategori Produk</label>
                            <select name="id_kp" class="form-select" aria-label="Default select example" required>
                                <option selected value="<?= $pbyid['id_kp'] ?>"><?= $pbyid['kategori_produk'] ?></option>
                                <?php foreach ($productsCategory as $pc) {
                                ?>
                                    <option value="<?= $pc['id_kp'] ?>"><?= $pc['kategori_produk'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <input type="text" name="harga" value="<?= $pbyid['harga'] ?>" class="form-control" placeholder="Kategori Produk">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>
</div>
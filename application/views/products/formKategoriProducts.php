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
    $form_tambah_toggle = 'tambahKategoriProducts';
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
                    <div class="card-title"><strong>TAMBAH KATEGORI PRODUK</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('products/' . $nama_proses); ?>
                    <div class="mb-3">
                        <label for="wallpaper_kategori" class="form-label">Wallpaper Kategori</label>
                        <input type="file" name="wallpaper_kategori" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_produk" class="form-label">Kategori Produk</label>
                        <input type="text" name="kategori_produk" class="form-control" placeholder="Kategori Produk">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="<?php if ($form_tambah_toggle != $this->uri->segment(2)) {
                                                            echo " ";
                                                        } else {
                                                            echo "deskripsi";
                                                        } ?>" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_kategori" class="form-label">Gambar Produk</label>
                        <input type="file" name="gambar_kategori" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="gambar_spek" class="form-label">Gambar Spesifikasi</label>
                        <input type="file" name="gambar_spek" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="brosur" class="form-label">Brosur</label>
                        <input type="file" name="brosur" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- FORM EDIT -->
    <?php
    $form_edit_toggle = 'editKategoriProducts';
    foreach ($productsCategorybyId as $pcbyid) {
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
                        <?= form_open_multipart('products/' . $nama_proses . '/' . $pcbyid['id_kp']); ?>
                        <div class="mb-3">
                            <label for="wallpaper_kategori" class="form-label">Wallpaper Kategori</label>
                            <input type="file" name="wallpaper_kategori" class="form-control" value="<?= $pcbyid['wallpaper_kategori'] ?>">
                            <img style="width:auto;height:200px;" class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pcbyid['wallpaper_kategori'] ?>" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="kategori_produk" class="form-label">Kategori Produk</label>
                            <input type="text" name="kategori_produk" class="form-control" placeholder="Kategori Produk" value="<?= $pcbyid['kategori_produk'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="<?php if ($form_edit_toggle != $this->uri->segment(2)) {
                                                                echo " ";
                                                            } else {
                                                                echo "deskripsi";
                                                            } ?>" cols="30" rows="10"><?= $pcbyid['deskripsi'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar_kategori" class="form-label">Gambar Produk</label>
                            <input type="file" name="gambar_kategori" class="form-control">
                            <img style="width:200px;height:200px;" class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pcbyid['gambar_kategori'] ?>" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_spek" class="form-label">Gambar Spesifikasi</label>
                            <input type="file" name="gambar_spek" class="form-control" value="<?= $pcbyid['gambar_spek'] ?>">
                            <img style="width:200px;height:200px;" class="potrait modal-target" src="<?= base_url() ?>assets/products/<?= $pcbyid['gambar_spek'] ?>" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="brosur" class="form-label">Brosur</label>
                            <div class="input-group">
                                <input type="file" name="brosur" class="form-control" value="<?= $pcbyid['brosur'] ?>">
                                <a href="<?= base_url() ?>assets/products/<?= $pcbyid['brosur'] ?>"><?= $pcbyid['brosur'] ?></a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>
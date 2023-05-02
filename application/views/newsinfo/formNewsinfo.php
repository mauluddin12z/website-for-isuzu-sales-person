<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">NEWS & INFO</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
    <!-- FORM TAMBAH -->
    <?php
    $form_tambah_toggle = 'tambahNewsinfo';
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
                    <div class="card-title"><strong>TAMBAH NEWS & INFO</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('newsinfo/' . $nama_proses); ?>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar News & Info</label>
                        <input type="file" name="newsinfo_picture" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="newsinfo_date" class="form-label">Tanggal News & Info</label>
                        <input type="date" name="newsinfo_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="newsinfo_title" class="form-label">Judul News & Info</label>
                        <input type="text" name="newsinfo_title" class="form-control" placeholder="Judul..">
                    </div>
                    <div class="mb-3">
                        <label for="newsinfo_description" class="form-label">Deskripsi</label>
                        <textarea name="newsinfo_description" id="<?php if ($form_tambah_toggle != $this->uri->segment(2)) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo "deskripsi";
                                                                    } ?>" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- FORM EDIT -->
    <?php
    $form_edit_toggle = 'editNewsinfo';
    foreach ($newsinfobyid as $nibyid) {
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
                        <div class="card-title"><strong>EDIT KATEGORI PRODUK</strong></div>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('newsinfo/' . $nama_proses . '/' . $nibyid['id_newsinfo']); ?>
                        <div class="mb-4">
                            <label for="gambar" class="form-label">Gambar News & Info</label>
                            <input type="file" name="newsinfo_picture" class="form-control" value="<?= $nibyid['newsinfo_picture'] ?>">
                            <img style="width:400px;height:400px;" class="landscape modal-target" src="<?= base_url() ?>assets/newsinfo/<?= $nibyid['newsinfo_picture'] ?>" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="newsinfo_date" class="form-label">Tanggal News & Info</label>
                            <input type="date" name="newsinfo_date" value="<?= $nibyid['newsinfo_date'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="newsinfo_title" class="form-label">Judul News & Info</label>
                            <input type="text" name="newsinfo_title" value="<?= $nibyid['newsinfo_title'] ?>" class="form-control" placeholder="Judul..">
                        </div>
                        <div class="mb-3">
                            <label for="newsinfo_description" class="form-label">Deskripsi</label>
                            <textarea name="newsinfo_description" id="<?php if ($form_edit_toggle != $this->uri->segment(2)) {
                                                                            echo " ";
                                                                        } else {
                                                                            echo "deskripsi";
                                                                        } ?>" cols="30" rows="10"><?= $nibyid['newsinfo_description'] ?></textarea>
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
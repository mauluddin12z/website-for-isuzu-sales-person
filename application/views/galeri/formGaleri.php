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
    $form_tambah_toggle = 'tambahGaleriFoto';
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
                    <div class="card-title"><strong>TAMBAH GALERI FOTO</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('galeri/' . $nama_proses); ?>
                    <input type="hidden" name="kategori_galeri" value="foto" class="form-control">
                    <div class="mb-3">
                        <label for="galeri_item" class="form-label">Foto</label>
                        <input type="file" name="galeri_item" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    $form_tambah_toggle = 'tambahGaleriVideo';
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
                    <div class="card-title"><strong>TAMBAH GALERI VIDEO</strong></div>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('galeri/' . $nama_proses); ?>
                    <input type="hidden" name="kategori_galeri" value="video" class="form-control">
                    <div class="mb-3">
                        <label for="galeri_item" class="form-label">Video</label>
                        <input type="text" name="galeri_item" class="form-control" placeholder="Video link">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>
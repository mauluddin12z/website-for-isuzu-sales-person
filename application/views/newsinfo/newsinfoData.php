<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">NEWS & INFO</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= base_url() ?>newsinfo/tambahNewsinfo" class="btn btn-success mb-3 px-3">Tambah</a>
                    <?php if (validation_errors())
                        echo validation_errors();
                    ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="data-table">
                        <table id="dt-newsinfo" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($newsinfo as $ni) {
                                ?>
                                    <tr>
                                        <td><img class="landscape modal-target" src="<?= base_url() ?>assets/newsinfo/<?= $ni['newsinfo_picture'] ?>" alt=""></td>
                                        <td><?= $ni['newsinfo_title'] ?></td>
                                        <td><?= $ni['newsinfo_description'] ?></td>
                                        <td width="10%">
                                            <div class="button-action-wrapper">
                                                <a href="<?= base_url() ?>newsinfo/editNewsinfo/<?= $ni['id_newsinfo'] ?>" class="btn btn-primary">EDIT</a>
                                                <a href="<?= base_url() ?>newsinfo/prosesHapusNewsinfo/<?= $ni['id_newsinfo'] ?>" class="btn btn-danger">DELETE</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
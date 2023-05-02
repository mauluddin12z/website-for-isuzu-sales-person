<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">PRODUCTS</div>
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
                    <a href="<?= base_url() ?>products/tambahKategoriProducts" class="btn btn-success mb-3 px-3">Tambah</a>
                    <?php if (validation_errors())
                        echo validation_errors();
                    ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="data-table">
                        <table id="dt-kategoriproduk" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Wallpaper</th>
                                    <th scope="col">Kategori</th>
                                    <th class="ellipsis" scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Gambar Spesifikasi</th>
                                    <th scope="col">Brosur</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($productsCategory as $pc) {
                                ?>
                                    <tr>
                                        <td><img class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pc['wallpaper_kategori'] ?>" alt=""></td>
                                        <td><?= $pc['kategori_produk'] ?></td>
                                        <td class="ellipsis"><?= $pc['deskripsi'] ?></td>
                                        <td><img class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pc['gambar_kategori'] ?>" alt=""></td>
                                        <td><img class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pc['gambar_spek'] ?>" alt=""></td>
                                        <td><a href="<?= base_url() ?>assets/products/<?= $pc['brosur'] ?>"><?= $pc['brosur'] ?></a></td>
                                        <td width="10%">
                                            <div class="button-action-wrapper">
                                                <a href="<?= base_url() ?>products/editKategoriProducts/<?= $pc['id_kp'] ?>" class="btn btn-primary">EDIT</a>
                                                <a href="<?= base_url() ?>products/prosesHapusKategoriProducts/<?= $pc['id_kp'] ?>" class="btn btn-danger">DELETE</a>
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
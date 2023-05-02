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
                    <a href="<?= base_url() ?>products/tambahProducts" class="btn btn-success mb-3 px-3">Tambah</a>
                    <?php if (validation_errors())
                        echo validation_errors();
                    ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="data-table">
                        <table id="dt-produk" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Kategori Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($products as $p) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $p['produk'] ?></td>
                                        <td><?= $p['kategori_produk'] ?></td>
                                        <td><?= $p['harga'] ?></td>
                                        <td width="10%">
                                            <div class="button-action-wrapper">
                                                <a href="<?= base_url() ?>products/editProducts/<?= $p['id_product'] ?>" class="btn btn-primary">EDIT</a>
                                                <a href="<?= base_url() ?>products/prosesHapusProducts/<?= $p['id_product'] ?>" class="btn btn-danger">DELETE</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
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
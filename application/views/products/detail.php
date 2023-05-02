<?php foreach ($productsDetail as $pd) { ?>
    <div class="container detail">
        <div class="products-katalog-wrapper">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="product-wallpaper">
                        <img class="landscape modal-target" src="<?= base_url() ?>assets/products/<?= $pd['wallpaper_kategori'] ?>" alt="wallpaper" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-head">
                        <div class="content-head-title"><?= $pd['kategori_produk'] ?></div>
                    </div>
                    <div class="product-description">
                        <div class="desc-content">
                            <?= $pd['deskripsi'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="product-specification">
                        <div class="specification-image">
                            <img class="potrait modal-target" src="<?= base_url() ?>assets/products/<?= $pd['gambar_spek'] ?>" alt="gambar spek" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="product-price-list">
                        <div class="price-list-title">LIST HARGA ISUZU TRAGA</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>TIPE</th>
                                    <th>HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $p) { ?>
                                    <tr>
                                        <td><?= $p['produk'] ?></td>
                                        <td>Rp. <?= $p['harga'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="contact-person-product">
                        <span class="cp-title">Jika ingin tahu mengenai produk <strong>ISUZU TRAGA</strong> hubungi WA / Telepon dibawah.</span>
                        <div class="detail-page-btn-wrapper">
                            <a href="https://wa.me/+6281369982678" class="detail-page-btn whatsapp btn btn-outline-success rounded-pill"><i class="fa-brands fa-whatsapp me-2"></i>Whatsapp</a>
                            <a href="tel:+6281272401993" class="detail-page-btn telepon btn btn-danger rounded-pill"><i class="fa-solid fa-phone"></i>Telepon</a>
                            <a target="_blank" href="<?= base_url() ?>assets/products/<?= $pd['brosur'] ?>" class="detail-page-btn btn btn-outline-danger rounded-pill <?php if ($pd['brosur'] == NULL) {
                                                                                                                                                                            echo "d-none";
                                                                                                                                                                        } ?>">Download Brosur</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
<?php
} ?>
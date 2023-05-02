<div class="container">
    <div class="products-page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-head h-100">
                    <div class="content-head-title h-100">PRODUCTS</div>
                    <div class="content-head-title-line">
                    </div>
                </div>
            </div>
        </div>
        <div class="row container">
            <?php
            foreach ($productsCategory as $pc) { ?>
                <div class="col-sm-12 col-lg-3">
                    <div class="products-card">
                        <div class="products-title"><a href="<?= base_url() ?>products/detail/<?= $pc['id_kp'] ?>"><?= $pc['kategori_produk'] ?></a></div>
                        <div class="products-image">
                            <img class="landscape modal-target" loading="lazy" src="<?= base_url() ?>assets/products/<?= $pc['gambar_kategori'] ?>" alt="GAMBAR PRODUK" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                        </div>
                        <div class="my-card-footer flex-column">
                            <a href="<?= base_url() ?>products/detail/<?= $pc['id_kp'] ?>" class="lihat-selengkapnya btn btn-outline-danger rounded-pill">Lihat Selengkapnya<i class="fa-solid fa-arrow-right"></i></a>
                            <a href="<?= base_url() ?>assets/products/<?= $pc['brosur'] ?>" class="lihat-selengkapnya btn btn-danger rounded-pill <?php if ($pc['brosur'] == NULL) {
                                                                                                                                                        echo "d-none";
                                                                                                                                                    } ?>">Download Brosur</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

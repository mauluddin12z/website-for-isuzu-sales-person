<div class="container">
    <div class="products-katalog-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-head h-100">
                    <div class="content-head-title h-100">FOTO</div>
                    <div class="content-head-title-line">
                    </div>
                </div>
            </div>
            <?php
            foreach ($galeriFoto as $gf) {
            ?>
                <div class="col-sm-12 col-md-12 col-lg-3 p-3 d-flex justify-content-center">
                    <div class="galeri-wrapper-foto">
                        <img class="potrait modal-target" src="<?= base_url() ?>assets/galeri/<?= $gf['galeri_item'] ?>" alt="gambar galeri">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content-head h-100">
                    <div class="content-head-title h-100">VIDEO</div>
                    <div class="content-head-title-line">
                    </div>
                </div>
            </div>
            <?php
            foreach ($galeriVideo as $gv) {
            ?>
                <div class="col-sm-12 col-md-12 col-lg-3 p-3 d-flex justify-content-center">
                    <div class="galeri-wrapper-video">
                        <iframe allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="420" height="315" src="<?= $gv['galeri_item'] ?>">
                        </iframe>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
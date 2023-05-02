<?php foreach ($newsinfobyId as $nibyid) { ?>
    <div class="container detail">
        <div class="products-katalog-wrapper">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="newsinfo-image">
                        <img class="image-background" src="<?= base_url() ?>assets/newsinfo/<?= $nibyid['newsinfo_picture'] ?>" alt="NEWS & INFO" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                        <img class="image-real potrait modal-target" src="<?= base_url() ?>assets/newsinfo/<?= $nibyid['newsinfo_picture'] ?>" alt="NEWS & INFO" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-head">
                        <div class="newsinfo-title"><?= $nibyid['newsinfo_title'] ?></div>
                        <div class="newsinfo-date"><?= tanggal_indo($nibyid['newsinfo_date']) ?></div>
                    </div>
                    <div class="product-description">
                        <div class="desc-content">
                            <?= $nibyid['newsinfo_description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} ?>

<?php
function tanggal_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];
}

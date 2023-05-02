<div class="container aboutus">
    <div class="row">
        <div class="col-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">NEWS & INFO</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($newsinfo as $ni) { ?>
            <div class="col-sm-12 col-lg-12">
                <div class="newsinfo-card">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 newsinfo-image-wrapper">
                            <div class="newsinfo-image">
                                <img class="image-background" src="<?= base_url() ?>assets/newsinfo/<?= $ni['newsinfo_picture'] ?>" alt="NEWS & INFO" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                                <img class="image-real potrait modal-target" src="<?= base_url() ?>assets/newsinfo/<?= $ni['newsinfo_picture'] ?>" alt="NEWS & INFO" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-8 newsinfo-content">
                            <div class="newsinfo-title">
                                <a href="<?= base_url() ?>newsinfo/detail/<?= $ni['id_newsinfo'] ?>"><?= $ni['newsinfo_title'] ?></a>
                            </div>
                            <div class="newsinfo-date"><?= tanggal_indo($ni['newsinfo_date']) ?></div>
                            <div class="newsinfo-short-desc">
                                <?= shortdesc($ni['newsinfo_description'], "................", 550) ?>
                            </div>
                            <a href="<?= base_url() ?>newsinfo/detail/<?= $ni['id_newsinfo'] ?>" class="lihat-selengkapnya btn btn-outline-danger rounded-pill">Lihat Selengkapnya<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
    </div>
</div>

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


function shortdesc($string, $repl, $limit)
{
    if (strlen($string) > $limit) {
        return substr($string, 0, $limit) . $repl;
    } else {
        return $string;
    }
}

?>
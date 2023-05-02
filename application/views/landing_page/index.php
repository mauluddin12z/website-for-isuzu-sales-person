<div class="lp-opening-part">
    <div class="opening-container">
        <div class="opening">
            <div class="opening-content">
                <div class="opening-content-wrapper">
                    <div class="opening-slogan">REAL PARTNER. REAL JOURNEY.</div>
                    <div class="opening-title">WELCOME!</div>
                    <div class="opening-title2">Hai!, Selamat datang di Isuzu Sumsel.</div>
                    <div class="opening-description">Website ini berisi tentang informasi seputar produk produk ISUZU. Kami melayani penjualan Mobil ISUZU, konsultasikan rencana pembelian Mobil ISUZU Anda kepada Sales Resmi ISUZU. Mulai dari Simulasi Kredit, Test Drive, Tukar Tambah, Promo Terbaru, Stock Warna, Spesifikasi, dll. Cash atau Kredit tidak masalah, Kami akan bantu secara maksimal.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-introduction-part">
    <div class="sales-intro-container container">
        <div class="sales-intro">
            <div class="row">
                <div class="col-12">
                    <div class="perkenalan">
                        Perkenalkan nama saya Tamara Vischel sebagai Sales Executive Isuzu Daerah palembang dan sekitarnya sebagai Business Consultant resmi dari Dealer Isuzu Sumatera Selatan (Palembang, Muba, Prabumulih, Lahat, dan Sekitarnya). Kami melayani penjualan mobil baru Isuzu baik secara tunai maupun kredit.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-products-part bg-light" id="products">
    <div class="container w-100 h-100 d-flex flex-column align-items-center">
        <div class="row w-100 h-100">
            <div class="col-lg-12">
                <div class="header-content-wrapper d-flex align-items-center">
                    <div class="lp-head d-flex align-items-center h-100">
                        <div class="lp-title h-100">Products</div>
                        <div class="lp-title-line">
                        </div>
                    </div>
                    <div class="view-all d-flex align-items-center h-100">
                        <a href="<?= base_url() ?>products" class="viewall-btn">VIEW ALL <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 h-100">
            <div class="col-lg-12">
                <div class="carousel-wrapper">
                    <div class="carousel-background shadow"></div>
                    <div class="carousel-container">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php
                                $i = 0;
                                $counter = 0;
                                foreach ($productsCategoryRandom as $pcr) {
                                    $item_class = ($i == 0) ? 'active' : '';
                                    $counter++;
                                    if ($counter > 3) {
                                        break;
                                    }
                                ?>
                                    <div class="my-carousel-item carousel-item <?= $item_class ?>">
                                        <div class="carousel-image">
                                            <a href="<?= base_url() ?>Products/detail/<?= $pcr['id_kp'] ?>"><img loading="lazy" src="<?= base_url() ?>assets/products/<?= $pcr['gambar_kategori'] ?>" class="d-block" alt="gambar produk" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';"></a>
                                        </div>
                                        <div class="carousel-title d-flex justify content-center">
                                            <a href="<?= base_url() ?>Products/detail/<?= $pcr['id_kp'] ?>"><?= $pcr['kategori_produk'] ?></a>
                                        </div>
                                    </div>
                                <?php
                                    $i++;
                                } ?>
                            </div>
                            <button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next carousel-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-galeri-part container">
    <div class="row mb-4 w-100 h-100">
        <div class="col-lg-12">
            <div class="header-content-wrapper d-flex align-items-center">
                <div class="lp-head d-flex align-items-center h-100">
                    <div class="lp-title h-100">Gallery</div>
                    <div class="lp-title-line">
                    </div>
                </div>
                <div class="view-all d-flex align-items-center h-100">
                    <a href="<?= base_url() ?>Galeri" class="viewall-btn">VIEW ALL <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="lp-body d-flex flex-column align-items-center gap-5">
                <div class="row w-100 h-100">
                    <?php
                    $counter = 0;
                    foreach ($galeriFoto as $gf) {
                        $counter++;
                        if ($counter > 3) {
                            break;
                        }
                    ?>
                        <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center p-1">
                            <div class="galeri-wrapper-foto">
                                <img class="potrait modal-target w-100 h-100" loading="lazy" src="<?= base_url() ?>assets/galeri/<?= $gf['galeri_item'] ?>" alt="gambar galeri">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row w-100 h-100">
                    <?php
                    $counter = 0;
                    foreach ($galeriVideo as $gv) {
                        $counter++;
                        if ($counter > 3) {
                            break;
                        }
                    ?>
                        <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center p-1">
                            <div class="galeri-wrapper-video">
                                <iframe allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="420" height="315" src="<?= $gv['galeri_item'] ?>">
                                </iframe>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-newsinfo-part">
    <div class="container">
        <div class="header-content-wrapper d-flex align-items-center">
            <div class="lp-head d-flex align-items-center h-100">
                <div class="lp-title h-100">NEWS & INFO</div>
                <div class="lp-title-line">
                </div>
            </div>
            <div class="view-all d-flex align-items-center h-100">
                <a href="<?= base_url() ?>Newsinfo" class="viewall-btn">VIEW ALL <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="lp-body d-flex flex-column align-items-center">
            <div class="row w-100 h-100">
                <?php
                $counter = 0;
                foreach ($newsinfo as $ni) {
                    $counter++;
                    if ($counter > 3) {
                        break;
                    }
                ?>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-3 d-flex justify-content-center">
                        <div class="lp-newsinfo-wrapper">
                            <div class="card">
                                <div class="lp-newsinfo-image d-flex justify-content-center align-items-center">
                                    <img class="image-background" loading="lazy" src="<?= base_url() ?>assets/newsinfo/<?= $ni['newsinfo_picture'] ?>" alt="Card image cap" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                                    <img class="image-real potrait modal-target" loading="lazy" src="<?= base_url() ?>assets/newsinfo/<?= $ni['newsinfo_picture'] ?>" alt="Card image cap" onerror="this.onerror=null;this.src='<?= base_url() ?>assets/img/alternative_image.png';">
                                </div>
                                <div class="card-body lp-newsinfo">
                                    <div class="newsinfo-title">
                                        <a href="<?= base_url() ?>Newsinfo/detail/<?= $ni['id_newsinfo'] ?>"><?= $ni['newsinfo_title'] ?></a>
                                    </div>
                                    <div class="newsinfo-date"><?= tanggal_indo($ni['newsinfo_date']) ?></div>
                                    <p class="card-text"><?= shortdesc($ni['newsinfo_description'], "..........", 200) ?></p>
                                    <a href="<?= base_url() ?>Newsinfo/detail/<?= $ni['id_newsinfo'] ?>" class="lihat-selengkapnya btn btn-outline-danger rounded-pill">Lihat Selengkapnya<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
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

</div>
<div class="footer">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-3 col-sm-12 col-md-12 footer-part">
                <div class="company-footer-wrapper">
                    <div class="company-logo d-flex-inline justify-content-center">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/logo1.png" alt="logo">
                    </div>
                    <div class="company-short-desc d-flex justify-content-center">
                        Website ini berisi informasi seputar Mobil ISUZU yang beredar secara Resmi di Indonesia. Kami melayani penjualan Mobil ISUZU terbaru, konsultasikan rencana pembelian Mobil ISUZU Terbaru Anda kepada Sales Consultant Resmi ISUZU.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-12 footer-part">
                <div class="footer-item-wrapper">
                    <div class="title-footer">Products</div>
                    <div class="menu-item-footer-wrapper">
                        <?php foreach ($productsCategory as $pc) {
                        ?>
                            <div class="footer-products-item">
                                <a href="<?= base_url() ?>products/detail/<?= $pc['id_kp'] ?>" class="menu-item-footer"><?= $pc['kategori_produk'] ?></a>
                            </div>
                        <?php } ?>
                        <div class="footer-products-item">
                            <a href="<?= base_url() ?>products" class="menu-item-footer footer-whatsapp">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12 col-md-12 footer-part">
                <div class="footer-item-wrapper">
                    <div class="title-footer">Contact Us</div>
                    <div class="menu-item-footer-wrapper">
                        <div class="contact-us-menu">
                            <a href="https://wa.me/+6281272401993" class="menu-item-footer footer-whatsapp">Whatsapp</a>
                        </div>
                        <div class="contact-us-menu">
                            <a href="https://www.instagram.com/astraisuzu.palembang/" class="menu-item-footer footer-instagram">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12 footer-part">
                <div class="footer-item-wrapper">
                    <div class="title-footer">Address</div>
                    <div class="address"><i class="fa-solid fa-location-dot"></i> Jl. Soekarno Hatta No.200 Palembang.<br>No Telp. 081272401993</div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.528066862182!2d104.69487851475682!3d-2.9508511978508305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7543ff53764d%3A0xe5482b08f507f52f!2sIsuzu%20Palembang!5e0!3m2!1sid!2sid!4v1678362922360!5m2!1sid!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="copyright-footer">
            &copy; 2023 ISUZU SUMSEL
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/scripts.js"></script>
</body>

</html>
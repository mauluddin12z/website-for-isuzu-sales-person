<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $judul ?></title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/logo.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<link rel="stylesheet" href="<?= base_url() ?>assets/styles.css" />
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<body>
  <div class="front-contact">
    <a href="https://wa.me/+6281272401993" class="whatsapp">
      <img src="<?= base_url() ?>assets/img/logo-wa.png" alt="whatsapp">
    </a>
    <a href="https://www.instagram.com/astraisuzu.palembang/" class="instagram">
      <img src="<?= base_url() ?>assets/img/logo-ig.png" alt="instagram">
    </a>
  </div>
  <div class="container-page">
    <div id="header" class="header header-color d-flex align-items-center">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="nav-left">
            <a href="<?= base_url() ?>landing_page" id="navbar-logo" class="navbar-brand">
              <img src="<?= base_url() ?>assets/img/logo.png" alt="logo" />
            </a>
          </div>
          <div class="nav-center">
            <div class="navbar-menu-wrapper">
              <ul class="navbar-nav my-navbar d-flex align-items-center">
                <li class="nav-item">
                  <a class="navlinkheader nav-link my-nav-link" aria-current="Home" href="<?= base_url() ?>landing_page">Home</a>
                </li>
                <li class="nav-item">
                  <a class="navlinkheader nav-link my-nav-link" aria-current="page" href="<?= base_url() ?>products">Products</a>
                </li>
                <li class="nav-item">
                  <a class="navlinkheader nav-link my-nav-link" aria-current="page" href="<?= base_url() ?>galeri">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="navlinkheader nav-link my-nav-link" aria-current="page" href="<?= base_url() ?>newsinfo">News & Info</a>
                </li>
                <li class="nav-item">
                  <a class="navlinkheader nav-link my-nav-link" aria-current="page" href="<?= base_url() ?>aboutus">About Us</a>
                </li>
              </ul>
            </div>
            <button id="menu-mobile-toggle" class="btn menu-mobile-toggle"><i id="mmtogglebars" class="fa-solid fa-bars"></i><i id="mmtogglex" class="fa-solid fa-x d-none"></i></button>
          </div>
          <div class="nav-right">
            <div class="header-contact-person">
              <a href="https://wa.me/+6281272401993" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
              <a href="https://www.instagram.com/astraisuzu.palembang/"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div id="menu-mobile" class="mobile-menu-wrapper">
      <div class="mobile-menu">
        <a class="navlinkheader nav-link my-nav-link" href="<?= base_url() ?>landing_page">Home</a>
        <a class="navlinkheader nav-link my-nav-link" href="<?= base_url() ?>products">Products</a>
        <a class="navlinkheader nav-link my-nav-link" href="<?= base_url() ?>galeri">Gallery</a>
        <a class="navlinkheader nav-link my-nav-link" href="<?= base_url() ?>newsinfo">News & Info</a>
        <a class="navlinkheader nav-link my-nav-link" href="<?= base_url() ?>aboutus">About Us</a>
      </div>
    </div>
    <div id="my-modal" class="my-modal-picture">
      <span id="my-modal-close" class="my-modal-close">&times;</span>
      <img id="my-modal-content" class="my-modal-content">
    </div>
    <div class="main-content">
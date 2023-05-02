-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 04:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isuzu_sumsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` varchar(250) NOT NULL,
  `galeri_date` date DEFAULT NULL,
  `kategori_galeri` varchar(250) NOT NULL,
  `galeri_item` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `galeri_date`, `kategori_galeri`, `galeri_item`) VALUES
('1', NULL, 'foto', 'IMG_4375.jpg'),
('11', NULL, 'foto', 'IMG_6139_(1).jpg'),
('2', NULL, 'foto', 'IMG_4909.jpg'),
('3', NULL, 'foto', 'IMG_4919.jpg'),
('4', NULL, 'foto', 'IMG_4863.jpg'),
('5', NULL, 'foto', 'IMG_6905.jpg'),
('6', NULL, 'foto', 'IMG_6127.jpg'),
('7', NULL, 'foto', 'IMG_5052.jpg'),
('8', NULL, 'foto', '9947cb96-bdc1-47c2-b216-a775a9cbc966.jpg'),
('9', NULL, 'foto', '865ccc3e-1873-42c4-8c3f-4d30640e4248.jpg'),
('glr-0fb356518311b39dc4021d2c288f9a78', NULL, 'video', 'https://www.youtube.com/embed/04muU311m9g'),
('glr-997211355b00148e12ba8feedfcb182f', NULL, 'video', 'https://www.youtube.com/embed/omN2FgVcxbA'),
('glr-9b44f70ffeca1132496c6ebcdb9bd96e', NULL, 'video', 'https://www.youtube.com/embed/bF3v36u2hrc'),
('glr-ab3a481203cf7e2518a72fbc78b67aea', '0000-00-00', 'video', 'https://www.youtube.com/embed/eCNKMNUtEpc');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE `news_info` (
  `id_newsinfo` varchar(250) NOT NULL,
  `newsinfo_date` date NOT NULL,
  `newsinfo_title` varchar(250) NOT NULL,
  `newsinfo_description` varchar(10000) NOT NULL,
  `newsinfo_picture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`id_newsinfo`, `newsinfo_date`, `newsinfo_title`, `newsinfo_description`, `newsinfo_picture`) VALUES
('ni-8ad2982a90197f294f9965651662b7b0', '2023-03-14', 'Ini Keuntungan Pilih Isuzu Traga Blind Van', '<p>Blind van adalah sebuah jenis kendaraan niaga yang dibangun dari kendaraan berukuran kecil. Ukurannya setara dengan kendaraan penumpang atau juga kelas pick-up. Keberadaannya semakin umum di Indonesia, baik di tengah tren bisnis logistik ataupun kebutuhan lainnya. Dengan bentuknya ini, sebuah blind van memberikan berbagai keuntungan, yang setidaknya terbagi dalam tiga hal.</p><p><strong>1. Ukuran Ringkas, Masuk Perumahan</strong><br>Ukuran yang ringkas ini memungkinkan ia melaju di jalan-jalan yang juga biasa dilalui kendaraan penumpang, termasuk juga di jalan kompleks perumahan dan juga perkantoran yang tidak jarang berukuran sempit. Namun, tidak berarti ukuran sebuah blind van tidak bisa dimaksimalkan. Contohnya pada Isuzu Traga. Sebagai sebuah kendaraan yang berbasis pick up dan pada akhir 2021 lalu memiliki versi blind van, Isuzu Traga memiliki ruang kargo dengan panjang 2,8 meter dan lebar 1,52 meter—dihitung dari sisi dalam. Untuk versi blind van, Isuzu Traga memiliki daya muat yang secara total 5,2 meter kubik. Cocok untuk muatan membeludak dalam menghadapi sibuknya perdagangan e-commerce yang serba adu waktu cepat belakangan ini. Besar, tetapi kemampuan manuver di jalan sempitnya bahkan melampaui mobil seukuran LCGC. Jika sebuah LCGC punya radius putar 4,6 meter, Isuzu Traga hanya 4,5 meter.</p><p><strong>2. Iklan Berjalan</strong><br>Sejak 1920-an, cikal bakal kendaraan niaga yang kemudian menjadi blind van sudah digunakan sebagai iklan berjalan. Area kargo yang menyatu dengan ruang menyetir membuatnya tampak seperti sebuah mikrobus kecil yang mulus sehingga terlihat unik. Secara bersamaan, ia menyediakan “kanvas” lebar untuk dicat dengan gambar yang merepresentasikan warna dan logo perusahaan. Terlebih lagi untuk Isuzu Traga Blind Van. Ukurannya yang besar memungkinkan tampilan warna dan logo perusahaan juga besar.</p><p><strong>3. Urusan Karoseri</strong><br>Blind van yang dibangun dari basis pick-up didukung penggarapan secara karoseri. Isuzu Traga sendiri dibangun dengan karoseri yang sudah berdasarkan standar Isuzu sehingga dijanjikan bergaransi. “Isuzu Traga Blind Van merupakan hasil kerja sama PT Isuzu Astra Motor Indonesia dengan karoseri partner, dirancang dengan kargo belakang berkualitas standar Isuzu dan bergaransi sehingga kualitas lebih baik dan lebih tahan lama,” kata Arvin Sumbung, Product Marketing CV & LCV Manager, PT Isuzu Astra Motor Indonesia.</p>', 'traga_wallpaper.JPG'),
('ni-b24f32d365a5d0ae4df6fd1dd53b1a71', '2023-03-13', 'Promo Spesial Isuzu', '<p>Dapatkan promo spesial hanya di ASTRA ISUZU. Bunga 0% tenor s/d 2 tahun. Syarat dan ketentuan berlaku. 100% FREE Strainer/Filter Tambahan. Isuzu ELF DP Mulai 50 Jutaan. Isuzu Traga DP Mulai 40 Jutaan</p>', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` varchar(250) NOT NULL,
  `produk` varchar(250) NOT NULL,
  `id_kp` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `produk`, `id_kp`, `harga`) VALUES
('prd-00e84017f825c17f16d2469361005c5e', 'TRAGA BOX FULL ALUMINIUM', '07ce38e081ec4a4196f54c5e101b0ea1', '313.000.000'),
('prd-484d67f06c333ce5412faaf3a8dbfd4d', 'All-New D-MAX RODEO 1.9 M/T ER', '2bb3ca0830efe5617a553961698c6602', '501.600.000'),
('prd-484e7920fd4d98dbc0880cbea7bf9fdf', 'NLR', 'ee177a0f164450b82a28231a3c857b77', '386.000.000'),
('prd-577870d4e298c6b478abb53ae705e422', 'All-New D-MAX DC 1.9 M/T ER', '2bb3ca0830efe5617a553961698c6602', '473.700.000'),
('prd-757674ef95489aeda99590fa87040a86', 'NMR HD 6.5 BLACK', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '485.000.000'),
('prd-7980aee09b7b26b8d1c57e8cbe427682', 'TRAGA PICK UP (FD)', '07ce38e081ec4a4196f54c5e101b0ea1', '272.000.000'),
('prd-82da0b1e17053d4aee359643938e82dd', 'NMR HD 5.8', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '470.000.000'),
('prd-8a81dced0378b5d593a1792418241ca2', 'NMR HD 5.8 RED', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '473.000.000'),
('prd-8db8e09e183540e9ec1ffd64654c5717', 'NMR HD 6.5', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '482.000.000'),
('prd-967bd6139b624eae905bc26bcaa87f61', 'TRAGA BOX SEMI ALUMINIUM', '07ce38e081ec4a4196f54c5e101b0ea1', '308.000.000'),
('prd-9b862031eb2eb5e0411ec6d2d5606f06', 'NMR HD 5.8 BLACK', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '473.000.000'),
('prd-a4038c9ec79e138e84d22be6bc6ed8c8', 'NLR L', 'kp-105c4e0b23d525af1d517e2e1a3f4562', '404.000.000'),
('prd-a53dd6151a931c6301661ce09ab57415', 'NMR HD 6.5 RED', '5c6e0ad2e1dd9c370d8a32ae2a91ab52', '485.000.000'),
('prd-a921d1deba7a33b440495a61afe712cd', 'All-New D-MAX SC 1.9 M/T ER', '2bb3ca0830efe5617a553961698c6602', '396.900.000'),
('prd-aaba9400f5364b24235535e9eb056e23', 'NPS', '0d48188d63abe4dd4697990508782895', '849.000.000'),
('prd-e88561c94f8865f1a58f1e7cdd4c9a51', 'All-New M-UX 4X4 A/T 1.9 E4', '30922e7ecb910eea76a59308ae5764d5', '603.300.000');

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `id_kp` varchar(250) NOT NULL,
  `wallpaper_kategori` varchar(250) NOT NULL,
  `kategori_produk` varchar(250) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `gambar_kategori` varchar(250) NOT NULL,
  `gambar_spek` varchar(250) NOT NULL,
  `brosur` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_category`
--

INSERT INTO `products_category` (`id_kp`, `wallpaper_kategori`, `kategori_produk`, `deskripsi`, `gambar_kategori`, `gambar_spek`, `brosur`) VALUES
('07ce38e081ec4a4196f54c5e101b0ea1', 'traga_wallpaper.JPG', 'ISUZU TRAGA', '<p><strong>Mesin Handal dan Irit</strong></p><p>Kesuksesan bisnis Anda berawal dari pemilihan armada yang bisa diandalkan. Isuzu Traga dengan mesin Isuzu 4JA1-L yang berkapasitas 2.500cc Diesel Direct Injection membuat Isuzu Traga memiliki tenaga besar, bandel, namun tetap irit bahan bakar sehingga lebih menguntungkan.</p><p> </p><p><strong>Muatan Extra Lega</strong></p><p>Kami memahami bahwa efisiensi adalah kunci dari kesuksesan bisnis Anda, oleh karena itu Isuzu TRAGA memiliki bak open cargo dengan dimensi 2,8 m x 1,6 m serta GVW 2,950 kg sehingga mampu mengangkut lebih banyak dan lebih menguntungkan karena menghemat biaya operasional.</p><p> </p><p><strong>Bermanuver</strong></p><p>Lalu lintas yang tidak bisa ditebak menjadikan kemudahan bermanuver menjadi salah satu poin penting dalam memilih armada bisnis Anda. Isuzu Traga didukung transmisi 5 percepatan serta memiliki radius radius putar minimal 4,5 m sehingga mempermudah untuk bermanuver.</p><p> </p><p><strong>Kabin Modern dan Nyaman</strong></p><p>Isuzu Traga memiliki kabin modern yang dilengkapi dengan blower untuk menopang kenyamanan pengemudi. Pengemudi nyaman bisnis pun lancar.</p><p> </p><p><strong>Extra Untungnya</strong></p><p>Apa pun bisnis Anda, percayakan pada Isuzu Traga yang tersedia dalam bentuk aplikasi box yang dapat langsung digunakan dengan ukuran 2,8 m x 1,6 m x 1,4 m atau volume 6,37 m³. Dengan aplikasi open cargo, sangat tepat untuk pengangkutan umum seperti hasil perkebunan atau material bangunan. Aplikasi box cocok untuk kebutuhan pengangkutan industri, jasa, ekspedisi, usaha seperti katering, maupun usaha Anda lainnya.</p>', 'TRAGA.png', 'traga_specification.JPG', 'brosur_traga.pdf'),
('0d48188d63abe4dd4697990508782895', 'elf_nps_wallpaper.jpg', 'ISUZU ELF NPS', '<p><strong>Tenaga Optimal Dan Tangguh Disegala Medan</strong></p><p>Isuzu ELF NPS 4X4 kini menggunakan teknologi mesin Common Rail 4HL1-TCS yang dilengkapi Exhaust Gas Recirculation (EGR) dan Diesel Oxidation Catalyst (DOC), sehingga mampu menghasilkan emisi gas buang berstandar Euro4. Dengan Engine Control Unit (ECU) yang terdapat pada mesin common rail baru, kini Isuzu ELF NPS 4X4 mampu menghasilkan tenaga dan torsi yang lebih besar (150 PS/2600 rpm dan 41 kg.m/1400-2600 rpm).</p><p> </p><p><strong>4X4 Wheel Drive System OEM</strong></p><p>Isuzu ELF NPS 4X4 memiliki sistem penggerak roda 4x4 OEM (Original Equipped Manufacture) dengan dual mode, yakni 2 high untuk kondisi medan off-road ringan dan 4 low untuk kondisi medan off-road yang ekstrem dan berlumpur. Cara pengaktifan kedua mode ini pun mudah hanya cukup menekan tombol di dashboard. </p><p> </p><p><strong>4X4 Wheel Drive System OEM</strong></p><p>Isuzu ELF NPS 4X4 memiliki sistem penggerak roda 4x4 OEM (Original Equipped Manufacture) dengan dual mode, yakni 2 high untuk kondisi medan off-road ringan dan 4 low untuk kondisi medan off-road yang ekstrem dan berlumpur. Cara pengaktifan kedua mode ini pun mudah hanya cukup menekan tombol di dashboard. </p><p> </p><p><strong>Tarikan Pertama Lebih Bertenaga</strong></p><p>Isuzu ELF NPS 4X4 menggunakan transmisi MYY5T 5 tingkat percepatan dan first gear ratio yang lebih besar 5,315 untuk tarikan pertama yang semakin bertenaga.</p><p> </p><p><strong>Lebih Aman dan Nyaman Dengan Fitur-Fitur Fungsional</strong></p><p>Isuzu ELF NPS 4x4 memiliki <strong>kaca depan yang lebih tegak dan besar</strong>, membuat jarak pandang lebih luas, siap memberikan rasa aman dan nyaman yang ekstra bagi pengemudi. Juga dilengkapi dengan sensor <strong>Cabin Lock Warning Buzzer</strong> yang memberikan tanda peringatan saat kabin belum terkunci, sehingga membantu memaksimalkan keselamatan pengemudi saat berkendara. <strong>Fan blower</strong> guna meningkatkan sirkulasi udara di dalam kabin, dengan <strong>slot USB charger</strong> pengemudi dapat menikmati perjalanan tanpa khawatir kondisi baterai ponsel. Isuzu ELF NLR juga dilengkapi dengan <strong>APAR (Alat Pemadam Api Ringan)</strong> untuk memaksimalkan keamanan pada kondisi genting (kebakaran) serta <strong>kamera mundur</strong> agar pengemudi dapat melihat kondisi dibagian belakang kendaraan, sehingga memudahkan pengemudi saat mundur atau memarkir kendaraan.</p><p> </p><p><strong>Cocok Untuk Aplikasi Kendaraan Khusus Di Segala Medan</strong></p><p>Isuzu ELF NPS 4X4, hadir dengan sistem penggerak roda 4x4, cocok untuk aplikasi kendaraan khusus seperti angkutan militer, pertambangan dan perkebunan. Dengan penggerak roda 4x4, Isuzu ELF NPS 4x4 aman dikendarai di area ekstrim dan berlumpur (off-road). </p><p> </p><p><strong>Kemudahan Servis dan Suku Cadang</strong></p><p>Jaringan layanan purna jual yang luas dan lengkap, mulai dari bengkel resmi Isuzu, Bengkel Isuzu Berjalan hingga Bengkel Mitra Isuzu yang telah berpengalaman dengan mesin common rail sejak tahun 2011, mampu membantu Anda mempercepat proses perbaikan dan meningkatkan efisiensi bisnis Anda karena mampu meminimalisir downtime atau kerusakan. Suku cadang dapat dengan mudah didapatkan melalui dukungan bengkel resmi, mini depo, toko suku cadang (part shop), Bengkel Mitra Isuzu hingga Bengkel Isuzu Berjalan yang tersebar di seluruh kota di Indonesia.</p>', 'nps.png', 'nps_spek.JPG', 'ISUZU_BROSUR_PDF_POTRAIT_NPS.pdf'),
('2bb3ca0830efe5617a553961698c6602', 'dmax_wallpaper.JPG', 'ISUZU D-MAX', '<p>Tantangan ada untuk ditaklukkan. Apa pun tantangan Anda, Isuzu D-Max siap menemani Anda untuk untuk menaklukkannya. Dengan segala keunggulan yang dimilikinya tantangan seberat apapun akan terasa ringan saat ditaklukkan bersama Isuzu D-Max.</p><p> </p><p><strong>Mesin handal dan irit</strong><br>Kami memahami bahwa untuk menaklukkan tantangan dibutuhkan kendaraan yang bisa diandalkan secara maksimal. Isuzu D-Max dibekali mesin 4JK1-TC HI, commonrail, electronic controlled fuel injection pump dengan intercooled turbo charger dan VGS (Variable Geometry System), 4 silinder segaris, DOHC, dengan kapasitas sebesar 2.499 cc sehingga mampu menghasilkan tenaga sebesar 136 PS pada 3.400 rpm dan torsi puncaknya mencapai 32.6 kg-m pada 1.800 – 2.800 rpm. Meskipun memiliki tenaga yang maksimal, mesin Isuzu D-Max juga dirancang untuk menghasilkan efisiensi maksimal sehingga hemat bahan bakar.</p><p> </p><p><strong>Tangguh di segala medan</strong><br>Isuzu D-Max tersedia dalam pilihan single cab maupun double cab yang tangguh di medan off-road. Isuzu D-Max dengan penggerak 4X4 yang bisa diubah menjadi 4×2 untuk penggunaan jalan raya sehingga membuatnya cocok sebagai partner kerja di area tambang maupun perkebunan.</p><p> </p><p><strong>Tampilan dinamis</strong><br>Desain eksterior yang sangat dinamis, tangguh dan sporty dengan adanya LED head lamp, serta tampilan shaping style yang diambil dari paus membuat Isuzu D-Max tampil lebih gagah.</p><p> </p><p><strong>Kabin nyaman</strong><br>Di perjalanan menaklukkan tantangan kenyamanan juga diperlukan. Oleh karena itu Isuzu D-Max memiliki kabin yang luas di kelasnya sehingga memberikan kenyamanan maksimal bagi pengendara.</p>', 'D-MAX.png', 'dmax_specification.JPG', 'D-MAX.pdf'),
('30922e7ecb910eea76a59308ae5764d5', 'mux_wallpaper.JPG', 'ISUZU MU-X', '<p><strong>The Real Working Partner</strong></p><p>Kini Anda benar-benar bisa memilih partner kerja yang memberikan keuntungan ekstra. All New Isuzu mu-X 4×4 hadir dengan solusi tuntas. Mulai dari layanan servis dan spare parts on site, mesin 1900cc yang handal namun tetap irit bahan bakar, performa off-road yang tangguh menaklukkan segala medan, fitur keamanan lengkap, kenyamanan ekstra, serta design baru yang semakin gagah dan sporty. Saatnya tingkatkan keuntungan bisnis Anda, tanpa kenal batas.</p><p> </p><p><strong>SERVICE AND SPARE PARTS ON SITE</strong></p><p>Isuzu paham, bahwa untuk bisa meraih keuntungan maksimal dimulai dari pemilihan dan perawatan kendaraan bisnis yang tangguh dan efisien. Bersama All New Isuzu mu-X 4×4, Anda akan mendapatkan solusi tuntas yang memberikan kemudahan soal service dan sparepart on site. Tak lupa didukung dengan jaringan dan kualitas layanan dari semua dealer Isuzu di Indonesia.</p><p> </p><p><strong>LESS IS THE NEW MORE</strong></p><p>All New Isuzu mu-X 4×4 dirancang dengan mesin diesel common rail RZ4E dengan 1.9 L cc yang mampu menghasilkan tenaga lebih besar yaitu 150 PS dengan torsi 35,7 kgm. Performanya pun jadi lebih irit dan tangguh ketika dikombinasikan dengan transmisi automatic baru dengan 6 tingkat percepatan. Belum lagi, mesin ini juga sudah dilengkapi dengan teknologi turbo desain baru dan pengaturannya sudah diatur secara elektrik atau electric control VGS common rail turbo charger. Menariknya, mesin ini dibekali dengan kapasitas tangki hinga 80 Liter jadi jelas semakin menguntungkan untuk bisnis Anda.</p><p> </p><p><strong>DRIVE THE BUSINESS FURTHER</strong></p><p>Jemput peluang bisnis yang lebih luas bersama All New Isuzu mu-X 4×4 yang sanggup menembus medan offroad menggunakan Rough Terrain mode dengan traksi lebih baik daripada LSD (Limited-slip differential). All New Isuzu mu-X 4×4 juga dilengkapi dengan radiator dan intercooler protection di belakang grill serta under body protection dari bagian depan hingga belakang, sehingga Anda dapat merasa lebih percaya diri ketika berkendara di medan apa pun. Termasuk sungai dengan kedalaman tertentu, karena All New Isuzu mu-X 4×4 memiliki Water Wading Depth 80 cm.</p><p>Untuk melindungi Anda, fitur keamanan All New Isuzu mu-X 4×4 juga sudah dirancang menyesuaikan standar perusahaan Anda. Mulai dari fitur ABS (Anti-Lock Brake System), EBD (Electronic Brake-force Distribution), BA (Break Assist), Electronic Stability Control (ESC), Traction Control System &#40;TCS&#41;, Hill Start Assist (HSA) & Hill Decent Control (HDC), hingga disk brake yang lebih besar.</p><p>Ada juga fitur tambahan lain yaitu emergency stop lamp dan follow me home. Bagian chassis dan suspensi depan belakang juga sudah didesain ulang sehingga lebih stabil dan tidak limbung saat berbelok.</p><p> </p><p><strong>BETTER THAN YOUR COMFORT ZONE</strong></p><p>Selama menaklukan tantangan, kami juga ingin Anda selalu merasa nyaman. Karenanya All New Isuzu mu-X 4×4 memberikan kenyamanan lebih dengan kabin yang memberi ruang gerak fleksibel untuk 7 orang sekali jalan. Ruang kaki dan head roomnya pun juga cukup lega dengan roda kemudi yang lebih sporty dan diameter yang lebih kecil dan pengaturan tilt & telescopic membuat pengemudi jadi lebih nyaman saat berkendara. Dan ketika menempuh jarak tempuh yang jauh, Anda pun akan tetap merasa rileks karena fitur 5 link coil spring membuat laju All New Isuzu mu-X 4×4 terasa lebih empuk.</p><p>Kendaraan bisnis ini juga memiliki bagian interior yang mendukung Anda untuk meletakkan perlengkapan site dengan mudah di luggage box ruang bagasi belakang. Seperti tool kits, sarung tangan, rompi, atau botol air sebesar 1,5 yang bisa Anda letakkan di placeholder setiap pintu.</p><p>Khusus untuk All New Isuzu mu-X 4×4, terdapat head unit 7inch dengan kamera mundur, parking sensor, electric parking brake, dan auto hold yang semakin menambah kemudahan dan kenyamanan saat berkendara maupun saat memarkir kendaraan.</p><p> </p><p><strong>TIME TO GO BOLD</strong></p><p>Design yang dimiliki All New Isuzu mu-X 4×4 mengusung tema emotional dan bold. Bagian luarnya terlihat powerful dan sporty. Semua elemen dan garis design-nya pun tampil berani dengan paduan front grill baru yang merepresentasikan 6 kontinen khas Isuzu, head lamp dan rear combination lamp baru, dan velg berukuran 17inch. All new Isuzu mu-X membuat Anda terlihat lebih percaya diri, nyaman dikendarai, dan memberikan keuntungan ekstra sebagai partner kerja sejati.</p>', 'MU-X.png', 'mux_specification.JPG', 'MU-X.pdf'),
('5c6e0ad2e1dd9c370d8a32ae2a91ab52', 'nmr_58_65_wallpaper.JPG', 'ISUZU ELF NMR 5.8 & 6.5', '<p><strong>TRANSMISI DENGAN 6 TINGKAT PERCEPATAN</strong></p><p>Isuzu ELF NMR HD menggunakan transmisi MYY6S dengan 6 tingkat percepatan yang mampu memaksimalkan efisiensi bahan bakar, serta memiliki first gear ratio yang lebih besar, sehingga menghasilkan tenaga lebih besar. Waktu tempuh lebih cepat, ritase meningkat dan tentunya biaya operasional makin efisien.</p><p> </p><p><strong>INTERIOR & JARAK PANDANG YANG LUAS</strong></p><p>Isuzu ELF NMR HD memiliki kaca depan yang lebih tegak dan besar, membuat jarak pandang lebih luas, memberikan rasa aman dan nyaman yang ekstra bagi pengemudi.</p><p> </p><p><strong>CABIN LOCK WARNING BUZZER</strong></p><p>Isuzu ELF NMR HD dilengkapi dengan fan blower guna meningkatkan sirkulasi udara di dalam kabin. Kenyamanan pengemudi saat berkendara pun semakin optimal.</p><p> </p><p><strong>KINI HADIR DENGAN USB CHARGER</strong></p><p>Untuk meningkatkan kenyamanan dan kegunaan fitur dalam kabin, kini Isuzu ELF NMR HD dilengkapi dengan slot USB charger, sehingga pengemudi dapat menikmati perjalanan tanpa khawatir kondisi baterai ponsel pengemudi.</p><p> </p><p><strong>APAR UNTUK KEAMANAN OPTIMAL</strong></p><p>Isuzu ELF NMR HD dilengkapi dengan APAR (Alat Pemadam Api Ringan) untuk memaksimalkan keamanan pada kondisi genting (kebakaran).</p><p> </p><p><strong>KAMERA MUNDUR UNTUK KEAMANAN OPTIMAL</strong></p><p>Pengemudi dapat melihat kondisi dibagian belakang kendaraan, sehingga memudahkan pengemudi saat mundur atau memarkir kendaraan.</p><p> </p><p><strong>DAYA TAHAN TINGGI</strong></p><p>Daya tahan truk tentunya sangat berpengaruh pada kegiatan operasional bisnis Anda. Oleh karena itu, komponen pada Isuzu ELF NMR HD seperti axle dan frame dirancang untuk memiliki daya tahan yang baik.</p><p> </p><p><strong>KUAT HADAPI SEGALA TANTANGAN</strong></p><p>Isuzu ELF NMR HD dilengkapi dengan rasio gardan 5.857 dan 6.500 sehingga menghasilkan performa dan daya tanjak maksimal. Tidak hanya itu, Isuzu ELF NMR HD juga dilengkapi chassis dengan tebal 6 mm ditambah reinforcement 4.5 mm, sehingga semakin kuat menjelajahi berbagai medan dan tantangan. Cocok untuk aplikasi bak besi, dump, bak kayu, tangki dan box besi. Hal ini tentu menjadikan Isuzu ELF NMR HD unggul sebagai truk ringan 6 ban berkelas Heavy Duty dengan angkutan maksimal dan meningkatkan keuntungan bisnis</p>', 'NMR__58_65.png', 'elfnmr_58_65_spek.JPG', 'brosur_nmr.pdf'),
('ee177a0f164450b82a28231a3c857b77', 'isuzu_nlr_wallpaper.JPG', 'ISUZU ELF NLR', '<p><strong>HADIR DENGAN MESIN 4JJ1-TCC COMMON RAIL BERSTANDAR EURO4</strong></p><p>Isuzu ELF NLR kini menggunakan teknologi mesin Common Rail 4JJ1-TCC yang dilengkapi Exhaust Gas Recirculation (EGR) dan Diesel Oxidation Catalyst (DOC), sehingga mampu menghasilkan emisi gas buang berstandar EURO4. Dengan Engine Control Unit (ECU) yang terdapat pada mesin common rail, kini Isuzu ELF NLR mampu menghasilkan tenaga dan torsi yang lebih besar (120 PS/2,600 rpm dan 36 kg.m/1,500 - 2,600 rpm) namun lebih irit dan mampu mengoptimalkan efisiensi bisnis Anda.</p><p> </p><p><strong>TRANSMISI BARU DENGAN 6 TINGKAT PERCEPATAN</strong></p><p>Kini, Isuzu ELF NLR menggunakan transmisi MYY6S dengan 6 tingkat percepatan yang mampu memaksimalkan efisiensi bahan bakar, serta memiliki first<br>gear ratio yang lebih besar, sehingga menghasilkan tenaga lebih besar. Waktu tempuh lebih cepat, ritase meningkat dan tentunya biaya operasional makin efisien.</p><p> </p><p><strong>INTERIOR & JARAK PANDANG YANG LUAS</strong></p><p>Isuzu ELF NLR memiliki kaca depan yang lebih tegak danbesar, membuat jarak pandang lebih luas, memberikan rasa aman dan nyaman yang ekstra bagi pengemudi.</p><p> </p><p><strong>CABIN LOCK WARNING BUZZER</strong></p><p>Isuzu ELF NLR dilengkapi dengan sensor Cabin Lock Warning Buzzer yang memberikan tanda peringatan saat kabin belum terkunci, sehingga membantu memaksimalkan keselamatan pengemudi sebelum berkendara.</p>', '2022_NLR__EURO4_Bak_Besi.png', 'isuzunlr_spek.JPG', 'ISUZU_BROSUR_PDF_POTRAIT_NLR.pdf'),
('kp-105c4e0b23d525af1d517e2e1a3f4562', 'NLR_L.JPG', 'ISUZU ELF NLR L', '<p><strong>Isuzu ELF NLR L, Daya Angkut Luas, Untung Meningkat</strong></p><p>Isuzu ELF NLR L hadir dengan panjang wheelbase 3,360 mm, sehingga memiliki kapasitas dan daya angkut yang luas, cocok untuk aplikasi box alumunium & bak besi. Hal ini tentu menjadikan Isuzu ELF NLR L unggul sebagai truk ringan 4 ban yang juga teruji hemat bahan bakar sehingga mampu meningkatkan keuntungan bisnis.</p><p> </p><p><strong>Transmisi Baru dengan 6 Tingkat Percepatan</strong></p><p>Kini Isuzu ELF NLR dan Isuzu ELF NLR L menggunakan transmisi MYY6S dengan 6 tingkat percepatan yang mampu memaksimalkan efisiensi bahan bakar, serta memiliki first gear ratio yang lebih besar, sehingga menghasilkan tenaga lebih besar. Waktu tempuh lebih cepat, ritase meningkat dan tentunya biaya operasional makin efisien.</p><p> </p><p><strong>Lebih Aman dan Nyaman Dengan Fitur-Fitur Fungsional</strong></p><p>Isuzu ELF NLR dan Isuzu ELF NLR L memiliki <strong>kaca depan yang lebih tegak dan besar</strong>, membuat jarak pandang lebih luas, siap memberikan rasa aman dan nyaman yang ekstra bagi pengemudi. Juga dilengkapi dengan sensor <strong>Cabin Lock Warning Buzzer</strong> yang memberikan tanda peringatan saat kabin belum terkunci, sehingga membantu memaksimalkan keselamatan pengemudi saat berkendara. <strong>Fan blower</strong> guna meningkatkan sirkulasi udara di dalam kabin, dengan <strong>slot USB charger</strong> pengemudi dapat menikmati perjalanan tanpa khawatir kondisi baterai ponsel. Isuzu ELF NLR dan Isuzu ELF NLR L juga dilengkapi dengan <strong>APAR (Alat Pemadam Api Ringan)</strong> untuk memaksimalkan keamanan pada kondisi genting (kebakaran) serta <strong>kamera mundur</strong> agar pengemudi dapat melihat kondisi dibagian belakang kendaraan, sehingga memudahkan pengemudi saat mundur atau memarkir kendaraan.</p><p> </p><p><strong>Kemudahan Servis dan Suku Cadang</strong></p><p>Jaringan layanan purna jual yang luas dan lengkap, mulai dari bengkel resmi Isuzu, Bengkel Berjalan Isuzu hingga Bengkel Mitra Isuzu yang telah berpengalaman dengan mesin common rail sejak tahun 2011, mampu membantu Anda mempercepat proses perbaikan dan meningkatkan efisiensi bisnis Anda karena mampu meminimalisir downtime atau kerusakan. Suku cadang dapat dengan mudah didapatkan melalui dukungan bengkel resmi, mini depo, toko suku cadang (part shop), bengkel mitra Isuzu hingga Bengkel Isuzu Berjalan yang tersebar di seluruh kota di Indonesia.</p>', '2022_NLR_L__EURO4_Box_Aluminium.png', 'nlrL_spek.png', 'ISUZU_BROSUR_PDF_POTRAIT_NLR_L.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
('usr-98742f2261815a418acc4f04f81376d2', 'admin', '$2y$10$BDSuOGczyRkiSRaEl6zHK.Eo4..1mwvL4935rUmeutEW5fsDbrc9e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `news_info`
--
ALTER TABLE `news_info`
  ADD PRIMARY KEY (`id_newsinfo`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_kategori` (`id_kp`);

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

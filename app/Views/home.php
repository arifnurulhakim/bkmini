<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurantly Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/public/hometemp/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/public/hometemp/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/public/hometemp/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/hometemp/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/public/hometemp/css/style.css" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->

    <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li>En</li>
                    <li><a href="#">De</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="home">Mini Coffee</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                    <li><a class="nav-link scrollto" href="#events">Events</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>

                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Contact</a>
                    </li>
                    <!-- <li><button type="button" class="nav-link btn btn-social-icon-text book-a-table-btn scrollto d-none d-lg-flex " onclick="bukaModalKeranjang()"><i class="mdi mdi-cart-outline"></i>Keranjang <b id="jmlPesanan">(0)</b></button></li> -->
                </ul>
                <button type="button" class="nav-link btn btn-social-icon-text book-a-table-btn scrollto me-auto me-lg-0 " onclick="bukaModalKeranjang()"><i class="mdi mdi-cart-outline"></i>Keranjang <b id="jmlPesanan">(0)</b></button>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Mini Coffee</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="<?= base_url() ?>/public/hometemp/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Why Us</h2>
                    <p>Why Choose Our Restaurant</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Lorem Ipsum</h4>
                            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Repellat Nihil</h4>
                            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4> Ad ad velit qui</h4>
                            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Check Our Tasty Menu</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-makanan">Makanan</li>
                            <li data-filter=".filter-minumandingin">Minuman Dingin</li>
                            <li data-filter=".filter-minumanpanas">Minuman Panas</li>
                            <li data-filter=".filter-snack">Snack</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                    <?php if ($makanan) : ?>
                        <div class="col-lg-6 menu-item filter-makanan">
                            <?php for ($i = 0; $i < count($makanan); $i++) :
                                if ($makanan[$i]["jenis"] == 1) : ?>
                                    <img src="<?= base_url() ?>/public/images/menu/<?= $makanan[$i]["foto"] ?>" class="menu-img" <?php if ($makanan[$i]["status"] == 0) {
                                                                                                                                        echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                    } ?> alt="...">
                                    <div class="menu-content">
                                        <a><?= $makanan[$i]["nama"] ?></a><span>Rp. <?= $makanan[$i]["harga"] ?></span>
                                    </div>
                                    <div class="menu-ingredients">
                                        Lorem, deren, trataro, filede, nerada
                                    </div>
                                    <div class="menu-ingredients">
                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($makanan[$i]["status"] == 0) {
                                                                                                echo "disabled";
                                                                                            } ?> onclick='tambahPesanan(
                                    <?= $makanan[$i]["id"] ?>, "<?= $makanan[$i]["nama"] ?>", <?= $makanan[$i]["harga"] ?> )'>
                                            <?php if ($makanan[$i]["status"] == 0) {
                                                echo "Habis";
                                            } else {
                                                echo "Tambah";
                                            } ?></button>
                                    </div>
                            <?php
                                endif;
                            endfor; ?>
                        </div>
                    <?php
                    endif;
                    if ($snack) : ?>
                        <div class="col-lg-6 menu-item filter-snack">
                            <?php for ($i = 0; $i < count($snack); $i++) :
                                if ($snack[$i]["jenis"] == 2) : ?>
                                    <img src="<?= base_url() ?>/public/images/menu/<?= $snack[$i]["foto"] ?>" class="menu-img" <?php if ($snack[$i]["status"] == 0) {
                                                                                                                                    echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                } ?> alt="...">
                                    <div class="menu-content">
                                        <a><?= $snack[$i]["nama"] ?></a><span>Rp. <?= $snack[$i]["harga"] ?></span>
                                    </div>
                                    <div class="menu-ingredients">
                                        Lorem, deren, trataro, filede, nerada
                                    </div>
                                    <div class="menu-ingredients">
                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($snack[$i]["status"] == 0) {
                                                                                                echo "disabled";
                                                                                            } ?> onclick='tambahPesanan(
                                <?= $makanan[$i]["id"] ?>, "<?= $snack[$i]["nama"] ?>", <?= $snack[$i]["harga"] ?> )'>
                                            <?php if ($snack[$i]["status"] == 0) {
                                                echo "Habis";
                                            } else {
                                                echo "Tambah";
                                            } ?></button>
                                    </div>
                            <?php
                                endif;
                            endfor; ?>
                        </div>
                    <?php
                    endif;
                    if ($minumanDingin) : ?>
                        <div class="col-lg-6 menu-item filter-minumandingin">
                            <?php for ($i = 0; $i < count($minumanDingin); $i++) :
                                if ($minumanDingin[$i]["jenis"] == 3) : ?>
                                    <img src="<?= base_url() ?>/public/images/menu/<?= $minumanDingin[$i]["foto"] ?>" class="menu-img" <?php if ($minumanDingin[$i]["status"] == 0) {
                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                        } ?> alt="...">
                                    <div class="menu-content">
                                        <a><?= $minumanDingin[$i]["nama"] ?></a><span>Rp. <?= $minumanDingin[$i]["harga"] ?></span>
                                    </div>
                                    <div class="menu-ingredients">
                                        Lorem, deren, trataro, filede, nerada
                                    </div>
                                    <div class="menu-ingredients">
                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($minumanDingin[$i]["status"] == 0) {
                                                                                                echo "disabled";
                                                                                            } ?> onclick='tambahPesanan(
                                <?= $minumanDingin[$i]["id"] ?>, "<?= $minumanDingin[$i]["nama"] ?>", <?= $minumanDingin[$i]["harga"] ?> )'>
                                            <?php if ($minumanDingin[$i]["status"] == 0) {
                                                echo "Habis";
                                            } else {
                                                echo "Tambah";
                                            } ?></button>
                                    </div>
                            <?php
                                endif;
                            endfor; ?>
                        </div>
                    <?php
                    endif;
                    if ($minumanPanas) : ?>
                        <div class="col-lg-6 menu-item filter-minumanpanas">
                            <?php for ($i = 0; $i < count($minumanPanas); $i++) :
                                if ($minumanPanas[$i]["jenis"] == 4) : ?>
                                    <img src="<?= base_url() ?>/public/images/menu/<?= $minumanPanas[$i]["foto"] ?>" class="menu-img" <?php if ($minumanPanas[$i]["status"] == 0) {
                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                        } ?> alt="...">
                                    <div class="menu-content">
                                        <a><?= $minumanPanas[$i]["nama"] ?></a><span>Rp. <?= $minumanPanas[$i]["harga"] ?></span>
                                    </div>
                                    <div class="menu-ingredients">
                                        Lorem, deren, trataro, filede, nerada
                                    </div>
                                    <div class="menu-ingredients">
                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($minumanPanas[$i]["status"] == 0) {
                                                                                                echo "disabled";
                                                                                            } ?> onclick='tambahPesanan(
                                <?= $makanan[$i]["id"] ?>, "<?= $minumanPanas[$i]["nama"] ?>", <?= $minumanPanas[$i]["harga"] ?> )'>
                                            <?php if ($minumanPanas[$i]["status"] == 0) {
                                                echo "Habis";
                                            } else {
                                                echo "Tambah";
                                            } ?></button>
                                    </div>
                            <?php
                                endif;
                            endfor; ?>
                        </div>
                    <?php
                    endif; ?>
                </div>




        </section><!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Specials</h2>
                    <p>Check Our Specials</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Architecto ut aperiam autem id</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>/public/hometemp/img/specials-1.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Et blanditiis nemo veritatis excepturi</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>/public/hometemp/img/specials-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                        <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>/public/hometemp/img/specials-3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>/public/hometemp/img/specials-4.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="<?= base_url() ?>/public/hometemp/img/specials-5.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>/public/hometemp/img/event-birthday.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Birthday Parties</h3>
                                    <div class="price">
                                        <p><span>$189</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>/public/hometemp/img/event-private.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Private Parties</h3>
                                    <div class="price">
                                        <p><span>$290</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="<?= base_url() ?>/public/hometemp/img/event-custom.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>$99</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What they're saying about us</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url() ?>/public/hometemp/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url() ?>/public/hometemp/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url() ?>/public/hometemp/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url() ?>/public/hometemp/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url() ?>/public/hometemp/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some photos from Our Restaurant</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?= base_url() ?>/public/hometemp/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="<?= base_url() ?>/public/hometemp/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Chefs</h2>
                    <p>Our Proffesional Chefs</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="<?= base_url() ?>/public/hometemp/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Master Chef</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="<?= base_url() ?>/public/hometemp/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Patissier</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src="<?= base_url() ?>/public/hometemp/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>Cook</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Saturday:<br>
                                    11:00 AM - 2300 PM
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


        <!-- Modal -->
        <div class="modal fade" id="modalKeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black" id="exampleModalLabel">Keranjang Pesanan</h5>

                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" id="noMeja" class="form-control" placeholder="No Meja" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" id="nominal" class="form-control" placeholder="Nominal uang yang akan di bayarkan" required />
                        </div>

                        <table class="table text-center bg-white" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jml</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody id="tabelPesanan">
                                <td colspan="5">Data Kosong</td>
                            </tbody>
                            <tfoot>
                                <td colspan="5">
                                    <h5>
                                        total :<input type="number" id="totalHarga" disabled>
                                    </h5>
                                </td>
                            </tfoot>


                        </table>

                        <b id="peringatan" class="badge badge-danger">Silahkan isi nama dan no meja.</b><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="tutupModalKeranjang()">Tutup</button>
                        <button type="button" class="btn btn-warning" onclick="prosesTransaksi()" id="simpanTransaksi">Pesan</button>
                    </div>
                </div>


            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black" id="exampleModalLabel">Pesanan Berhasil.</h5>
                    </div>
                    <div class="modal-body text-black">
                        Pesanan Berhasil dibuat. atas nama <b id="namaPemesan" class="text-black"></b> dengan lokasi meja <b id="lokasiMeja"></b>.
                        <br> <br><b class="text-red"> Silahkan melakukan pembayaran ke Kasir</b> <br> <br>
                        <b class="text-black">Terimakasih</b><br><br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" onclick="tutupModalSelesai()">OKE</button>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Restaurantly</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/public/hometemp/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/public/hometemp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/hometemp/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/public/hometemp/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/public/hometemp/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/hometemp/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/public/hometemp/js/main.js"></script>

    <script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
    <script>
        var pesanan = [];
        var ditemukan = false
        var jmlPesanan = 0

        function bukaModalKeranjang() {
            tampilkanPesanan()
            $("#modalKeranjang").modal("show")
            $("#peringatan").hide()
        }

        function bukaModalLogin() {
            $("#modalLogin").modal("show")
        }

        function login() {
            idUser = $("#idUser").val()
            pass = $("#pass").val()

            if ($("#pass").val() == "") {
                $("#pass").focus();
            } else {
                $.ajax({
                    type: 'POST',
                    data: 'idUser=' + idUser + '&pass=' + pass,
                    url: '<?= base_url() ?>/dashboard/auth',
                    dataType: 'json',
                    success: function(data) {
                        if (data == "") {
                            window.location.href = "antrian";
                        } else {
                            $("#errorLogin").html(data)
                        }
                    }
                });
            }
        }

        function prosesTransaksi() {
            var nama = $('#nama').val();
            var noMeja = $('#noMeja').val();
            var nominal = $('#nominal').val();
            if (nama == "") {
                $("#nama").focus()
                $("#peringatan").show()
            } else if (noMeja == "") {
                $("#noMeja").focus()
                $("#peringatan").show()
            } else if (nominal == "") {
                $("#nominal").focus()
                $("#peringatan").show()
            } else {
                $("#simpanTransaksi").html('<i class="mdi mdi-reload fa-pulse"></i> Memproses..')
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/pesan/tambahPesanan',
                    data: {
                        'pesanan': pesanan,
                        'nama': nama,
                        'noMeja': noMeja,
                        'nominal': nominal
                    },
                    dataType: 'json',
                    success: function(data) {
                        $("#modalKeranjang").modal("hide")
                        pesanan = [];
                        $('#nama').val("");
                        $('#noMeja').val("");
                        $('#nominal').val("");
                        tampilkanPesanan();

                        $("#simpanTransaksi").html('Pesan dan Bayar')
                        $("#namaPemesan").html(nama)
                        $("#lokasiMeja").html(noMeja)
                        $("#nominal").html(nominal)
                        $("#modalSelesai").modal("show")
                    }
                });
            }
        }

        function tutupModalKeranjang() {
            $("#modalKeranjang").modal("hide")
        }

        function tutupModalSelesai() {
            $("#modalSelesai").modal("hide")
        }

        function tutupModalLogin() {
            $("#modalLogin").modal("hide")
        }

        function tambahPesanan(id, nama, harga) {
            ditemukan = false
            jmlPesanan = 0
            for (let i = 0; i < pesanan.length; i++) {
                if (pesanan[i][0] == id) {
                    pesanan[i][2] += 1
                    ditemukan = true
                }
                jmlPesanan += pesanan[i][2]
            }
            if (ditemukan == false) {
                pesanan.push([id, nama, 1, harga])
                jmlPesanan += 1
            }

            $("#jmlPesanan").html("(" + jmlPesanan + ")")
        }

        function tampilkanPesanan() {
            var isiPesanan = ""
            var totalHarga = 0
            for (let i = 0; i < pesanan.length; i++) {
                totalHarga += pesanan[i][2] * pesanan[i][3]
                isiPesanan += "<tr><td>" + pesanan[i][1] + "</td><td>" + pesanan[i][2] + "</td><td>" + formatRupiah(pesanan[i][3].toString()) + "</td><td>" + formatRupiah((pesanan[i][2] * pesanan[i][3]).toString()) + "</td><td><button href='#' class='btn btn-danger' onClick='hapusPesanan(" + i + ")'>x</button></td></tr>"


            }
            if (pesanan.length < 1) {
                $("#simpanTransaksi").prop("disabled", true)
                isiPesanan = "<td colspan='5'>Pesanan Masih Kosong</td>"
            } else {
                $("#simpanTransaksi").prop("disabled", false)
            }

            $("#tabelPesanan").html(isiPesanan)

            $("#totalHarga").val(formatRupiah(totalHarga.toString()))
        }

        function hapusPesanan(id) {
            pesanan.splice(id, 1)
            tampilkanPesanan()
        }

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>


    <script src="<?= base_url() ?>/public/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>/public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>/public/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/js/template.js"></script>
    <script src="<?= base_url() ?>/public/js/settings.js"></script>
    <script src="<?= base_url() ?>/public/js/todolist.js"></script>
    <!-- endinject -->

</body>

</html>
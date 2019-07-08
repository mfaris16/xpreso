<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
    

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body class="ss-bg-white">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="top" class="s-wrap site-wrapper">
        <!-- site header
            ================================================== -->
        <header class="s-header">
        <div class="header__top">
            <div class="header__logo">
                <a class="site-logo" href="welcome"><h5 style="color: white">XPRESO</h5></a>
            </div>
            <div class="header__search">
                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="header__search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off"></label>
                    <input type="submit" class="header__search-submit" value="Search"></form>
                <a href="#0" title="Close Search" class="header__search-close">Close</a>
            </div>
            <!-- end header__search -->
            <!-- toggles -->
            <a href="#0" class="header__search-trigger"></a>
            <a href="#0" class="header__menu-toggle"><span>Menu</span></a>
        </div>
        <!-- end header__top -->
        <nav class="header__nav-wrap">
        <ul class="header__nav">
            <li>
                <a href="welcome" title="">Home</a>
            </li>
            <li class="current">
                <a href="page-about" title="">About Us</a>
            </li>
            <li>
                <a href="events" title="">Events</a>
            </li>
            <li>
                <a href="information" title="">Information</a>
            </li>
            <li>
                <a href="registration">Registration</a>
            </li>
            <li>
                <a href="schedule">Schedule</a>
            </li>
            <li>
                <a href="sponsor">Sponsor & Media Partner</a>
            </li>
        </ul>
        <!-- end header__nav -->
        <ul class="header__social">
            <li class="ss-facebook">
                <a href="https://facebook.com/"><span class="screen-reader-text">Facebook</span></a>
            </li>
            <li class="ss-twitter">
                <a href="#0"><span class="screen-reader-text">Twitter</span></a>
            </li>
            <li class="ss-dribbble">
                <a href="#0"><span class="screen-reader-text">Dribbble</span></a>
            </li>
            <li class="ss-pinterest">
                <a href="#0"><span class="screen-reader-text">Behance</span></a>
            </li>
        </ul>
        </nav> <!-- end header__nav-wrap -->

        </header> <!-- end s-header -->


        <!-- site content
        ================================================== -->
        <div class="s-content content">
            <main class="row content__page" style="text-align: center">
                
            <p>XPRESO merupakan acara perlombaan tahunan di SMA Pesantren Terpadu Hayatan Thayyibah  yang bertujuan untuk membantu mengarahkan, mengembangkan, dan meningkatkan potensi serta daya saing putra putri harapan bangsa. <br>
                <br>
                Sesuai kapanjangannya yaitu Xpresi Edukasi, Seni, dan Olahraga, XPRESO melombakan kemampuan dalam bidang Edukasi, Seni, dan Olahraga dengan tajuk berekspresi dalam bidang-bidang tersebut. <br>
                <br>
                Pada tahun ini kita mengusung tema ”ILLOGICAL THOUGHTS : REVIVE INANIMATE WORLD” yang memiliki makna ajakan untuk ”Mewarnai” kembali dunia yang sudah tak berwarna dengan impian-impian dan usaha-usaha dari putra putri penerus bangsa. <br>
                <br>
                Salah satu yang menjadikan dunia tak berwarna adalah hidup yang serba instan dan ditambah lagi dengan akan munculnya mesin-mesin yang berpotensi menggantikan manusia di masa depan. Hal ini mengharuskan kita sebagai putra putri penerus bangsa berjuang lebih giat dan berusaha untuk menunjukan bahwa kita yang mengendalikan modernisasi, bukan modernisasi yang mengendalikan kita. <br>
                <br>
                Percayalah bahwa, <br>
                USAHA TIDAK AKAN MENGKHIANATI HASIL,  APA YANG KAU DAPAT ADALAH APA YANG KAU TANAM
                </p>

            </main>

        </div> <!-- end s-content -->

    </div> <!-- end s-wrap -->


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

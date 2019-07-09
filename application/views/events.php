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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets/css/base.css');?>">
<link rel="stylesheet" href="<?= base_url('assets/css/vendor.css');?>">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css');?>">
<!-- script
    ================================================== -->
<script src="js/modernizr.js"></script>
<script src="https://kit.fontawesome.com/78cf3c7533.js"></script>
<!-- favicons
    ================================================== -->
</head>
<body>
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
			<a class="site-logo" href="<?= base_url();?>"><h5 style="color: white">XPRESO</h5></a>
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
        <li>
			<a href="about" title="">About Us</a>
		</li>
		<li class="current">
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
		<li class="ss-instagram">
			<a href="https://instagram.com/official.xpreso/"><span class="screen-reader-text">Instagram</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
	</ul>
	</nav>
	<!-- end header__nav-wrap --></header>
	<!-- end s-header -->
	<div class="s-content">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    EDUCATIONS
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                   <ul> 
                    <li>English Debate Competition</li>
                    <li>“Cerdas Cermat” Science and Religion Competition (SARCOM)</li>
                    <li>Storytelling Competition</li>
                    <li>Musabaqah Hifdzil Qur’an (MHQ) Competition</li>
                    <li>Dakwah Competition</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ARTS
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                <ul>
                    <li>Marawis Competition</li>
                    <li>Solo Vocal Competition</li>
                </ul>        
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    SPORTS
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li>Futsal Competition</li>
                        <li>Basketball Competition</li>
                    </ul>    
                </div>
              </div>
            </div>
          </div>
	</div>
	<!-- end s-content -->
	<!-- footer
        ================================================== -->
</div>
<!-- end s-wrap -->
<!-- Java Script
    ================================================== -->
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('js/plugins.js');?>"></script>
<script src="<?= base_url('js/main.js');?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

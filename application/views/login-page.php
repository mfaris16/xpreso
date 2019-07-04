<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<!--- basic page needs
    ================================================== -->
	<meta charset="UTF-8">
<title>XPRESO</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- mobile specific metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="<?= base_url('assets/css/base.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/vendor.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">	
<!-- script
    ================================================== -->
<script src="<?= base_url('assets/js/modernizr.js');  ?>"></script>
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
			<a class="site-logo" href="<?= base_url();?>"><h3 style="color: white">XPRESO</h3></a>
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

<h3 class="h2">Login mangggg</h3>
        
                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>
    
                            <div class="form-field">
                                <input name="email" id="email" class="full-width" placeholder="Alamat Email" value="" type="email">
                            </div>
                            <div class="form-field">
                                <input name="name" id="name" class="full-width" placeholder="Password" value="" type="password">
                            </div>
    
                            <input name="login" id="login" class="btn btn--primary btn-wide btn--large full-width" value="Login" type="submit">
    
    </fieldset>
</form>
	<!-- footer
        ================================================== -->
        </div>

<!-- end s-wrap -->
<!-- Java Script
    ================================================== -->
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/js/main.js');?>"></script>
</body>

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
        <li class="current">
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
<h3 class="h2">Mohon Isi Data Dibawah Ini</h3>
        
                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>
                            <div class="form-field">
                                <input type="hidden" name="id" value="<?= $getId['id']; ?>">
                            </div>
                            <div class="form-field">
                                <input name="cName" id="cName" class="full-width" placeholder="Nama Lengkap" value="<?= $getId['nama']; ?>" type="text">
                            </div>
    
                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="full-width" placeholder="Alamat Email" value="<?= $getId['email']; ?>" type="email">
                            </div>
    
                            <div class="form-field">
								<label>Jenis Kelamin:</label><br>
								<input name="cGender" id="cGenderL" value="L" type="radio" <?php if($getId['jenis_kelamin']=='L'){echo 'checked="checked"';}?>> <label  for="cGenderL">Pria</label><br>
								<input name="cGender" id="cGenderP" value="P" type="radio" <?php if($getId['jenis_kelamin']=='P'){echo 'checked="checked"';}?>> <label for="cGenderP">Wanita</label>
							</div>
							
							<div class="form-field">
								<label for="cDateBirth">Tanggal Lahir : </label><br><input name="cDateBirth" id="cDateBirth" type="date" value="<?= $getId['tgl_lahir'];?>">
							</div>
    
                            <div class="message form-field">
                                <textarea name="cAdress" id="cAddress" class="full-width" placeholder="Alamat Lengkap"><?= $getId['alamat'];?></textarea>
							</div>
							
							<div class="form-field">
								<input type="text" name="cPhone" class="full-width" id="cPhone" placeholder="No Telpon" value="<?= $getId['nohp'];?>">
							</div>

							<div class="form-field">
								<select name="cLomba" id="cLomba" class="full-width">
                                    <option value="">--Pilih Mata Lomba--                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </option>
									<?php foreach($lomba as $l) :?>
                                    <?php if($l == $getId['mata_lomba']):?>
									    <option value="<?= $l?>" selected><?= $l?></option>
                                    <?php else:?>
                                        <option value="<?= $l?>"><?= $l?></option>
                                    <?php endif;?>
									<?php endforeach;?>
								</select>
							</div>

							<div class="form-field">
								<select name="cLagu" id="cLagu" class="full-width">
									<option value="-">--Pilih Lagu--</option>
								<?php foreach($laguL as $lL) :?>
                                <?php if($lL == $getId['lagu']):?>
                                <option value="<?= $lL?>" selected><?= $lL?></option>
                                <?php else : ?>
									<option value="<?= $lL?>"><?= $lL?></option>
                                <?php endif;?>
									<?php endforeach;?>
								</select>
							</div>
							<div class="form-field">
                                <input name="cAsal" id="cAsal" class="full-width" placeholder="Asal Sekolah" value="<?= $getId['asal_sekolah'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoSekolah" id="cNoSekolah" class="full-width" placeholder="No Telpon Sekolah" value="<?= $getId['no_sekolah'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNamaPembina" id="cNamaPembina" class="full-width" placeholder="Nama Pembina" value="<?= $getId['nama_pembina'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoPembina" id="cNoPembina" class="full-width" placeholder="No HP Pembina" value="<?= $getId['nama_pembina'];?>" type="text">
                            </div>
    
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Submit" type="submit">
    
                        </fieldset>
                    </form>
                    </div>

<!-- end s-wrap -->
<!-- Java Script
    ================================================== -->
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/js/main.js');?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

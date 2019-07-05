<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>About - Typerite</title>
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
			<a class="site-logo" href="index.html"><h3 style="color: white">XPRESO</h3></a>
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
	<?= 'hai '.$this->session->userdata('username');
	echo '<br>'.anchor('admin/keluar','keluar');
	?>
	<table>
		<tr>
			<td>No.</td>
			<td>Nama Lengkap</td>
			<td>Email</td>
			<td>Jenis Kelamin</td>
			<td>Tanggal Lahir</td>
			<td>Alamat</td>
			<td>No Hp</td>
			<td>Lomba</td>
			<td>Lagu Pilihan (Solo Vocal)</td>
			<td>Asal Sekolah</td>
			<td>No Telp. Sekolah</td>
			<td>Nama Pembina</td>
			<td>No Pembina</td>
			<td>Tanggal Daftar</td>
		</tr>
		<?php
		$no = 1;
			foreach($datas as $d) :
		?>
		<tr>
			<td><?= $no++;?></td>
			<td><?= $d['nama'];?></td>
			<td><?= $d['email'];?></td>
			<td><?= $d['jenis_kelamin'];?></td>
			<td><?= $d['tgl_lahir'];?></td>
			<td><?= $d['alamat'];?></td>
			<td><?= $d['nohp'];?></td>
			<td><?= $d['mata_lomba'];?></td>
			<td><?= $d['lagu'];?></td>
			<td><?= $d['asal_sekolah'];?></td>
			<td><?= $d['no_sekolah'];?></td>
			<td><?= $d['nama_pembina'];?></td>
			<td><?= $d['no_pembina'];?></td>
			<td><?= $d['tgl_dibuat'];?></td>
		</tr>
			<?php endforeach;?>
	</table>
	</div>
	<!-- end s-content -->
	<!-- footer
        ================================================== -->
</div>
<!-- end s-wrap -->
<!-- Java Script
    ================================================== -->\
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/js/main.js');?>"></script>
</body>

</html>

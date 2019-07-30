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
			<a class="site-logo" href="index.html"><h5 style="color: white">XPRESO</h5></a>
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
		<li class="current">
			<a href="welcome" title=""><i class="fas fa-home"></i> Home</a>
        </li>
        <li>
			<a href="about" title=""><i class="fas fa-users"></i> About Us</a>
		</li>
		<li>
			<a href="events" title=""><i class="far fa-calendar-check"></i> Events</a>
		</li>
		<li>
			<a href="information" title=""><i class="fas fa-info-circle"></i> Information</a>
        </li>
        <li>
            <a href="registration"><i class="fas fa-user-plus"></i> Registration</a>
        </li>
        <li>
            <a href="schedule"><i class="far fa-calendar-alt"></i> Schedule</a>
        </li>
        <li>
            <a href="sponsor"><i class="fas fa-user-tie"></i> Sponsor & Media Partner</a>
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
	</ul>
	</nav>
	<!-- end header__nav-wrap --></header>
	<!-- end s-header -->
	<div class="s-content text-center">
        <h1>XPRESO</h1>
        <p>Xpresi Edukasi, Seni, dan Olahraga</p>
        <img src="<?= base_url('assets/images/Logo XPRESO12.png');?>" width="50%" alt="">
        <p>“ILLOGICAL THOUGHTS : REVIVE INANIMATE WORLD”</p>
	</div>
	<!-- end s-content -->
	<!-- footer
        ================================================== -->
</div>
<!-- end s-wrap -->
<!-- Java Script
	================================================== -->
	<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "085217155609", // WhatsApp number
            call_to_action: "Pesan", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/js/main.js');?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
</body>

</html>

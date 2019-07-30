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
		<li class="current">
			<a href="sponsor"><i class="fas fa-user-tie"></i> Sponsor & Media Partner</a>
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
        <div class="s-content text-center">
			<h1>Sponsor & Media Partner</h1>
			<div class="sponsor">
				<a href="https://garudatech.id/"><img src="<?= base_url('assets/images/GTECH CONCEPT1.png')?>" width="30%"></a>
			</div>
        </div> <!-- end s-content -->

    </div> <!-- end s-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

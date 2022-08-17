<?php
	$model = new App\Models\AutoloadModel();
	$currentDay = date('Y-m-d H:i:s');
	$currentDayStart = $currentDay.' 00:00:00';
	$currentDayEnd = $currentDay.' 23:59:59';

	$panel_top = get_panel([
		'locate' => 'home',
		'language' => $language
	]);
	if(isset($panel_top) && is_array($panel_top) && count($panel_top)){
	    foreach ($panel_top as $key => $value) {
			$panel[$value['keyword']] = $value;
		}
	}

	// $promotion  = $this->Autoload_Model->_get_where([
	// 	'select' => 'title, album, description',
	// 	'table' => 'promotion',
	// 	'where' => [
	// 		'publish' => 1,
	// 	],
	// ]);

	// if(!isset($promotion) || is_array($promotion) == false || count($promotion) == 0){ 
	// 	$promotion  = $this->Autoload_Model->_get_where([
	// 		'select' => 'title, album, description',
	// 		'table' => 'promotion',
	// 		'where' => [
	// 			'start_date <=' => $currentDay,
	// 			'end_date >=' => $currentDay,
	// 		],
	// 	]);
 //    }

?>

<header class="header navbar-fixed-top uk-visible-large">
    <div class="uk-container uk-container-center">
		<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky" id="navbar">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo navbar-brand mr-5" href="index.html">
                    <img src="resources/img/logo.png" alt="" class="img-fluid logo-light"> 
                    <img src="resources/img/logo-dark.png" alt="" class="img-fluid logo-dark">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#price" class="nav-link">Price</a>
                        </li>
                        <li class="nav-item">
                            <a href="#team" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Client's</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <span class="navbar-text align-items-center mr-3">
                        <i class="pe-7s-map-marker"></i> 2005 Stokes Isle Apt, USA.
                    </span>
                    <button class="btn btn-outline-white navbar-btn">Purchase Rivani</button>
                </div>
            </div>
        </nav>
    </div>
</header>
<header class="mobile-header uk-hidden-large">
	<section class="topbar">
		<p>Welcome to visit Website</p>
	</section>
	<section class="upper">
		<a class="moblie-menu-btn skin-1" href="#offcanvas" class="offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
			<span>Menu</span>
		</a>
		<div class="header-logo"><a class="img-scaledown image" href="http://deadline2.ps/home.php" title=""><img src="resources/img/logo.png" alt=""></a></div>
	</section><!-- .upper -->
</header>
<div id="offcanvas" class="uk-offcanvas offcanvas"><!-- MENU -->
	<div class="uk-offcanvas-bar">
		<form class="uk-search" data-uk-search="{}">
		    <input class="uk-search-field" type="search" placeholder="Tìm kiếm...">
        </form>
		<ul class="l1 uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
			<li class="l1 uk-active"><a href="http://deadline2.ps/home.php" title="" class="l1">HOME</a></li>
			<li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">ABOUT</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
					<li class="l2">
						<a href="" title="" class="l2"></a>
						<ul class="l3 uk-nav-sub">
							<li class="l3"><a href="#" title="" class="l3"></a></li>
						</ul>
					</li>
					<li class="l2">
						<a href="#" title="" class="l2"></a>
						<ul class="l3 uk-nav-sub">
							<li class="l3"><a href="#" title="" class="l3"></a></li>
						</ul>
					</li>
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
			<li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">CHEF</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
			<li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">MENUS</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
			<li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">GALLERY</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
            <li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">Reservation</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
            <li class="l1 uk-parent uk-position-relative">
				<a href="#" title="" class="dropicon"></a>
				<a href="" title="" class="l1">CONTACT</a>
				<!-- <ul class="l2 uk-nav-sub">
					<li class="l2"><a href="#" title="" class="l2"></a></li>
				</ul> -->
			</li>
		</ul>
	</div>
</div><!-- #offcanvas -->
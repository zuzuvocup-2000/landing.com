<?php
	$model = new App\Models\AutoloadModel();
	$currentDay = date('Y-m-d H:i:s');
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
<?php $main_nav = get_menu(array('keyword' => 'main-menu','language' => 'vi', 'output' => 'array')); ?>

<header class="header navbar-fixed-top ">
    <div class="uk-container uk-container-center">
		<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky" id="navbar">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo navbar-brand mr-5" href="index.html">
                    <img src="<?php echo $general['homepage_logo2'] ?>" alt="" class="img-fluid logo-light"> 
                    <img src="<?php echo $general['homepage_logo'] ?>" alt="" class="img-fluid logo-dark">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto navbar-center" id="mySidenav">
                    	<?php if(isset($main_nav['data']) && is_array($main_nav['data']) && count($main_nav['data'])){
                    		foreach ($main_nav['data'] as $key => $value) {
            		 	?>
	                        <li class="nav-item <?php echo $key == 0 ? 'active' : '' ?>">
	                            <a href="<?php echo $value['canonical'] ?>" class="nav-link"><?php echo $value['title'] ?></a>
	                        </li>
	                    <?php }} ?>
                    </ul>
                    <!-- <span class="navbar-text align-items-center mr-3">
                        <i class="pe-7s-map-marker"></i> <?php echo $general['contact_address'] ?>
                    </span> -->
                    <button class="btn btn-outline-white navbar-btn btn-open-modal-login" data-uk-modal="{target:'#login-modal'}">Login/Register</button>
                </div>
            </div>
        </nav>
    </div>
</header>

<?php echo view('frontend/homepage/common/modal_login') ?>
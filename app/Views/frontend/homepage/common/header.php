<?php
	$model = new App\Models\AutoloadModel();
	$currentDay = date('Y-m-d H:i:s');
	$promotion  = $model->_get_where([
		'select' => 'title, image',
		'table' => 'promotion',
		'where' => [
			'publish' => 1,
			'deleted_at' => 0,
			'login' => 1,
		],
	]);
	prE($promotion);
	$cookie  = [];
    if(isset($_COOKIE[AUTH.'member'])) $cookie = json_decode($_COOKIE[AUTH.'member'],TRUE);

?>
<?php $main_nav = get_menu(array('keyword' => 'main-menu','language' => 'vi', 'output' => 'array')); ?>

<header class="header navbar-fixed-top ">
    <div class="uk-container uk-container-center">
		<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky" id="navbar">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo navbar-brand mr-5" href="">
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
                    <?php if(!isset($cookie) || !is_array($cookie) || count($cookie) == 0){ ?>
	                    <button class="btn btn-outline-white navbar-btn btn-open-modal-login" data-uk-modal="{target:'#login-modal'}">Login/Register</button>
	                <?php }else{ ?>
	                	<div class="login-member-profile">
	                		<svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.0003 7C20.1343 7 17.0003 10.134 17.0003 14C17.0003 17.866 20.1343 21 24.0003 21C27.8663 21 31.0003 17.866 31.0003 14C31.0003 10.134 27.8663 7 24.0003 7ZM13.0003 14C13.0003 7.92487 17.9252 3 24.0003 3C30.0755 3 35.0003 7.92487 35.0003 14C35.0003 20.0751 30.0755 25 24.0003 25C17.9252 25 13.0003 20.0751 13.0003 14ZM24.0003 33C18.0615 33 13.0493 36.9841 11.4972 42.4262C11.3457 42.9573 10.8217 43.3088 10.2804 43.1989L8.32038 42.8011C7.77914 42.6912 7.4266 42.1618 7.5683 41.628C9.49821 34.358 16.1215 29 24.0003 29C31.8792 29 38.5025 34.358 40.4324 41.628C40.5741 42.1618 40.2215 42.6912 39.6803 42.8011L37.7203 43.1989C37.179 43.3088 36.6549 42.9573 36.5035 42.4262C34.9514 36.9841 29.9391 33 24.0003 33Z"></path></svg>
	                		<ul class="list-action-member">
	                			<svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 8" width="1em" height="1em" verticalPropKey="top" class="tamgiac" style="right: 10px;"><path d="M0 8c7 0 10-8 12-8s5 8 12 8z"></path></svg>
	                			<li>
	                				<a href="/thong-tin-chi-tiet">
		                				<svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.0003 7C20.1343 7 17.0003 10.134 17.0003 14C17.0003 17.866 20.1343 21 24.0003 21C27.8663 21 31.0003 17.866 31.0003 14C31.0003 10.134 27.8663 7 24.0003 7ZM13.0003 14C13.0003 7.92487 17.9252 3 24.0003 3C30.0755 3 35.0003 7.92487 35.0003 14C35.0003 20.0751 30.0755 25 24.0003 25C17.9252 25 13.0003 20.0751 13.0003 14ZM24.0003 33C18.0615 33 13.0493 36.9841 11.4972 42.4262C11.3457 42.9573 10.8217 43.3088 10.2804 43.1989L8.32038 42.8011C7.77914 42.6912 7.4266 42.1618 7.5683 41.628C9.49821 34.358 16.1215 29 24.0003 29C31.8792 29 38.5025 34.358 40.4324 41.628C40.5741 42.1618 40.2215 42.6912 39.6803 42.8011L37.7203 43.1989C37.179 43.3088 36.6549 42.9573 36.5035 42.4262C34.9514 36.9841 29.9391 33 24.0003 33Z"></path></svg>
		                				Thông tin cá nhân
	                				</a>
	                			</li>
	                			<li>
	                				<a href="/logout"><svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.1716 26L7 26C6.44771 26 6 25.5523 6 25L6 23C6 22.4477 6.44771 22 7 22L24.1716 22L20.2929 18.1213C19.9024 17.7308 19.9024 17.0976 20.2929 16.7071L21.7071 15.2929C22.0976 14.9024 22.7308 14.9024 23.1213 15.2929L30.4142 22.5858C31.1953 23.3668 31.1953 24.6332 30.4142 25.4142L23.1213 32.7071C22.7308 33.0976 22.0976 33.0976 21.7071 32.7071L20.2929 31.2929C19.9024 30.9024 19.9024 30.2692 20.2929 29.8787L24.1716 26ZM36 43L27 43C26.4477 43 26 42.5523 26 42L26 40C26 39.4477 26.4477 39 27 39L36 39C37.1046 39 38 38.1046 38 37L38 11C38 9.89543 37.1046 9 36 9L27 9C26.4477 9 26 8.55228 26 8L26 6C26 5.44771 26.4477 5 27 5L36 5C39.3137 5 42 7.68629 42 11L42 37C42 40.3137 39.3137 43 36 43Z"></path></svg>
	                				Đăng xuất</a>
	                			</li>
	                		</ul>
	                	</div>
	                <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</header>

<?php
	if(!isset($cookie) || !is_array($cookie) || count($cookie) == 0){
		echo view('frontend/homepage/common/modal_login');
	}
?>
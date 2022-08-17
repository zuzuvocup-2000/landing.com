<?php
	helper('mydatafrontend');
	// $widget['data'] = widget_frontend();
	$system = get_system();
	
 ?>
<!DOCTYPE html>
<html lang="vi-VN">
	<head>
		<!-- CONFIG -->
		<base href="<?php echo BASE_URL ?>" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="index,follow" />
		<meta name="author" content="<?php echo (isset($general['homepage_company'])) ? $general['homepage_company'] : ''; ?>" />
		<meta name="copyright" content="<?php echo (isset($general['homepage_company'])) ? $general['homepage_company'] : ''; ?>" />
		<meta http-equiv="refresh" content="1800" />
		<link rel="icon" href="<?php echo $general['homepage_favicon'] ?>" type="image/png" sizes="30x30">
		<!-- GOOGLE -->
		<title><?php echo isset($meta_title)?htmlspecialchars($meta_title):'';?></title>
		<meta name="description"  content="<?php echo isset($meta_description)?htmlspecialchars($meta_description):'';?>" />
		<?php echo isset($canonical)?'<link rel="canonical" href="'.$canonical.'" />':'';?>
		<meta property="og:locale" content="vi_VN" />
		<!-- for Facebook -->
		<meta property="og:title" content="<?php echo (isset($meta_title) && !empty($meta_title))?htmlspecialchars($meta_title):'';?>" />
		<meta property="og:type" content="<?php echo (isset($og_type) && $og_type != '') ? $og_type : 'article'; ?>" />
		<meta property="og:image" content="<?php echo (isset($meta_image) && !empty($meta_image)) ? $meta_image : base_url(isset($general['homepage_logo']) ? $general['homepage_logo'] : ''); ?>" />
		<?php echo isset($canonical)?'<meta property="og:url" content="'.$canonical.'" />':'';?>
		<meta property="og:description" content="<?php echo (isset($meta_description) && !empty($meta_description))?htmlspecialchars($meta_description):'';?>" />
		<meta property="og:site_name" content="<?php echo (isset($general['homepage_company'])) ? $general['homepage_company'] : ''; ?>" />
		<meta property="fb:admins" content=""/>
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="<?php echo isset($meta_title)?htmlspecialchars($meta_title):'';?>" />
		<meta name="twitter:description" content="<?php echo (isset($meta_description) && !empty($meta_description))?htmlspecialchars($meta_description):'';?>" />
		<meta name="twitter:image" content="<?php echo (isset($meta_image) && !empty($meta_image))?$meta_image:base_url((isset($general['homepage_logo'])) ? $general['homepage_logo']  : '');?>" />


		<?php
			$check_css = false;
			foreach ($system as $key => $value) {
				if(isset($module) && $value['module'] == $module && $value['keyword'] == $module.'_css'){
					$check_css = true;
					echo $system[$value['module'].'_css']['content'];
				}
			}
			if($check_css == false){
				echo $system['normal_css']['content'];
			}

		?>

		<?php /*echo view('frontend/homepage/common/style', $widget)*/ ?>
		<?php echo $system['general_css']['content'] ?>
		<?php echo $system['general_script_top']['content'] ?>
		<script type="text/javascript">
	        var BASE_URL = '<?php echo BASE_URL; ?>';
	        var SUFFIX = '<?php echo HTSUFFIX; ?>';
	    </script>
		<?php echo $general['analytic_google_analytic'] ?>
		<?php echo $general['facebook_facebook_pixel'] ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<?php echo view('frontend/homepage/common/head') ?>
	</head>
	<body class="canhcam homepage ">
		<?php echo view('frontend/homepage/common/schema') ?>
		<?php echo view('frontend/homepage/common/header') ?>
		<div class="page-wrapper">
			<main class="main">
				<?php echo view((isset($template)) ? $template : '') ?>
			</main>
		</div>
		<?php echo view('frontend/homepage/common/footer') ?>
		<?php echo view('frontend/homepage/common/offcanvas') ?>
		<?php echo view('backend/dashboard/common/notification') ?>
		<!-- Tao Widget -->
		<?php
			// foreach ($widget['data'] as $key => $value) {
			// 	echo  str_replace("[phone]", isset($general['contact_phone']) ? $general['contact_phone'] : '', $value['html']);
			// 	echo '<script>'.$value['script'].'</script>';
			// }
		?>

		<?php
			$check_script = false;
			foreach ($system as $key => $value) {
				if(isset($module) && $value['module'] == $module && $value['keyword'] == $module.'_script'){
					$check_script = true;
					echo $system[$value['module'].'_script']['content'];
				}
			}
			if($check_script == false){
				echo $system['normal_script']['content'];
			}
			if(isset($module) && $module == 'member'){
	            echo ' <script src="public/frontend/resources/login.js"></script>';
	        }
		?>
		<?php echo $system['general_script_bottom']['content'] ?>
		<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
	
	<div class="hotline-fixed">
		<a href="tel:  <?php echo $general['contact_hotline'] ?>" title="Hotline">
			<span class="label">Phone: </span>
			<span class="value"> <?php echo $general['contact_hotline'] ?></span>

			<div class="call-btn">
				<div class="zoomIn"></div>
				<div class="pulse"></div>
				<div class="tada">
					<span class="icon"></span>
				</div>
			</div>
		</a>
	</div>

<style>
	/* ######################## Mobile ########################  */
	.hotline-fixed {
		position: fixed;
	    left: 30px;
	    bottom: 30px;
	    background: rgba(213, 213, 213, .5);
	    border: 1px solid #d5d5d5;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	    -ms-border-radius: 3px;
	    -o-border-radius: 3px;
	    border-radius: 3px;
	    z-index: 99999;
	}
	.hotline-fixed a {
		position: relative;
	    display: block;
	    padding: 10px 20px 10px 60px;
	    font-size: 18px;
	    line-height: 20px;
	    font-weight: bold;
	    color: #ff0000;
	    -webkit-background-size: 30px;
	    -moz-background-size: 30px;
	    -ms-background-size: 30px;
	    -o-background-size: 30px;
	    background-size: 30px;
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    -ms-border-radius: 4px;
	    -o-border-radius: 4px;
	    border-radius: 4px;
	}
	@media (min-width: 960px) {
		.hotline-fixed {
			left: 50px;
			bottom: 50px;
		}
	}
	@media (max-width: 959px) {
		.hotline-fixed a{
			border-color: transparent;
			background: transparent;
			padding: 0;
		}
		.hotline-fixed a> span{
			display: none;
		}

		.hotline-fixed {
			left: 50px;
			bottom: 115px;
		}
	}


	.call-btn {
	    position: absolute;
	    margin: 0;
	    padding: 0;
	   	left: 0px;
	   	top: 50%;
	   	left: -40px;
	   	-webkit-transform: translate(0, -50%);
	   	-moz-transform: translate(0, -50%);
	   	-ms-transform: translate(0, -50%);
	   	-o-transform: translate(0, -50%);
	   	transform: translate(0, -50%);
	    background: #fff;
	    background-color: transparent;
	    cursor: pointer;
	    font-size: 0;
	    width: 110px;
	    height: 110px;
	    z-index: 1000;
	}

	.call-btn .tada {
	    background: #e4405f;
	    border-radius: 100px;
	    width: 40px;
	    height: 40px;
	    position: absolute;
	    left: 50%;
	    top: 50%;
	    margin-top: -20px;
	    margin-left: -20px;
	    animation-name: tada;
	    animation-duration: 0.5s;
	    animation-iteration-count: infinite;
	    animation-direction: alternate;
	}
	.call-btn:hover .tada {background: #ff0000;}

	.call-btn .tada .icon:before {
	    content: "\f095";
	    font-size: 25px;
	    font-family: FontAwesome;
	    text-decoration: none;
	    color: #fff;
	    margin-left: 10px;
	    position: absolute;
	    top: 50%;
	    margin-top: -10px;
	}


	@keyframes tada {
	    from {
	        transform: rotate(-20deg);
	    }
	    to {
	        transform: rotate(20deg);
	    }
	}

	.call-btn .pulse {
	    width: 60px;
	    height: 60px;
	    background: #e4405f38;
	    border-radius: 100px;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-top: -30px;
	    margin-left: -30px;
	    animation-name: pulse;
	    animation-duration: 0.5s;
	    animation-iteration-count: infinite;
	    animation-direction: alternate;
	    animation-timing-function: ease-in-out;
	}
	.call-btn:hover .pulse {background: rgba(255, 0, 0, .5);}

	@keyframes pulse {
	    from {
	        width: 55px;
	        height: 55px;
	        margin-top: -27.5px;
	        margin-left: -27.5px;
	    }
	    to {
	        width: 60px;
	        height: 60px;
	        margin-top: -30px;
	        margin-left: -30px;
	    }
	}
	.call-btn .zoomIn {
	    width: 80px;
	    height: 80px;
	    border: 2px solid #e4405f;
	    border-radius: 100px;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-top: -40px;
	    margin-left: -40px;
	    animation-name: zoomIn;
	    animation-duration: 1s;
	    animation-iteration-count: infinite;
	    animation-timing-function: ease-out;
	}
	.call-btn:hover .zoomIn {border: 2px solid #ff0000;}

	@keyframes zoomIn {
	    from {
	        width: 40px;
	        height: 40px;
	        margin-top: -20px;
	        margin-left: -20px;
	    }
	    to {
	        width: 80px;
	        height: 80px;
	        margin-top: -40px;
	        margin-left: -40px;
	    }
	}

	@media screen and (max-width: 549px) {
	    .call-btn {
	        width: 80px;
	        height: 80px;
	    }
	    /*.call-btn .pulse {left: -30px;}*/
	}
	
</style>


	<a id="backtop" href="" title="Về đầu trang" style="bottom: 90px;"><i class="fa fa-angle-double-up"></i></a>

	<style>
		
		#backtop {
		    position: fixed;
		    right: 60px;
		    clip: rect(auto, auto, auto, auto);
		    display: none;
		    width: 50px;
		    height: 50px;
		    background: #e4405f;
		    font-size: 20px;
		    color: #fff;
		    border-radius: 0;
		    text-align: center;
		    line-height: 50px;
		    z-index: 9999;
		    font-family: 'Roboto-Bold';

		    -webkit-box-shadow: 0px 0px 2px -0.5px #c6c6c6c6;
		    -moz-box-shadow: 0px 0px 2px -0.5px #c6c6c6c6;
		    -ms-box-shadow: 0px 0px 2px -0.5px #c6c6c6c6;
		    -o-box-shadow: 0px 0px 2px -0.5px #c6c6c6c6;
		    box-shadow: 0px 0px 2px -0.5px #c6c6c6c6;

		}

		#backtop.active {
			display: block;
		}

		@media (max-width: 959px) {
		    #backtop {
		        right: 10px;
		    }
		}

	</style>

	<script>
		
		$(window).scroll(function() {
			if($(this).scrollTop() > 50){
				$('#backtop').addClass('active');
				// $('#backtop').stop().animate({ bottom: '30px' }, 0);
			}else{
				$('#backtop').removeClass('active');
				// $('#backtop').stop().animate({ bottom: '-60px' }, 0);
			} 
		});
		$(document).ready(function() {
			$('#backtop').click(function(event) {
				event.preventDefault();
				$('.uk-slidenav-next').trigger('click');
				$('html, body').animate({scrollTop: 0},500);
			});

			$(document).on('click', '.uk-slidenav-next', function(event) {
				vh_init();
			});	
		});

	</script>
		<!-- <div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=2980822832233231&autoLogAppEvents=1" nonce="C8FyezAO"></script> -->
		<style>
		.list-social.order-1>li> .social.skype >a>i {
		    background: #5ea7ff;
		}

		.list-social.order-1>li> .social.tele >a>i {
		    background: #3eb2ed;
		}
		<?php if(isset($general['homepage_color']) && !empty($general['homepage_color'])){ ?>
			.moblie-menu-btn>*, .moblie-menu-btn>:after, .moblie-menu-btn>:before,
			#backtop,
			.call-btn .tada,
			.ft_open .panel-head:before,
			.hd-cart .quantity,
			.mobile-hp-topprd .panel-head .nav-tabs >li.uk-active>*{
				background: <?php echo $general['homepage_color'] ?>;
			}

			.mobile-hp-topprd .panel-head .nav-tabs >li>*{
				color: <?php echo $general['homepage_color'] ?>;
			}

			.call-btn .pulse{
				background: <?php echo $general['homepage_color'] ?>38;
			}

			.call-btn .zoomIn {
				border: 2px solid <?php echo $general['homepage_color'] ?>;
			}
		<?php } ?>
	</style>
	</body>
</html>

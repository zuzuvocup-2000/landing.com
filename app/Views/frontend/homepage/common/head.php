<?php if(isset($general['homepage_color']) && !empty($general['homepage_color'])){ ?>

    <style>
        .custom-nav .container-fluid .navbar-nav li a{
            color: #fff;
        }
        .banner-headline span,
        .caption p,
        .social-links a:hover,
        .btn-outline-white,
        .custom-nav .container-fluid .navbar-text,
        .custom-nav .container-fluid .navbar-nav li:hover a,
        .custom-nav .container-fluid .navbar-nav li.active a {
            color: <?php echo $general['homepage_color'] ?> !important;
        }

        .btn-outline-white{
            border-color: <?php echo $general['homepage_color'] ?> !important;
        }
    </style>
<?php } ?>
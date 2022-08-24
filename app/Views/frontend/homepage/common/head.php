<?php if(isset($general['homepage_color']) && !empty($general['homepage_color'])){ ?>

    <style>
        .list-action-member li a:hover,
        .btn-login button,
        .custom-nav .container-fluid .navbar-nav li a{
            color: #fff;
        }
         .custom-nav.stickyadd .login-member-profile,
         .custom-nav.stickyadd .container-fluid .navbar-nav li a{
            color: #000;
         }

          .custom-nav.stickyadd .login-member-profile{
            border: 1px solid #000;
         }
        .mdi-menu,
        .ser_box .ser_icon i,
        /*.banner-headline span,*/
        /*.caption p,*/
        .social-links a:hover,
        .btn-outline-white,
        .text-custom,
        .blog_bor_boxes .blog_content .blog_user .media-body h5 a,
        .custom-nav .container-fluid .navbar-text,
        .custom-nav .container-fluid .navbar-nav li:hover a,#footer .ft-information p:before,
        .custom-nav .container-fluid .navbar-nav li.active a {
            color: <?php echo $general['homepage_color'] ?> !important;
        }

        .ser_box .bgser_icon i{
            color: <?php echo $general['homepage_color'] ?> !important;
        }
        .team_boxes_border .team_content .follow_team_social li a,
        .btn-outline-white{
            border-color: <?php echo $general['homepage_color'] ?>38 !important;
        }
        .list-action-member li a:hover,
        #footer .ft-panel .panel-head:before,
        .blog_bor_boxes .blog_content .blog_text .read_more .blog_border,
        .bg-custom,
        .team_boxes_border .team_content .follow_team_social li a,
        #footer .btn.order-2,
        .back_top,
        .btn-login button,
        .work_box .work_caption .work_cap_line{
            background-color: <?php echo $general['homepage_color'] ?> !important;
        }

        .btn-login button.disabled{
            background-color: <?php echo $general['homepage_color'] ?>60 !important;
            cursor: disabled;
        }
    </style>
<?php } ?>
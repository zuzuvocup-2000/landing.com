<?php $main_slide = get_slide(['keyword' => 'main-slide' , 'language' => $language ]); ?>
<?php $about_us = get_slide(['keyword' => 'about-us' , 'language' => $language ]); ?>
<?php $services = get_slide(['keyword' => 'service' , 'language' => $language ]); ?>
<?php $portfolio = get_slide(['keyword' => 'portfolio' , 'language' => $language ]); ?>
<?php $team = get_slide(['keyword' => 'team' , 'language' => $language ]); ?>
<?php $client = get_slide(['keyword' => 'client' , 'language' => $language ]); ?>
<?php $partner = get_slide(['keyword' => 'partner' , 'language' => $language ]); ?>

<section id="homepage">
    <!--Start Home-->
    <?php if(isset($main_slide) && is_array($main_slide) && count($main_slide)){ ?>
        <section class="home-bg" id="home" style="background-image: url(<?php echo $main_slide[0]['image'] ?>);">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center caption">
                        <h1 class="banner-headline clip no-margin">
                            <span class="blc"><?php echo $main_slide[0]['title'] ?> </span>
                            <span class="banner-words-wrapper" style="width: 322px;">
                                <b class="font-weight-800 is-hidden"><?php echo $main_slide[0]['alt'] ?></b>
                                <b class="font-weight-800 is-hidden"><?php echo $main_slide[0]['content'] ?></b>
                                <b class="font-weight-800 is-visible"><?php echo $main_slide[0]['canonical'] ?></b>
                            </span>
                        </h1>
                        <p class="mb30"><?php echo $main_slide[0]['description'] ?></p>
                        <div class="social-links xs-margin-20px-top">
                            <?php if(!empty($general['social_facebook'])){ ?>
                                <a class=" text-light-gray" href="<?php echo $general['social_facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <?php } ?>
                            <?php if(!empty($general['social_twitter'])){ ?>
                                <a class=" text-light-gray" href="<?php echo $general['social_twitter'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <?php } ?>
                            <?php if(!empty($general['social_google'])){ ?>
                                <a class=" text-light-gray" href="<?php echo $general['social_google'] ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <?php } ?>
                            <?php if(!empty($general['social_youtube'])){ ?>
                                <a class=" text-light-gray" href="<?php echo $general['social_youtube'] ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <?php } ?>
                            <?php if(!empty($general['social_link'])){ ?>
                                <a class=" text-light-gray" href="<?php echo $general['social_link'] ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="wave-area">
                <div class="wave"></div>
                <div class="wave" style="color: #f0f0f2;"></div>
            </div> -->
        </section>
    <?php } ?>
    <!--End Home-->
    <!-- Start About -->
    <?php if(isset($about_us) && is_array($about_us) && count($about_us)){ ?>
        <section class="section bg-light" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section_title">
                            <div class="section_title_border">
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                                <p class="sec_small_title mb-0 text-custom d-inline-block"><?php echo $about_us[0]['cat_title'] ?></p>
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                            </div>
                            <h3 class="font-weight-bold mt-3 mb-0"><?php echo $about_us[0]['title'] ?></h3>
                            <p class="text-muted sec_subtitle mx-auto mt-3"><?php echo $about_us[0]['cat_description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <h3 class="about_title"><?php echo $about_us[0]['description'] ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <p class="about_sec_dec text-muted">
                                <?php echo $about_us[0]['content'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About-->
        <!-- Start About Images -->
        <section class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about_img mb-5 mx-auto">
                            <img src="<?php echo $about_us[0]['image'] ?>" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End About Images -->
    <!-- Start Services -->
    <?php if(isset($services) && is_array($services ) && count($services )){ ?>
        <section id="services">
            <div class="container">
                <div class="row">
                    <?php foreach ($services  as $key => $value) { ?>
                        <div class="col-lg-4">
                            <div class="ser_box mt-3">
                                <div class="ser_icon">
                                    <?php if($key % 3 == 0){ ?>
                                    <i class="mdi mdi-apple-keyboard-command"></i>
                                    <?php }else if($key % 3 == 1){ ?>
                                    <i class="mdi mdi-asterisk"></i>
                                    <?php }else{ ?>
                                    <i class="mdi mdi-biohazard"></i>
                                    <?php } ?>
                                </div>
                                <div class="ser_content mt-3">
                                    <h5 class="mb-0"><?php echo $value['title'] ?></h5>
                                    <p class="text-muted mt-3"><?php echo $value['description'] ?></p>
                                </div>
                                <div class="bgser_icon">
                                    <?php if($key % 3 == 0){ ?>
                                    <i class="mdi mdi-apple-keyboard-command mdi-spin"></i>
                                    <?php }else if($key % 3 == 1){ ?>
                                    <i class="mdi mdi-asterisk mdi-spin"></i>
                                    <?php }else{ ?>
                                    <i class="mdi mdi-biohazard mdi-spin"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Services -->
        <!-- Start CTA -->
        <section class="ser_title_top bg-light section">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="text-center cta_fir mt-3">
                            <h2><?php echo $services[0]['cat_title'] ?></h2>
                            <p class="text-muted mt-3"><?php echo $services[0]['cat_description'] ?></p>
                            <!-- <div class="mt-4">
                                <a href="#" class="btn btn-custom">Learn More</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End CTA -->
    <!-- Start Work -->
    <?php if(isset($portfolio) && is_array($portfolio ) && count($portfolio )){ ?>
        <section class="section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section_title">
                            <div class="section_title_border">
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                                <p class="sec_small_title mb-0 text-custom d-inline-block">Our Work</p>
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                            </div>
                            <h3 class="font-weight-bold mt-3 mb-0"><?php echo $portfolio[0]['cat_title'] ?></h3>
                            <p class="text-muted sec_subtitle mx-auto mt-3"><?php echo $portfolio[0]['cat_description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <?php foreach ($portfolio as $key => $value) { 
                            if($key % 2 == 0){
                        ?>
                            <div class="work_box mt-3">
                                <div class="work_img">
                                    <a href="<?php echo $value['canonical'] ?>" class="img-zoom">
                                        <img src="<?php echo $value['image'] ?>" alt="work" class="img-fluid mx-auto d-block rounded">
                                    </a>
                                </div>
                                <div class="work_caption ml-3 mt-3">
                                    <p class="text-muted mb-0"><div class="work_cap_line"></div><?php echo $value['description'] ?></p>
                                    <a href="<?php echo $value['canonical'] ?>" class="text-capitalize d-block ml-4"><?php echo $value['title'] ?></a>
                                    <div class="btn-more"><a href="<?php echo $value['canonical'] ?>" title="">Read More</a></div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                    <div class="col-lg-6">
                        <?php foreach ($portfolio as $key => $value) { 
                            if($key % 2 == 1){
                        ?>
                            <div class="work_box <?php echo $key == 1 ? 'work_top_mar' : 'mt-3' ?>">
                                <div class="work_img">
                                    <a href="<?php echo $value['canonical'] ?>" class="img-zoom">
                                        <img src="<?php echo $value['image'] ?>" alt="work" class="img-fluid mx-auto d-block rounded">
                                    </a>
                                </div>
                                <div class="work_caption ml-3 mt-3">
                                    <p class="text-muted mb-0"><div class="work_cap_line"></div><?php echo $value['description'] ?></p>
                                    <a href="<?php echo $value['canonical'] ?>" class="text-capitalize d-block ml-4"><?php echo $value['title'] ?></a>
                                    <div class="btn-more"><a href="<?php echo $value['canonical'] ?>" title="">Read More</a></div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- Start Team -->
    <?php if(isset($portfolio) && is_array($portfolio ) && count($portfolio )){ ?>
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section_title">
                            <div class="section_title_border">
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                                <p class="sec_small_title mb-0 text-custom d-inline-block">Our Team</p>
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                            </div>
                            <h3 class="font-weight-bold mt-3 mb-0"><?php echo $team[0]['cat_title'] ?></h3>
                            <p class="text-muted sec_subtitle mx-auto mt-3"><?php echo $team[0]['cat_description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php foreach ($team as $value) { ?>
                        <div class="col-lg-3">
                            <div class="team_boxes_border mt-3">
                                <div class="team_images">
                                    <img src="<?php echo $value['image'] ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                </div>
                                <div class="team_content ml-3 mr-3 text-center">
                                    <h5 class="font-weight-bold mb-1"><?php echo $value['title'] ?></h5>
                                    <p class="mb-0"><?php echo $value['description'] ?></p>
                                    <div class="mt-3">
                                        <ul class="list-inline follow_team_social mb-0">
                                            <li class="list-inline-item"><a href="<?php echo $value['alt'] ?>"><i class="mdi mdi-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="mailto:<?php echo $value['canonical'] ?>"><i class="mdi mdi-google"></i></a></li>
                                            <li class="list-inline-item"><a href="<?php echo $value['content'] ?>"><i class="mdi mdi-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Team -->
    <!-- Start Client -->
    <?php if(isset($client) && is_array($client ) && count($client )){ ?>
        <section id="client">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col-lg-5 offset-lg-7 client_img_bg">
                        &nbsp;
                    </div>
                    <div class="col-lg-7">
                        <div class="client_bg_pad">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center section_title">
                                        <div class="section_title_border">
                                            <div class="f-border"></div>
                                            <div class="s-border"></div>
                                            <div class="f-border"></div>
                                            <p class="sec_small_title mb-0 text-custom d-inline-block">Client Feedback</p>
                                            <div class="f-border"></div>
                                            <div class="s-border"></div>
                                            <div class="f-border"></div>
                                        </div>
                                        <h3 class="font-weight-bold mt-3 mb-0"><?php echo $client[0]['cat_title'] ?></h3>
                                        <p class="text-muted sec_subtitle mx-auto mt-3"><?php echo $client[0]['cat_description'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <?php
                                    $owlInit = [
                                        'nav' => false,
                                        'dots' => true,
                                        'loop' => true,
                                        'margin' => 10,
                                        'items' => 1,
                                        'autoplay' => true
                                    ];
                                ?>
                                <div class="col-lg-8">
                                    <div class="owl-slide">
                                        <div class="owl-carousel" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                            <?php foreach ($client as $key => $value) {
                                                if($key == 0) continue;
                                            ?>
                                                <div class="text-center testi_boxes text-white text  bg-custom  mt-3">
                                                    <div class="testi_icon_center">
                                                        <i class="pe-7s-smile"></i>
                                                    </div>
                                                    <p class="client_review text-white text-center"><?php echo $value['description'] ?></p>
                                                    <p class="client_name text-center mb-0 mt-3">- <?php echo $value['title'] ?></p>
                                                    <p class="mb-0 client_user"><?php echo $value['alt'] ?></p>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Client -->
    <!-- Start Logo -->
    <?php  if(isset($partner) && is_array($partner ) && count($partner )){  ?>
        <section class="img_logo section">
            <div class="container bg-light rounded">
                <div class="row">
                    <?php foreach ($partner as $value) { ?>
                        <div class="col-lg-3">
                            <div class="logo_img">
                                <img src="<?php echo $value['image'] ?>" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Logo -->
    <!-- Start Blog -->
    <?php if(isset($articleCatalogueList) && is_array($articleCatalogueList) &&count($articleCatalogueList)){ ?>
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section_title">
                            <div class="section_title_border">
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                                <p class="sec_small_title mb-0 text-custom d-inline-block">Our News</p>
                                <div class="f-border"></div>
                                <div class="s-border"></div>
                                <div class="f-border"></div>
                            </div>
                            <h3 class="font-weight-bold mt-3 mb-0"><?php echo $articleCatalogueList['title'] ?></h3>
                            <p class="text-muted sec_subtitle mx-auto mt-3"><?php echo strip_tags(base64_decode($articleCatalogueList['description'])) ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php foreach ($articleCatalogueList['data'] as $value) { ?>
                        <div class="col-lg-4">
                            <div class="blog_bor_boxes mt-3 rounded p-2">
                                <div class="blog_images">
                                    <img src="<?php echo $value['image'] ?>" alt="blog" class="img-fluid rounded mx-auto d-block">
                                </div>
                                <div class="blog_content bg-white rounded p-3 mt-2">
                                    <div class="media blog_user">
                                        <img src="<?php echo $value['image_user'] ?>" alt="" class="img-fluid mr-3 d-block rounded-circle">
                                        <div class="media-body pt-2 align-middle">
                                            <h5 class="mb-1"><a href="#"><?php echo $value['fullname'] ?></a></h5>
                                            <p><?php echo date('d M, Y', strtotime($value['created_at'])) ?></p>
                                        </div>
                                    </div>
                                    <div class="blog_text mt-3">
                                        <h5><?php echo $value['title'] ?></h5>
                                        <p class="text-muted mt-3 mb-0"><?php echo strip_tags(base64_decode($value['description'])) ?></p>
                                        <div class="read_more mt-3">
                                            <div class="blog_border"></div><a href="<?php echo $value['canonical'].HTSUFFIX ?>" class="text-dark text-uppercase"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- End Blog -->
</section>
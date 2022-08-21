<?php $main_nav = get_menu(array('keyword' => 'menu-footer','language' => 'vi', 'output' => 'array')); ?>
<?php
    $panel = get_panel([
        'locate' => 'footer',
        'language' => $language
    ]);
    if(isset($panel) && is_array($panel) && count($panel)){
        foreach ($panel as $key => $value) {
            $panel_footer[$value['keyword']] = $value;
        }
    }
?>
<footer id="footer">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-medium" data-uk-grid-match="{target: '.ht2109_grid_match'}">
            <div class="uk-width-large-1-3">
                <div class="ft_logo mb20">
                    <a class="image img-cover" href="" title=""><img src="<?php echo $general['homepage_logo_ft'] ?>" alt="<?php echo $general['homepage_logo_ft'] ?>" /></a>
                </div>
                <div class="mb20">
                    <p><?php echo $general['homepage_ft'] ?></p>
                </div>
                <div class="ft-information">
                    <p class="address"><?php echo $general['contact_address'] ?></p>
                    <p class="phone"><a href="tel:<?php echo $general['contact_hotline'] ?>" title="Hotline"><?php echo $general['contact_hotline'] ?></a></p>
                    <p class="email"><a target="_blank" href="mailto:<?php echo $general['contact_email'] ?>" title="Email"><?php echo $general['contact_email'] ?></a></p>
                </div>
            </div>
            <div class="uk-width-large-2-3">
                <div class="uk-grid uk-grid-medium" data-uk-grid-match="{target: '.ht2109_grid_match'}">
                    <?php if(isset($main_nav['data']) && is_array($main_nav['data']) && count($main_nav['data'])){ 
                        foreach ($main_nav['data'] as $value) {
                    ?>
                        <div class="uk-width-large-1-3">
                            <section class="ft-panel">
                                <div class="panel-head">
                                    <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-space-between">
                                        <h4 class="heading-1 text_white"><span class="text_white"><?php echo $value['title'] ?></span></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <?php if(isset($value['children']) && is_array($value['children']) && count($value['children'])){ ?>
                                        <ul class="uk-list uk-clearfix list-link">
                                            <?php foreach ($value['children'] as $valueChild) { ?>
                                                <li>
                                                    <a href="<?php echo $valueChild['canonical'] ?>" title="<?php echo $valueChild['title'] ?>" class="">
                                                        <span><?php echo $valueChild['title'] ?></span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </section>
                        </div>
                    <?php }} ?>
                    <?php if(isset($panel_footer['footer']['data']) && is_array($panel_footer['footer']['data']) && count($panel_footer['footer']['data'])){ ?>
                        <div class="uk-width-large-1-3">
                            <section class="ft-panel">
                                <div class="panel-head">
                                    <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-space-between">
                                        <h4 class="heading-1 text_white"><span class="text_white"><?php echo $panel_footer['footer']['title'] ?></span></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="uk-list uk-clearfix list-art-ft">
                                        <?php foreach ($panel_footer['footer']['data'] as $value) { ?>
                                            <li>
                                                <article class="uk-clearfix article-1">
                                                    <div class="thumb">
                                                        <a href="<?php echo $value['canonical'].HTSUFFIX ?>" class="image img-cover">
                                                            <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['image'] ?>" />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3 class="title"><a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="DIGITAL SIGNAGE" class="line-2"><?php echo $value['title'] ?></a></h3>
                                                        <div class="meta uk-clearfix">
                                                            <span class="post-date"><?php echo date('d/m/Y', strtotime($value['created_at'])) ?></span>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    <?php } ?>
                    <div class="uk-width-large-1-3">
                        <section class="ft-panel ft-mailto">
                            <div class="panel-head">
                                <div class="uk-flex uk-flex-wrap uk-flex-middle uk-flex-space-between">
                                    <h4 class="heading-1 text_white"><span class="text_white">Newsletter</span></h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="" method="" class="form uk-form " id="form-baogia_aside">
                                    <div class="bg-loader"></div>
                                    <div class="error hidden">
                                        <div class="alert alert-danger"></div>
                                    </div>
                                    <!-- /.error -->
                                    <div class="ft_mail_des">
                                        <p>We creative any website for all business</p>
                                    </div>
                                    <div class="form-row mb10">
                                        <label class="mb5" for="">Fullname <span style="color: red;">*</span></label>
                                        <input type="text" name="fullname" value="" placeholder="Fullname" class="uk-width-1-1 input-text input-reset h34 fullname va-fullname-contact" autocomplete="off" />
                                    </div>
                                    <div class="form-row mb10">
                                        <label class="mb5" for="">Phone <span style="color: red;">*</span></label>

                                        <input type="text" name="phone" value="" placeholder="Phone number" class="uk-width-1-1 input-text input-reset h34 phone va-phone-contact" autocomplete="off" />
                                    </div>
                                    <div class="form-row mb10">
                                        <label class="mb5" for="">Email <span style="color: red;">*</span></label>

                                        <input type="text" name="email" value="" placeholder="Email" class="uk-width-1-1 input-text input-reset h34 email va-email-contact" autocomplete="off" />
                                    </div>
                                    <div class="form-row mb10">
                                        <label class="mb5" for="">Content <span style="color: red;">*</span></label>
                                        <textarea name="message" class="uk-width-1-1 form-textarea va-message-contact" placeholder="Content *"></textarea>
                                    </div>

                                    <div class="uk-text-center">
                                        <button type="submit" value="submit" class="btn order-2 submit-form-contact">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-angle-up"> </i> </a>
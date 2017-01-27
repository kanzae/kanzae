<?php
get_header();
?>

<div role="main" class="cf"><section class="">
        <article class="post post-22 page type-page status-publish hentry" id="post-22">
            <div class="post-content">
                <div class="row row-fluid no-padding full-width-row">
                    <div class="wpb_column columns small-12 medium-12">
                        <div class="vc_column-inner  ">
                            <?php get_template_part('template/home/slider'); ?>
                        </div>
                    </div>
                </div>
                <div class="row row-fluid">
                    <div class="wpb_column columns small-12 medium-9">
                        <div class="vc_column-inner  ">
                            <?php get_template_part('template/home/content'); ?>
                        </div>
                    </div>
                    <div class="wpb_column columns small-12 medium-3">
                        <div class="vc_column-inner fixed-me ">
                            <?php get_sidebar('home'); ?>
                        </div>
                    </div>
                </div>

                <div class="row row-fluid">
                    <div class="wpb_column columns small-12 medium-12">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">
                                <aside class="gap cf" style="height:30px;"></aside>
                                <div class="row endcolumn catelement-style4">
                                    <div class="small-12 columns">
                                        <div class="category_container">
                                            <div class="inner">
                                                <?php get_template_part('template/home/content-2'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-fluid">
                    <div class="wpb_column columns small-12 medium-12">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">
                                <?php get_template_part('template/home/content-3'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-fluid full-width-row vc_custom_1430854529027 row-has-fill">
                    <div class="wpb_column columns small-12 medium-6 large-push-4 large-4 medium-push-2 medium-8 small-12">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">
                                <?php get_template_part('template/home/newsletter'); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    </section>
</div><!-- End role["main"] -->
<?php
get_footer();
?>


    <!-- blog section-1 start -->

<?php 
$banner_image = get_field('fnpa_common_banner');

if( $banner_image ){
    $image = $banner_image['url'];
} else {
    $image = get_template_directory_uri() . '/assets/images/page-blog/section-1/bg-img.png';
}
?>


<style type="text/css">
    .blog-section-1 {
        background: url('<?php echo esc_url($image); ?>');
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
    
</style>

    <section class="blog-section-1 wow img-custom-anim-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 brd-style">
                    <div class="col-12 text-center breadcrumb">
                        <!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="actives">Notice</li>
                        </ul> -->
                        <?php echo fnpa_breadcrumb(); ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section-1 end -->
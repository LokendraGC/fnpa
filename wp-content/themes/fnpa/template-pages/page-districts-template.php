<?php 
get_header();
/* Template Name: Districts */
?>

<main>  

    <!-- blog section-1 start -->
    <section class="blog-section-1 wow img-custom-anim-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 brd-style">
                    <div class="col-12 text-center breadcrumb">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="actives">Notice</li>
                        </ul>
                    </div>
                    <h1>Notice</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section-1 end -->

    <!-- notice start -->
        <?php 
    $args = array(
        'post_type' => 'district',
        'post_status' => 'publish',
        'post_per_page' => -1,
    );

    $district_args = get_posts( $args );
    if( $district_args ):
        
     ?>
    <section class="blog section-2 bg-white section-padding bg-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                 <?php
       foreach( $district_args as $post ):
         setup_postdata( $post ); 
         ?>
                <div class="col-lg-6 col-md-6 col-12 d-flex wow img-custom-anim-top">
                    <div class="d-flex mt-4 border-bottom img-style custom-padding">
                       <?php 
                        $post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        if($post_img ):
                            ?>
                        <img src="<?php echo $post_img[0]; ?>" alt="<?php echo $post->post_title; ?>" class="align-self-start">
                    <?php endif; ?>
                        <div class="px-4 notice-style">
                            <a href="<?php echo get_permalink( $post->ID ); ?>" class="fs-2 text-dark fw-bold"><?php echo $post->post_title; ?></a>
                            <p><?php echo get_the_date('F j Y'); ?></p>
                        </div>
                    </div>
                </div>
                <?php
             endforeach;
             wp_reset_postdata();
             ?>
            </div>
        </div>
    </section>
    <!-- notice end -->
<?php endif; ?>

</main>

<?php 
get_footer();
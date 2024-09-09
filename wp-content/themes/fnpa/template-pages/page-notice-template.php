<?php 
get_header();
/* Template Name: Notice */
?>

<main>  

   <?php get_template_part('template-parts/common/banner-section'); 
    ?>

    <!-- notice start -->
        <?php 
    $args = array(
        'post_type' => 'notice',
        'post_status' => 'publish',
        'post_per_page' => -1,
    );

    $post_args = get_posts( $args );
    if( $post_args ):
        
     ?>
    <section class="blog section-2 bg-white section-padding bg-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                 <?php
       foreach( $post_args as $post ):
         setup_postdata( $post ); 
         ?>
                <div class="col-lg-6 col-md-6 col-12 d-flex wow img-custom-anim-top">
                    <div class="d-flex mt-4 border-bottom img-style custom-padding">
                       
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/notification.svg" alt="<?php echo $post->post_title; ?>" class="align-self-start">
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
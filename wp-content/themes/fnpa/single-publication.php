<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fnpa
 */

get_header();
?>

<main>  

 <?php get_template_part('template-parts/common/banner-section'); 
    ?>

    <!-- blog-details section-1 start -->
    <?php if( have_posts() ):the_post(); ?>
        <section class="blog-details-section-1 section-padding border-bottom bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <?php the_content(); ?>

                    </div>
                    <?php 
                    $unique_ID = get_the_ID();
                    $args = array(
                        'post_type' => 'publication',
                        'post_status' => 'publish',
                        'post_per_page' => -1,
                        'post__not_in' => array( $unique_ID )
                    );

                    $notice_args = get_posts( $args );
                    if( $notice_args ):
                        ?>
                        <div class="col-lg-4">
                            <div>
                                <h3 class="fs-1">Other Publication</h3>
                                <?php
                                foreach( $notice_args as $post ):
                                    setup_postdata($post);
                                    ?>
                                    <a href="<?php echo get_permalink( $post->ID ); ?>" class="d-flex align-items-center my-3 card-hover blog-style">
                                        <?php 
                                        

                                        $notice_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                        
                                        if($notice_img ):
                                           ?>
                                           <img src="<?php echo $notice_img[0]; ?>" class="img-fluid me-3" alt="<?php echo $post->post_title; ?>" />
                                       <?php endif; ?>
                                       <div class="d-block">
                                        <p class="fs-4 fw-semibold text-dark"><?php echo $post->post_title; ?></p>
                                        <div class="d-flex">
                                            <p class="text-primary fs-6 mb-0"><?php echo get_the_date('F j, Y'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog-details section-1 end -->

</main>

<?php
get_footer();

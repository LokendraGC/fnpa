<?php 
get_header();
?>

<main>  

<?php get_template_part('template-parts/common/banner-section'); 

$term = get_queried_object();

$taxonomyArgs = array(
    'post_type'         => 'committee',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'tax_query' => array(
        array(
            'taxonomy'  => $term->taxonomy,
            'field'     => 'slug',
            'terms'     => $term->slug,
        ),
    ),
);

$committee_args = get_posts( $taxonomyArgs );

?>

    <section class="team-section-3 section-padding bg-white">
        <div class="container wow img-custom-anim-top">
            <h2 class="wow img-custom-anim-left title-lg ds-2 fw-bold text-black">
                <?php echo $term->name; ?>
            </h2>
            <div class="row mb-lg-0 mb-4 pb-lg-3">
               
               <?php
                foreach( $committee_args as $post ):
                        setup_postdata( $post );

                        $member_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        $designation = get_field('member_designation', $post->ID );
                        $contact = get_field('contact_number', $post->ID );
                        $email_id = get_field('email_id', $post->ID );
                ?>
                <div class="col-lg-3 pt-2 col-6 mb-3">
                    <div class="card-hover card-about text-center border bg-white img-styled" href="#">
                        <?php if( $member_img ){ ?>
                        <img src="<?php echo $member_img[0]; ?>" alt="<?php echo $post->post_title; ?>" />
                    <?php }else{ ?>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="<?php echo $post->post_title; ?>" />
                    <?php } ?>
                        <p class="fw-bold text-black mt-3 mb-2"><?php echo $post->post_title; ?></p>
                        <?php if( $designation ): ?>
                        <p class="text-secondary"><?php echo $designation; ?></p>
                    <?php
                     endif;
                     if( $contact ):
                     ?>
                        <p class="text-secondary">Contact: 9851077264</p>
                    <?php endif;
                        if( $email_id ){
                     ?>
                        <p class="text-secondary"><?php echo $email_id; ?></p>
                    <?php }else{ ?>
                        <p class="text-secondary">info@fnpa.org.np</p>
                    <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- Team section-3 end -->

</main>


<?php 
get_footer();
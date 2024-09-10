<?php get_header(); ?>

<main>  
	<!--Slider home-2 start-->
    <?php if( have_rows('slider_details') ): ?>
       <section class="slider-home-2 wow img-custom-anim-top">
          <!-- Swiper -->
          <div class="swiper slider_home_3 ">
             <div class="swiper-wrapper img-slide">
                <?php
                $count = 1;
                while( have_rows('slider_details') ):the_row();
                    $slider_title = get_sub_field('slider_title');
                    $slider_image = get_sub_field('slider_image');
                    $slider_link = get_sub_field('fnpa_button_url');
                    ?> 
                    <div class="swiper-slide <?php echo $count == 1 ? '' : 'img-slide'; ?>">
                        <?php if( $slider_image ): ?>
                           <div class="bg-home2" data-background="<?php echo $slider_image['url']; ?>">
                           <?php endif; ?>
                           <div class="overlay"></div>
                           <div class="container">
                             <div class="row">
                                <?php if( $slider_title ): ?>
                                    <div class="col-lg-10 z-2 banner-text">
                                       <h2 class="title-lg ds-1 fw-bold text-white">
                                        <?php echo $slider_title; ?>
                                    </h2>
                                    <?php if( $slider_link ): ?>
                                       <div class="d-flex align-items-center gap-2 mobile-button">
                                          <a href="<?php echo $slider_link['url']; ?>" class="btn-gradient"><?php echo $slider_link['title']; ?><i class="bi bi-arrow-right ms-2"></i></a>
                                      </div>
                                  <?php endif; ?>
                              </div>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
          <?php 
          $count++;
      endwhile; 
      ?>

  </div>
  <div class="d-lg-block d-none">
   <div class="swiper-button-prev"></div>
   <div class="swiper-button-next"></div>
</div>
</div>
<!-- Swiper JS -->
</section>
<?php endif; ?>
<!--Slider home-2 end-->

<!-- about start -->
<?php if( $about_content = get_field('about_content') ): ?>
    <section class="about-section-1 bg-white" id="about-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 col-md-12 mb-lg-0 mb-8 wow img-custom-anim-left">
                <div class="pe-lg-5 me-lg-5">
                   <?php echo $about_content; ?>
                   <div class="d-flex align-items-center gap-5" id="read-more-container" style="display: none;">
                      <a href="<?php echo get_permalink(12); ?>" class="btn-gradient fs-5 mt-2" target="_Self">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                      <?php if( has_post_thumbnail() ): ?>
                          <img class="d-md-none d-none d-lg-block" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_bloginfo(); ?>">
                      <?php endif; ?>
                  </div>
              </div>
          </div>
          <?php if( $about_gallery = get_field('about_slider') ): ?>
             <div class="col-lg-4 col-md-12" data-aos="fade-up">
                <div class="box-swiper-padding wow img-custom-anim-top">
                   <div class="swiper slider-5">
                      <div class="swiper-wrapper">
                        <?php
                        $count = 1; 
                        foreach( $about_gallery as $about_image ):
                          ?>
                          <div class="swiper-slide">
                            <div class="<?php echo $count == 1 ? 'position-absolute' : 'position-relative'; ?> d-inline-flex">
                               <img class="img-fluid position-relative <?php echo $count == 3 ? 'z-1':'z-4'; ?> abt-img" src="<?php echo $about_image['url']; ?>" alt="<?php echo get_bloginfo(); ?>" />
                           </div>
                       </div>
                       <?php 
                       $count++;
                   endforeach; 
                   ?>

               </div>
           </div>
       </div>
   </div>
<?php endif; ?>
</div>
</div>
</section>
<?php endif; ?>
<!-- about end -->

<!-- Mission start -->
<?php if( have_rows('mission_details') ): ?>
    <section class="section-padding bg-f6">
     <div class="container">
      <div class="row">
       <div class="col-12">
        <span class="swipper-root"></span>
    </div>
</div>

<div class="box-swiper-padding wow img-custom-anim-top">
   <div class="swiper slider-2">
    <div class="swiper-wrapper">
        <?php
        while( have_rows('mission_details') ):the_row();
            $mission_title = get_sub_field('mission_title');
            $mission_image = get_sub_field('mission_image');
            $mission_desc = get_sub_field('mission_description');
            ?>
            <div class="swiper-slide">
                <?php if( $mission_title ): ?>
                  <div class="d-flex border-bottom">
                    <?php if( $mission_image ): ?>
                       <img src="<?php echo $mission_image['url']; ?>" alt="fnpa" class="align-self-start" />
                   <?php endif; ?>
                   <div class="px-2">
                    <p class="fs-2 fw-bold text-dark"><?php echo $mission_title; ?></p>
                    <p class="mb-5 pe-2"><?php echo $mission_desc; ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endwhile; ?>

</div>
</div>
</div>
</div>
</section>
<?php endif; ?>
<!-- Mission end -->

<!-- Message start -->
<?php if( $msg_area = get_field('message_area') ): ?>
    <section class="about-section-1 bg-white">
       <div class="container">
          <div class="row">
            <?php if( $director_img = get_field('director_img') ): ?>
             <div class="col-lg-4" data-aos="fade-up">
                <div class="position-relative d-inline-flex president-img">
                   <img class="img-fluid position-relative z-1" src="<?php echo $director_img['url']; ?>" alt="Director of <?php echo get_bloginfo(); ?>" />
               </div>
           </div>
       <?php endif; ?>
       <div class="col-lg-8 wow img-custom-anim-left">
        <div class="title-styles res-mess">
         <?php echo $msg_area; ?>
         <div class="d-flex align-items-center">
          <a href="<?php echo get_permalink(12); ?>" class="btn-gradient fs-5 mt-2" target="_Self">Read More<i class="bi bi-arrow-right ms-2"></i></a>
      </div>
  </div>
</div>
</div>
</div>
</section>
<?php endif; ?>
<!-- Message end -->

<!-- notice start -->
<?php if( $notices = get_field('notices') ): ?>
    <section class="blog section-2 bg-f6 section-padding">
       <div class="container">
          <div class="title-lg ds-2 fw-bold text-black mx-auto title-styles">
             <h2 class="ds-2">FNPA Notice</h2>
         </div>
         <div class="row align-items-center justify-content-center">

            <?php
            foreach( $notices as $notice ):
               ?>
               <div class="col-lg-6 col-md-6 col-12 d-flex wow img-custom-anim-top">
                <div class="d-flex mt-4 border-bottom img-style custom-padding gap-2">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/notification.svg" alt="fnpa" class="align-self-start" />
                   <div class="px-2 notice-style">
                      <a href="<?php echo get_permalink($notice->ID); ?>" class="fs-2 text-dark fw-bold"><?php echo $notice->post_title; ?></a>
                      <p><?php echo get_the_date('j F Y'); ?></p>
                  </div>
              </div>
          </div>
      <?php endforeach; ?>

  </div>
</div>
</section>
<?php endif; ?>
<!-- notice end -->

<!--News start-->
<?php if( $publications = get_field('choose_publication') ): ?>
    <section class="section-padding">
       <div class="container">
          <div class="title-lg ds-2 fw-bold text-black mx-auto title-styles pub-titl">
             <h2 class="ds-2">Our Publications</h2>
         </div>
         <div class="row">

          <?php
          foreach( $publications as $publication ):

            $publication_img = wp_get_attachment_image_src( get_post_thumbnail_id( $publication->ID ), 'single-post-thumbnail' );

            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="zoom-img position-relative">
                   <a href="<?php echo get_permalink( $publication->ID ); ?>">
                    <?php 
                    if($publication_img ):
                       ?>
                       <img class="w-100 pub-img" src="<?php echo $publication_img[0]; ?>" alt="<?php echo $publication->post_title; ?>" />
                   <?php endif; ?>
                   <div class="overlay position-absolute"></div>
                   <p class="fs-2 text-white fw-bold position-absolute bottom-0 start-0 m-4 pub-txt pub-ttx"><?php echo $publication->post_title; ?></p>
               </a>
           </div>
       </div>
   <?php endforeach; ?>

</div>
</div>
</section>
<?php endif; ?>
<!--News end-->

<!--Team start-->
<?php 
$args = array(
    'post_type' => 'district',
    'post_status' => 'publish',
    'post_per_page' => -1,
);

$district_args = get_posts( $args );
if( $district_args ):
    ?>
    <section class="container-fluid position-relative section-padding bg-f6">
       <div class="container">
          <div class="title-lg ds-2 fw-bold text-black mx-auto title-styles">
             <h2 class="ds-2">District</h2>
         </div>
         <div class="box-swiper-padding wow img-custom-anim-top">
             <div class="swiper slider-2">
                <div class="swiper-wrapper">

                   <?php
                   $count = 1;
                   foreach( $district_args as $post ):
                       setup_postdata( $post ); 
                       ?>

                       <div class="swiper-slide <?php echo $count == 3 ? '': 'd-flex justify-content-center pb-lg-0 mt-3 mt-lg-0 mb-5 mb-lg-0'; ?>' ?>">
                          <div class="position-relative">
                             <p class="fs-2 fw-bold text-dark bg-white p-3 mb-0 w-100">
                                <a href="<?php echo get_permalink( $post->ID ); ?>" class="pub-ttx text-dark"><?php echo $post->post_title; ?></a>
                            </p>

                            <?php 
                            $post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            if($post_img ):

                                ?>
                                <div class="zoom-img dist-img">
                                    <img class="img-fluid w-100 dist-img" src="<?php echo $post_img[0]; ?>" alt="<?php echo $post->post_title; ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="text-center px-5 py-4 bg-white pub-ttx">
                                <a href="<?php echo get_permalink( $post->ID ); ?>" class="ms-auto  text-dark fw-bold">View More</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $count++;
                endforeach; 
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
    <div class="mx-auto mt-8">
     <a href="#" class="btn-gradient mx-auto">View All<i class="bi bi-arrow-right ms-2"></i></a>
 </div>
</div>

</section>
<?php 
endif;

$page_id = 32;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'post_per_page' => -1,
);

$post_args = get_posts( $args );
if( $post_args ):
    ?>
    <section class="container-fluid position-relative section-padding bg-white">
     <div class="container">
      <div class="row">
       <div class="col-12 text-center position-relative">
        <div class="z-2 position-relative wow img-custom-anim-top">
         <div class="title-lg ds-2 fw-bold text-black mx-auto title-styles">
          <h2 class="ds-2">Our Blogs</h2>
      </div>
  </div>
</div>
</div>
<div class="box-swiper-padding wow img-custom-anim-top">
   <div class="swiper slider-2">
    <div class="swiper-wrapper">
       <?php
       $count = 1;
       foreach( $post_args as $post ):
         setup_postdata( $post ); 
         ?>
         <div class="swiper-slide <?php echo $count == 3 ? '': 'd-flex justify-content-center pb-lg-0 mt-3 mt-lg-0 mb-5 mb-lg-0'; ?>">
          <div class="position-relative z-2">

              <?php 
              $post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
              if($post_img ):

                  ?>        
                  <div class="zoom-img blog-img">
                    <a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php echo $post_img[0]; ?>" alt="<?php echo $post->post_title; ?>" /></a>
                </div>
            <?php endif; ?>
            <div class="card-hover">
                <div class="title-news bg-white">
                 <div class="position-relative p-4">
                  <p class="text-primary fs-6"><?php echo get_the_date('F j, Y'); ?></p>
                  <div class="notice-style">
                   <a href="<?php echo get_permalink( $post->ID ); ?>" class="blog-a text-black fw-bold pb-4 pub-txt"><?php echo $post->post_title; ?></a>
               </div>
               <a href="<?php echo get_permalink( $post->ID ); ?>" class="text-primary fw-medium pt-2 d-lg-inline-block"><i class="bi bi-arrow-right me-2"></i>Read More</a>
           </div>
       </div>
   </div>
</div>
</div>
<?php 
$count++;
endforeach; 
wp_reset_postdata();
?>
</div>
</div>
</div>
<div class="mx-auto mt-8">
   <a href="<?php echo get_permalink( $page_id ); ?>" class="btn-gradient mx-auto">View All<i class="bi bi-arrow-right ms-2"></i></a>
</div>
</div>

</section>
<?php endif; ?>

<!-- partners start -->
<?php if( $partners = get_field('partners_images','options') ): ?>
    <section class="about-section-6 bg-f6 section-padding">
       <div class="container wow img-custom-anim-top">
          <div class="row justify-content-center">
             <div class="col-9 text-center">
                <h2 class="ds-2 fw-bold text-dark">Our Partners</h2>
            </div>
        </div>
        <div class="row justify-content-center">
         <div class="col-10 col-lg-12">
            <!-- Swiper -->
            <div class="swiper slider-4 py-6">
               <div class="swiper-wrapper">
                <?php foreach( $partners as $partner ): ?>
                  <div class="swiper-slide slide-style">
                     <div class="icon-shape">
                        <img src="<?php echo $partner['url']; ?>" alt="<?php echo $partner['alt']; ?>" />
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
<!-- Swiper JS -->
</div>
</div>
</div>
</section>
<?php endif; ?>
<!-- partners end -->

</main>


<?php
get_footer();
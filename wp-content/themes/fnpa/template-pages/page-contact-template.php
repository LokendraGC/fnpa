<?php 
get_header();
/* Template Name: Contact */
?>

    <main>  
 <?php get_template_part('template-parts/common/banner-section'); ?>

        <!-- contact section-1 start -->
        <section class="contact-section-1 section-padding bg-f6">
            <div class="container">
                <div class="wow img-custom-anim-left row">
                   <?php the_content(); ?>
                    <div class="d-flex align-items-center mb-5 col-lg-4">
                        <div class="contact-style">
                            <div class="icon-shaped">
                                <i class="fs-1 bi bi-geo-alt-fill"></i>
                            </div>
                            <?php if( $address = get_field('wtn_address','options') ): ?>
                            <div class="info-style">
                                <h6 class="fs-2 fw-bold">Address</h6>
                                <p class="text-secondary mb-0"><?php echo $address; ?></p>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5 col-lg-4">
                        <div class="contact-style">
                            <div class="icon-shaped">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-contact/phone-primary.svg" alt="abon" />
                            </div>
                            <?php if( $first_ph = get_field('wtn_phone_number_first','options') ): ?>
                            <div class="info-style">
                                <h6 class="fs-2 fw-bold">Phone</h6>
                                <a class="text-secondary mb-0" href="tel:<?php echo $first_ph; ?>"><?php echo $first_ph; ?></a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5 col-lg-4">
                        <div class="contact-style">
                            <div class="icon-shaped">
                                <i class="fs-1 bi bi-envelope-fill"></i>
                            </div>
                            <?php if( $first_email = get_field('wtn_email_address_first','options') ): ?>
                            <div class="info-style">
                                <h6 class="fs-2 fw-bold">Email Address</h6>
                                <a class="text-secondary mb-0" href="mailto:<?php echo $first_email; ?>"><?php echo $first_email; ?></a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section-1 end -->

        <!-- contact section-1 start -->
        <section class="contact-section-1 section-padding">
            <div class="container">
                <div class="row">
                    <?php if( $map_url = get_field('wtn_map_iframe_url','options') ): ?>
                    <div class="col-lg-5 me-lg-auto wow img-custom-anim-left">
                       <?php echo $map_url; ?>
                    </div>
                <?php endif; ?>
                    <div class="col-lg-7 ps-lg-10 wow img-custom-anim-left">
                        <?php
                         if( $content = get_field('contact_content') ):
                            echo $content;
                        endif;
                         ?>
                        
                            <?php echo do_shortcode('[contact-form-7 id="3f8e662" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section-1 end -->

    </main>


<?php 
get_footer();
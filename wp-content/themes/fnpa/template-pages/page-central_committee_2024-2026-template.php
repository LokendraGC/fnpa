<?php 
get_header();
/* Template Name: Central Committee */
?>

<main>  

<?php get_template_part('template-parts/common/banner-section'); ?>
     

    <!-- Team section-3 start -->
        <!-- blog section-2 start -->
<?php 

var_dump('expression');

$term = get_queried_object();
var_dump($term->slug . 'dfd');


$terms = get_the_terms(get_the_ID(), 'taxonomy-member');

if( $terms ):

var_dump('expression');
?>

    <section class="team-section-3 section-padding bg-white">
        <div class="container wow img-custom-anim-top">
            <h2 class="wow img-custom-anim-left title-lg ds-2 fw-bold text-black">
                <?php echo $term->name; ?>
            </h2>
            <div class="row mb-lg-0 mb-4 pb-lg-3">
               
               <?php
                foreach( $terms as $term ):
                    var_dump($term);
                ?>
                <div class="col-lg-3 pt-2 col-6 mb-3">
                    <div class="card-hover card-about text-center border bg-white img-styled" href="#">
                        <img src="https://fnpa.org.np/wp-content/uploads/2022/07/36-Krishna-Prasad-Parajuli.jpg" alt="abon" />
                        <p class="fw-bold text-black mt-3 mb-2"><?php echo $post->post_title; ?></p>
                        <p class="text-secondary">Co-Founder & CEO</p>
                        <p class="text-secondary">Contact: 9851077264</p>
                        <p class="text-secondary">idealss190@gmail.com</p>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif; ?>
    <!-- Team section-3 end -->

</main>


<?php 
get_footer();
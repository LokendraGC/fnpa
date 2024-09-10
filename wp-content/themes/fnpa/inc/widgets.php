<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fnpa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fnpa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fnpa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu First', 'fnpa' ),
			'id'            => 'footer-menu-first',
			'description'   => esc_html__( 'Add widgets here.', 'fnpa' ),
			'before_widget' => '<div class="col d-flex flex-column align-items-start">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);	

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu Second', 'fnpa' ),
			'id'            => 'footer-menu-second',
			'description'   => esc_html__( 'Add widgets here.', 'fnpa' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h5>',
			'after_title'   => '</h5><div class="col d-flex flex-column align-items-start">',
        	'after_widget'  => '</div>',
		)
	);

}
add_action( 'widgets_init', 'fnpa_widgets_init' );

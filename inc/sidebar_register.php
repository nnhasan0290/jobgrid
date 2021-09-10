<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer SEcond left', 'portfolio' ),
			'id'            => 'footer_second_left_id',
			'description'   => esc_html__( 'add widgets for footer second left', 'portfolio' ),
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Third left', 'portfolio' ),
			'id'            => 'footer_third_left_id',
			'description'   => esc_html__( 'add widgets for footer second left', 'portfolio' ),
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer last', 'portfolio' ),
			'id'            => 'footer_last_id',
			'description'   => esc_html__( 'add widgets for footer last left', 'portfolio' ),
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_widgets_init' );
<?php

/**
 * Page Content Widget
 * shapely Theme
 */
class Shapely_Page_Content extends WP_Widget {
	function __construct() {

		$widget_ops = array(
			'classname'                   => 'shapely-page-content',
			'description'                 => esc_html__( 'This widget is used only in pages with Template Widget', 'shapely-companion' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'shapely-page-content', esc_html__( '[Shapely] Paget Content', 'shapely-companion' ), $widget_ops );
	}

	function widget( $args, $instance ) {

		echo $args['before_widget'];

		?>

		<div class="container">
			<div class="row">
				<div id="primary" class="col-md-12 mb-xs-24 full-width">
					<div class="entry-content">
						<div class="shapely-content">
							<?php
								the_content();

								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
										'after'  => '</div>',
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php

		echo $args['after_widget'];
	}


	function form( $instance ) { }

	public function update( $new_instance, $old_instance ) {
		return $instance;
	}

}

?>

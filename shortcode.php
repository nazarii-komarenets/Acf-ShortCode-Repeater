<?php 

function slick_gallery_acf() { // We create shortcode function & slick slider with testimonials

	$out_slider = '<div class="Testimonials-slider">'.

		$rows = get_field('add_new_testimonials');

		foreach ( $rows as $row ) {
			$name = $row['name'];
			$job = $row['job'];
			$testimonial = $row['testimonial'];
			$photo = $row['photo'];

			$out_slider .= '
				<div><blockquote class="Testimonials-slide">

					<div class="Testimonials-slide-left">
       					<img alt="'. $name .'" class="Testimonials-avatar" src="'. $photo .'">
        			</div>
        			<div class="Testimonials-content">
        				<img src="/wordpress/wp-content/uploads/2020/07/svgexport-13.svg">
        				<p class="Testimonials-text">'. $testimonial .'</p>
        				<div class="Testimonials-name">'. $name .'</div>
        				<div class="Testimonials-position">'. $job .'</div>
        			</div>

        		</blockquote></div>';
		}

	$out_slider .= '</div>';

	return $out_slider;
}
add_shortcode('add_testimonials_slider', 'slick_gallery_acf');

?>
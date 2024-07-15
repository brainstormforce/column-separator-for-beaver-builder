<?php
	$cs_classes ='bbcs-'.$settings->bbcs_shape;
	$shape_html  = '';
	$svg_color = '#'.(( $settings->bbcs_color != '' ) ? $settings->bbcs_color : 'c7c7c7') ;
	$svg_height = ( $settings->bbcs_size != '' ) ? $settings->bbcs_size : '100' ;
	if( $settings->bbcs_shape == 'triangle' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil0" d="M-0 0.333331l4.66666 0 0 -3.93701e-006 -2.33333 0 -2.33333 0 0 3.93701e-006zm0 -0.333331l4.66666 0 0 0.166661 -4.66666 0 0 -0.166661zm4.66666 0.332618l0 -0.165953 -4.66666 0 0 0.165953 1.16162 -0.0826181 1.17171 -0.0833228 1.17171 0.0833228 1.16162 0.0826181z"/></svg>';
	}
	elseif ( $settings->bbcs_shape == 'left-triangle' || $settings->bbcs_shape == 'right-triangle' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 2000 90" preserveAspectRatio="none"><polygon xmlns="http://www.w3.org/2000/svg" points="535.084,64.886 0,0 0,90 2000,90 2000,0 "></polygon></svg>';
	}
	elseif ( $settings->bbcs_shape == 'tilt-left' || $settings->bbcs_shape == 'tilt-right' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 4 0.266661" preserveAspectRatio="none"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "/></svg>';
	}
	elseif ( $settings->bbcs_shape == 'circle' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 0.2 0.1"><path d="M0.200004 0c-3.93701e-006,0.0552205 -0.0447795,0.1 -0.100004,0.1 -0.0552126,0 -0.0999921,-0.0447795 -0.1,-0.1l0.200004 0z"/></svg>';
	}
	elseif ( $settings->bbcs_shape == 'curv-center' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none"><path class="fil1" d="M4.66666 0l0 7.87402e-006 -3.93701e-006 0c0,0.0920315 -1.04489,0.166665 -2.33333,0.166665 -1.28844,0 -2.33333,-0.0746339 -2.33333,-0.166665l-3.93701e-006 0 0 -7.87402e-006 4.66666 0z"></path></svg>';
	}
	elseif ( $settings->bbcs_shape == 'small-triangle' ) {
		$shape_html = '<svg class="'. esc_attr( $cs_classes ).'" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="'. esc_attr( $svg_color ).'" width="100%" height="'. esc_attr( $svg_height ).'" viewBox="0 0 0.156661 0.1"><polygon points="0.156661,3.93701e-006 0.156661,0.000429134 0.117665,0.05 0.0783307,0.0999961 0.0389961,0.05 -0,0.000429134 -0,3.93701e-006 0.0783307,3.93701e-006 "></polygon></svg>';
	}
	elseif ( $settings->bbcs_shape == 'zig-zag' ) {
		$shape_html = '<div class="'. esc_attr( $cs_classes ).'"></div>';
	}
?>
<?php if ( FLBuilderModel::is_builder_active() ): ?>
	<div class="bbcs-identify-container">
		<div class="bbcs-identify">
			Click here to edit the "Column Separator" settings. This text will not vissible on frontend.
		</div>
	</div>
<?php endif ?>
<div class="bbcs-wrapper">
	<div class="bbcs-container">
		<?php echo $shape_html; ?>
	</div>
</div>
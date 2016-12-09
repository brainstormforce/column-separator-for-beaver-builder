<?php if( $settings->bbcs_shape == 'triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-triangle {
	transform: scaleY(-1);
	bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'left-triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-left-triangle {
	transform: scaleY(-1);
	top: 0;
}
<?php elseif( $settings->bbcs_shape == 'left-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-left-triangle {
	bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'right-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-right-triangle {
	transform: scaleX(-1);
	bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'right-triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-right-triangle {
	transform: scaleY(-1)scaleX(-1);
	top: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-left' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-left {
	transform: scaleY(-1);
}
<?php elseif( $settings->bbcs_shape == 'tilt-left' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-left {
	bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-right' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-right {
	transform: scaleX(-1)scaleY(-1);
}
<?php elseif( $settings->bbcs_shape == 'tilt-right' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-right {
	transform: scaleX(-1);
    bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'circle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-circle {
    transform: scaleY(-1);
    bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'curv-center' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-curv-center {
    transform: scaleY(-1);
    bottom: 0;
}
<?php elseif( $settings->bbcs_shape == 'small-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-small-triangle {
    transform: scaleY(-1);
    bottom: 0;
}
<?php endif ?>
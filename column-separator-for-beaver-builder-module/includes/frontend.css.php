<?php if( $settings->bbcs_shape == 'triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-triangle {
	-webkit-transform: scaleY(-1);
	transform: scaleY(-1);
	bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-triangle {
    top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'left-triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-left-triangle {
	-webkit-transform: scaleY(-1);
	transform: scaleY(-1);
	top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'left-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-left-triangle {
	bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'right-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-right-triangle {
	-webkit-transform: scaleX(-1)translateX(1px);
	transform: scaleX(-1)translateX(1px);
	bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'right-triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-right-triangle {
	-webkit-transform: scaleY(-1)scaleX(-1)translateX(1px);
	transform: scaleY(-1)scaleX(-1)translateX(1px);
	top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-left' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-left {
	-webkit-transform: scaleY(-1);
	transform: scaleY(-1);
    left: 0;
    top: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-left' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-left {
	bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-right' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-right {
	-webkit-transform: scaleX(-1)scaleY(-1)translateX(1px);
	transform: scaleX(-1)scaleY(-1)translateX(1px);
    left: 0;
    top: 0;
}
<?php elseif( $settings->bbcs_shape == 'tilt-right' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-tilt-right {
	-webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'circle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-circle {
    top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'circle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-circle {
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'curv-center' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-curv-center {
    top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'curv-center' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-curv-center {
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'small-triangle' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-small-triangle {
    top: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'small-triangle' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-small-triangle {
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    bottom: 0;
    left: 0;
}
<?php elseif( $settings->bbcs_shape == 'zig-zag' && $settings->bbcs_position == 'top' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-zig-zag:before {
    display: block;
    <?php $color = '#'.(( $settings->bbcs_color != '' ) ? $settings->bbcs_color : 'c7c7c7'); ?>
    background-image: -webkit-linear-gradient(315deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%), -webkit-linear-gradient(225deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%);
    background-image: linear-gradient(135deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%), linear-gradient(225deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%);
    background-size: 50px 100%;
    content: '';
    height: <?php echo ( $settings->bbcs_size != '' ) ? $settings->bbcs_size : '100'; ?>px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 10;
}
<?php elseif( $settings->bbcs_shape == 'zig-zag' && $settings->bbcs_position == 'bottom' ): ?>
.fl-node-<?php echo $id; ?> .bbcs-zig-zag:before {
    display: block;
    <?php $color = '#'.(( $settings->bbcs_color != '' ) ? $settings->bbcs_color : 'c7c7c7'); ?>
    background-image: -webkit-linear-gradient(315deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%), -webkit-linear-gradient(225deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%);
    background-image: linear-gradient(135deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%), linear-gradient(225deg, <?php echo $color; ?> 25%, rgba(255, 255, 255, 0) 25%);
    background-size: 50px 100%;
    content: '';
    height: <?php echo ( $settings->bbcs_size != '' ) ? $settings->bbcs_size : '100'; ?>px;
    left: 0;
    position: absolute;
    right: 0;
	bottom: 0;
    z-index: 10;
    transform: scaleY(-1);
}
<?php endif ?>
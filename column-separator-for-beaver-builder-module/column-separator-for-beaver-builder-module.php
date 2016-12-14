<?php

class BSFBBColumnSeparator extends FLBuilderModule {
	public function __construct() {
		parent::__construct( array(
			'name'			=> __('Column Seperator', 'bb-column-separator' ),
			'description'	=> __( 'Column Separator for Beaver Builder ', 'bb-column-separator' ),
			'category'		=> __('Advanced Modules', 'bb-column-separator' ),
			'dir'			=> BB_COLUMN_SEPARATOR_DIR . 'column-separator-for-beaver-builder-module/',
			'url'			=> BB_COLUMN_SEPARATOR_URL . 'column-separator-for-beaver-builder-module/',
		) );
	}
}

FLBuilder::register_module( 'BSFBBColumnSeparator', array(
	'general'		=> array(
		'title'		=> __( 'General', 'bb-column-separator' ),
		'sections'	=> array(
			'bbcs'	=> array(
				'title'		=> __( 'Separator' , 'bb-column-separator' ),
				'fields'	=> array(

					'bbcs_shape'			=> array(
						'type'				=> 'select',
						'label'				=> __( 'Shape' , 'bb-column-separator' ),
						'options'			=> array(
							'none'			=> __( 'None' , 'bb-column-separator' ),
							'small-triangle'=> __( 'Small Triangle' , 'bb-column-separator' ),
							'triangle'		=> __( 'Triangle' , 'bb-column-separator' ),
							'left-triangle' => __( 'Triangle at Left' , 'bb-column-separator' ),
							'right-triangle'=> __( 'Triangle at Right' , 'bb-column-separator' ),
							'tilt-left'		=> __( 'Tilt Left' , 'bb-column-separator' ),
							'tilt-right'	=> __( 'Tilt Right' , 'bb-column-separator' ),
							'circle'		=> __( 'Circle' , 'bb-column-separator' ),
							'curv-center'	=> __( 'Curv Center' , 'bb-column-separator' ),
							'zig-zag'		=> __( 'Zig Zag' , 'bb-column-separator' ),

						),
						'default'			=> 'none'
					),

					'bbcs_position'		=> array(
						'type'			=> 'select',
						'label'			=> __( 'Position' , 'bb-column-separator' ),
						'options'		=> array(
							'top'		=> __( 'Top' , 'bb-column-separator' ),
							'bottom'	=> __( 'Bottom' , 'bb-column-separator' ),
						),
						'default'		=> 'bottom',
					),
					'bbcs_color'		=> array(
						'type'			=> 'color',
						'label'			=> __( 'Color' , 'bb-column-separator' ),
						'default'		=> 'c7c7c7',
						'show_reset'	=> true,
					),
					'bbcs_size'			=> array(
						'type'			=> 'text',
						'label'			=> __( 'Size' , 'bb-column-separator' ),
						'maxlength'		=> '3',
						'size'			=> '5',
						'placeholder'	=> '100',
						'description'	=> __( 'px' , 'bb-column-separator' ),
					)
				)//fields
			)
		)//section
	)//general
));
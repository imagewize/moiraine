<?php
// This file is generated. Do not modify it manually.
return array(
	'menu-designer' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'moiraine/menu-designer',
		'version' => '0.1.0',
		'title' => 'Menu Designer',
		'category' => 'design',
		'icon' => 'menu-alt',
		'description' => 'Create dynamic mega menus with template parts and advanced styling options.',
		'keywords' => array(
			'menu',
			'navigation',
			'mega menu',
			'dropdown'
		),
		'parent' => array(
			'core/navigation'
		),
		'attributes' => array(
			'label' => array(
				'type' => 'string',
				'default' => ''
			),
			'labelColor' => array(
				'type' => 'string'
			),
			'description' => array(
				'type' => 'string',
				'default' => ''
			),
			'menuSlug' => array(
				'type' => 'string',
				'default' => ''
			),
			'justifyMenu' => array(
				'type' => 'string',
				'default' => 'left',
				'enum' => array(
					'left',
					'center',
					'right'
				)
			),
			'width' => array(
				'type' => 'string',
				'default' => 'content',
				'enum' => array(
					'content',
					'wide',
					'full'
				)
			)
		),
		'example' => array(
			'attributes' => array(
				'label' => 'Features',
				'description' => 'Explore our powerful features',
				'justifyMenu' => 'center',
				'width' => 'wide'
			)
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'text' => true,
				'background' => true,
				'link' => true
			),
			'typography' => array(
				'fontSize' => true,
				'fontStyle' => true,
				'fontWeight' => true,
				'lineHeight' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'align' => array(
				'left',
				'center',
				'right'
			),
			'anchor' => true
		),
		'textdomain' => 'moiraine',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'render' => 'file:./render.php'
	)
);

<?php
// This file is generated. Do not modify it manually.
return array(
	'menu-designer' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'moiraine/menu-designer',
		'version' => '0.1.1',
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
			'interactivity' => true,
			'renaming' => false,
			'reusable' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'__experimentalSlashInserter' => true
		),
		'textdomain' => 'moiraine',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScriptModule' => 'file:./view.js',
		'render' => 'file:./render.php'
	)
);

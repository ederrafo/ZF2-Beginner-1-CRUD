<?php
/*
/config/module.config.php defines the controllers and view managers that our module supports. This file must return an array containing two keys `controllers` and `view_manager`.
*/

return array(
	'controllers' => array(
		'invokables' => array(
			'StickyNotes\Controller\StickyNotes' => 'StickyNotes\Controller\StickyNotesController',
		)
	),
	'view_manager' => array(
		'template_path_stack' => array(
			'stickynotes' => __DIR__ . '/../view'
		)
	),
	'router' => array(
		'routes' => array(
			'stickynotes' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/stickynotes[/:action][/:id]',
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id'     => '[0-9]+',
					),
					'defaults' => array(
						'controller' => 'StickyNotes\Controller\StickyNotes',
						'action'     => 'index'
					)
				)

			)
		)
	)
);
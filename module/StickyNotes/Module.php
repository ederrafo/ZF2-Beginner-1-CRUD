<?php
/*
Zend Framework 2 will look into this file for two functions namely getAutoloaderConfig and getConfig to load our new module into our application.
Let’s create this file and setup the auto-loader to let our application know which files to load.
*/
namespace StickyNotes;

class Module
{
	public function getAutoloaderConfig()
	{
		return array(
			/*
			autoload_classmap.php: The application will look into this file to know which files to load.
			*/
			'Zend\Loader\ClassMapAutoloader' => array(
				__DIR__ . '/autoload_classmap.php', 
			),
			'Zend\Loader\StandardAutoloader' => array(
				'namespace' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				)
			)
		);
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

}

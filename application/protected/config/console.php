<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
		'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
		'name'       => 'My Console Application',
		'import'     => array(
				'application.commands.*',
				'application.models.*',
		),

	// application components
		'components' => array(
				'db' => array(
						'connectionString' => 'mysql:host=localhost;dbname=test',
						'emulatePrepare'   => true,
						'username'         => 'root',
						'password'         => 'vagrant',
						'charset'          => 'utf8',
				),
		),
);
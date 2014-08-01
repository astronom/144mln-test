<?php

return array(
		'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
		'name'       => 'Каталог товаров',

	// autoloading model and component classes
		'import'     => array(
				'application.models.*',
				'application.components.*',
				'application.helpers.*',
				'application.extensions.sessionstorage.*',
		),

		'modules'    => array(
				'gii' => array(
						'class'     => 'system.gii.GiiModule',
						'password'  => '123',
						'ipFilters' => array('127.0.0.1', '192.168.33.1')
				)),

		'params'     => array(
				'defaultPageSize' => 20,
		),

	// application components
		'components' => array(
				'urlManager'   => require(dirname(__FILE__) . '/routes.php'),
				'user'         => array(
						'allowAutoLogin' => true,
						'class'          => 'WebUser',
				),
				'session'      => array(
						'class'   => 'UserHttpSession',
						'storage' => array(
								'class'        => 'SQLSessionStorage',
								'connectionID' => 'db',
						)),
				'db'           => array(
						'connectionString' => 'mysql:host=localhost;dbname=test',
						'emulatePrepare'   => true,
						'username'         => 'root',
						'password'         => 'vagrant',
						'charset'          => 'utf8',
				),
				'errorHandler' => array(
					// use 'site/error' action to display errors
						'errorAction' => 'site/error',
				),
		),
);
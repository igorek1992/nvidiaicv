<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Business',

	// preloading 'log' component
	'preload'=>array('log'),
        'sourceLanguage'=>'en',
        'language'=>'en',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
            'admin',
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'igor',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
            'request'=>array(
        'enableCookieValidation'=>true,
        'enableCsrfValidation'=>true,
    ),
		'user'=>array(
                    'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            'bootstrap' => array(
	    'class' => 'ext.bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
	),
            'format'=>array(
            'class'=>'application.extensions.YFormatter',
        ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
                        'class'=>'application.components.UrlManager',       
			'urlFormat'=>'path',
                        'showScriptName' => false,
			'rules'=>array(
                             '<language:(ru|ua|en)>/' => 'site/index',
                            '<language:(ru|ua|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
                            '<language:(ru|ua|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                            '<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                            '<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
			  	'login'=>'site/login',
                                'logout'=>'site/logout',
                                'signup'=>'site/signup',
                                'contact'=>'site/contact',
                                'forgot'=>'site/forgotpassword',
                                'faq'=>'site/faq',
                                'admin'=>'admin/faq/admin',
                                'updatepassword'=>'site/updatepassword',
                                'ourworks'=>'site/ourworks',
                                'blog'=>'site/blog',
//                                  '<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                
			),
		),
		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=business',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
              'authManager' => array(
                        'class' => 'CPhpAuthManager',
                        'defaultRoles' => array('shopper', 'admin'),
                        'authFile' => 'protected/config/auth.php',
                ),
            
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'igorchepurnoi@mail.ru',
                'languages'=>array('ru'=>'Русский','en'=>'English'),
	),
);
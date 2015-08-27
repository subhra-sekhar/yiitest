<?php

return CMap::mergeArray(
            require(dirname(__FILE__) . '/main.php'), array(
            /*'name' => 'Flatlab',
            'theme' => 'flatlab',
            'homeUrl' => '/',*/
            'defaultController'=>'site/index',
            'import' => array(
               
            ),
            'components' => array(
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'showScriptName' => false,
                    'rules' => array(
                    	'<controller:\w+>/<id:\d+>'=>'<controller>/view',
						'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
						'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',	

                        'gii' => 'gii',
                        'gii/<_c>' => 'gii/<_c>',
                        'gii/<_c>/<_a>' => 'gii/<_c>/<_a>',
                       
                    ),
                ),
                'errorHandler' => array(
                    'errorAction' => '/site/error',
                ),
               
            ),
            'modules' => array(
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'crud',
                    'ipFilters' => false,
                    'generatorPaths' => array(
                        'application.extensions.giix-core', // giix generators
                    ),
                ),
            ),
       )
);

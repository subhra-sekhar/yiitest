<?php

return CMap::mergeArray(
            require(dirname(__FILE__) . '/main.php'), array(
            'name' => '',
            /*'theme' => '',
            'homeUrl' => '/Backend/',*/
            'defaultController' => 'admin/login',
            'import' => array(
                'application.components.Backend.BackEndController',
                'application.components.Backend.*',
                'application.extensions.giix-components.*',
            ),
            'components' => array(
                'widgetFactory' => array(
                    'widgets' => array(
                        'CGridView' => array(
                            'cssFile' => '/assets/default/Backend/common/gridview.css',
                        ),
                    ),
                ),
                /*'user' => array(
                    'class' => 'application.components.Backend.com_user.WebUser',
                    'loginUrl' => 'admin/login',
                    'allowAutoLogin' => true,
                    'autoRenewCookie' => true,
                ),*/
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'showScriptName' => false,
                    'rules' => array(
						
                        'backend/' => 'admin/login',
                        'backend/<_c>/' => '<_c>',
                        'backend/<_c>/<_a>' => '<_c>/<_a>',
						
                        'backend/gii' => 'gii',
                        'backend/gii/<_c>' => 'gii/<_c>',
                        'backend/gii/<_c>/<_a>' => 'gii/<_c>/<_a>',
                    ),
                ),
                'errorHandler' => array(
                    'errorAction' => '/admin/error',
                ),
            ),
            'modules' => array(
                /* 'backup'=> array('path' => dirname(__FILE__).'/../modules/Backend/backup/', 'class'=>'application.modules.backup.BackupModule'), */
                // uncomment the following to enable the Gii tool
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'crud',
                    'ipFilters' => false,
                    'generatorPaths' => array(
                        'application.extensions.giix-core',
                    ),
                ),
            ),
        )
);

<?php
return [
    'id'=>'app-common',
    'language'=>'th_TH',
    'name'=>'<img src="./img/images.jpg" style="heigth:10px;>Yii2-Project',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            //'identityClass' => 'app\models\User',
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
        ],
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager', // or use 'yii\rbac\DbManager'
        ]
    ],
    'modules'=>[
        'gridview'=>[
            'class'=>'\kartik\grid\Module'
        ],
        'repair' => [
            'class' => 'frontend\modules\repair\Module',
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
    ],
      'rbac' => 'dektrium\rbac\RbacWebModule',
      'admin' => [
            'class' => 'mdm\admin\Module', 
            'layout' => 'left-menu', 
        ] 
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'user/*',
             'repair/*',
            'some-controller/some-action',
            
        ]
    ],
];
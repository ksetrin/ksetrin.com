<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => 'Ksetrin\'s home page',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'timeZone' => 'Asia/Yekaterinburg',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => '111000111',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['user/default/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'main/default/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
		'urlManager' => [

			'enablePrettyUrl' => true,
			'showScriptName' => false,
            'enableStrictParsing' => true,
			'rules' => [
                '/' => 'main/default/index',
                'blog' => 'blog/post/index',
                    'blog/post/<slug:[\w-]+>' => 'blog/post/viewslug',
                'example' => 'example/default/index',
                'about' => 'main/default/about',
                'contact' => 'main/contact/index',
                '<controller>/<action>' => '<controller>/<action>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
			]
		],
		/*'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'booleanFormat'=>['Нет','Да'],
            'dateFormat' => 'php:d.m.Y',         //Тут можно формат вывода дат по умолчанию настроить
            'datetimeFormat' => 'php:d.m.Y H:i',
            'timeFormat' => 'short',         
            'nullDisplay'=>'Не задано',
        ],*/
		'view' => [
			'theme' => [
			  'class' => 'yii\base\Theme',
			  'pathMap' => ['@app/views' => '@app/web/themes/ksetrin'],
			  'baseUrl' => '@web/themes/ksetrin'
			]
		],
        'sendGrid' => [
            'class' => 'bryglen\sendgrid\Mailer',
            'username' => 'app34816753@heroku.com',
            'password' => 'nv8sjmdr9622',
            //'viewPath' => '@app/views/mail', // your view path here
        ],
    ],
	'modules' => [
        'main' => [
            'class' => 'app\modules\main\Module',
        ],
		'user' => [
            'class' => 'app\modules\user\Module',
        ],
		'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'project' => [
            'class' => 'app\modules\project\Module',
        ],
        'example' => [
            'class' => 'app\modules\example\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) { // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['bootstrap'][] = 'gii';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = 'yii\gii\Module';
//    $config['components']['urlManager']['baseUrl'] = 'http://localhost/kse2modules/web';
    //'baseUrl' => 'http://localhost/kse2modules/web',
}

return $config;

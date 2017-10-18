<?php

return [
    'id' => 'yii2-admin-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'en-US',
    'aliases' => [
        '@yuncms/admin' => dirname(dirname(dirname(__DIR__))),
        '@tests' => dirname(dirname(__DIR__)),
        '@vendor' => VENDOR_DIR,
        '@bower' => VENDOR_DIR . '/bower-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'yuncms\user\frontend\Module',
        ],
    ],
    'components' => [
        'db' => require __DIR__ . '/db.php',
        'urlManager' => [
            'showScriptName' => true,
        ],
        'user' => [
            'identityClass' => 'yuncms\admin\models\Admin',
        ],
        'i18n' => [
            'translations' => [
                'admin*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
        ],
    ],
    'params' => [],
];
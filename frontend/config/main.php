<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
/*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                '/<action:[a-z\-]{1,50}>' => 'site/<action>',
                '/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => 'site/<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => 'site/<contextMain>-<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => 'site/<contextMain>-<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => 'site/<contextMain>-<contextSecondary>-<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => 'site/<contextMain>-<contextSecondary>-<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<contextThirdly:[a-z\-]{1,50}>/<idContextThirdly:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => 'site/<contextMain>-<contextSecondary>-<contextThirdly>-<action>',
                '/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<contextThirdly:[a-z\-]{1,50}>/<idContextThirdly:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => 'site/<contextMain>-<contextSecondary>-<contextThirdly>-<action>',

                '/<controller:[a-z\-]{1,50}>/<action:[a-z\-]{1,50}>' => '<controller>/<action>',
                '/<controller:[a-z\-]{1,50}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => '<controller>/<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => '<controller>/<contextMain>-<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => '<controller>/<contextMain>-<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => '<controller>/<contextMain>-<contextSecondary>-<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => '<controller>/<contextMain>-<contextSecondary>-<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<contextThirdly:[a-z\-]{1,50}>/<idContextThirdly:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>' => '<controller>/<contextMain>-<contextSecondary>-<contextThirdly>-<action>',
                '/<controller:[a-z\-]{1,50}>/<contextMain:[a-z\-]{1,50}>/<idContextMain:[1-9][0-9]{0,10}>/<contextSecondary:[a-z\-]{1,50}>/<idContextSecondary:[1-9][0-9]{0,10}>/<contextThirdly:[a-z\-]{1,50}>/<idContextThirdly:[1-9][0-9]{0,10}>/<action:[a-z\-]{1,50}>/<identifier:[1-9][0-9]{0,10}>' => '<controller>/<contextMain>-<contextSecondary>-<contextThirdly>-<action>',
            ],
        ],
*/

    ],
    'params' => $params,
];

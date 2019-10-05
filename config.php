<?php

return [
    'id' => 'yii2-swagger-your-app',
    // basePath (базовый путь) приложения
    'basePath' => __DIR__,
    // это пространство имен где приложение будет искать все контроллеры
    'controllerNamespace' => 'app\controllers',
    // установим псевдоним '@api', чтобы включить автозагрузку классов из пространства имен 'api'
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ],
    'params' => [
        'apiPathsToParse' => [
            // 'C:/xampp/htdocs/your-project/controllers',
            // 'C:/xampp/htdocs/your-project/models',
            // or
            // '/var/www/your-project/controllers',
            // '/var/www/your-project/models',
            // etc.
        ]
    ]
];

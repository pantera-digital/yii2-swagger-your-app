<?php

namespace app\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use Yii;

class SiteController extends Controller
{
	/**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'genxoft\swagger\ViewAction',
                'apiJsonUrl' => \yii\helpers\Url::to(['/site/api-json'], true),
            ],
            'api-json' => [
                'class' => 'genxoft\swagger\JsonAction',
                'dirs' => Yii::$app->params['apiPathsToParse'],
            ],
        ];
    }
}

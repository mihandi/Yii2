<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;

class ErrorController extends Controller
{
    public $layout = 'error';

    public function actionNotFound()
    {
        return $this->render('404');
    }

}
<?php
namespace frontend\controllers;



use backend\models\Blog;
use frontend\models\Comment;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{


    public function actionIndex()
    {
        return $this->render('/blog/articles-categories');
    }

}


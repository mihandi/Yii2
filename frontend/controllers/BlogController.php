<?php
namespace frontend\controllers;



use backend\models\Blog;
use frontend\models\Comment;
use Yii;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex()
    {
        $model['articles'] = Blog::Selectall();

        //        var_dump($users);die();
        return $this->render('/blog/articles-list', ['model' => $model]);
    }

    public function actionArticle()
    {


        if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['url']))
        {
            $commentPost = new Comment();

            if(Yii::$app->request->isAjax) {
                $commentPost->load(Yii::$app->request->post());

                if ($commentPost->load(Yii::$app->request->post()) && $commentPost->validate()) {
                    $commentPost->save();
                }

                $model = Blog::getArticle((int)$_GET['id']);


                return $this->renderAjax('/blog/comments',['model' => $model['article'],'comments' => $model['comments'],
                    'commentPost' => $commentPost,]);
            }else
                {
                    $model = Blog::getArticle((int)$_GET['id']);

                    return $this->render('/blog/article',['model' => $model['article'],'comments' => $model['comments'],
                        'commentPost' => $commentPost,]);
            }

        }else return $this->goBack();
    }
}


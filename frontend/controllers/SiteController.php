<?php
namespace frontend\controllers;

use backend\models\Blog;
use backend\models\ShopProduct;
use frontend\models\Comment;
use frontend\models\UserInfo;
use UploadForm;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\UploadedFile;
use yii\web\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index',['products' => ShopProduct::find()->all()]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();


        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect('personal-area');
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $login = new LoginForm();

        $login->attributes =  $login->load(Yii::$app->request->post());

        if ($login->validate())
        {
            $login->login();
            return $this->goHome();
//            var_dump('throw');die();
        }
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
            return $this->render('login', [
                'model' => $login,
            ]);
//        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionPersonalArea(){

        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        if (!$user_info = UserInfo::getUserInfo(yii::$app->user->id)){
            $user_info = new UserInfo();
        }
        $image_name = 'img_'.yii::$app->user->id.'.jpg';

        if ($user_info->load(Yii::$app->request->post()) && $user_info->edit())
        {
            if($file= UploadedFile::getInstance($user_info, 'file'))
            {
                $file->saveAs(Yii::getAlias('@frontendWeb').'/images/users/' .$image_name);
                $user_info->img = $image_name;
                $user_info->edit();
            }

            return $this->goBack();
        }else {
            return $this->render('personalArea', [
                'user' => $user_info,
            ]);
        }




    }

    public function actionAbout()
    {
        $model = new Comment();
        if ($model->load(Yii::$app->request->post()))
        {
            var_dump($_POST);die();
        }
        return $this->render('about');
    }




}

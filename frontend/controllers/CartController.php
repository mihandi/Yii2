<?php

namespace frontend\controllers;

use backend\models\ShopProduct;
use frontend\models\Cart;
use Yii;
use yii\web\Controller;

class CartController extends Controller
{

    public function actionAddToCart()
    {

        $id = Yii::$app->request->get('id');

        $product = ShopProduct::findOne((int)$id);


        if(empty($product)){return false;}

        $session = Yii::$app->session;
        $session->open();
//                $session->close();
//
//// уничтожаем сессию и все связанные с ней данные.
//        $session->destroy();
//        die('destroyed');

        $cart = new Cart();
        $cart->addToCart($product);

        $this->layout = false;

        return $this->render('/shop/cart-modal', ['session' => $_SESSION]);

    }

    public function actionClearCart()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;


        return $this->render('/shop/cart-modal',
            ['session' => $_SESSION]);

    }

    public function actionRemoveCartItem()
    {

        $id = Yii::$app->request->get('id');

        $product = ShopProduct::findOne((int)$id);

        if(empty($product)){return false;}

        $session = Yii::$app->session;
        $session->open();

        $cart= new Cart();
        $cart->removeFromCart($product);

        $this->layout = false;


        return $this->render('/shop/cart-modal',
            ['session' => $_SESSION]);
    }

    public function actionOrder()
    {
        $session = Yii::$app->session;
        $session->open();


        Yii::$app->mailer->compose('order',['session'=> $session])
            ->setFrom('adrej997@gmail.com')
            ->setTo('adrej997@mail.ru')
            ->setSubject('order')
            ->send();

        Yii::$app->session->setFlash('success','your order ok');
    }

}
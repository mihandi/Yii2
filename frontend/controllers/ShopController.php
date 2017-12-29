<?php

namespace frontend\controllers;

use backend\models\ProductCategory;
use backend\models\ShopProduct;

class ShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if(isset($_GET['category'])){
            $products= ShopProduct::find()->where(['category_id'=> (int)$_GET['category']])->all();
        }else{
            $products= ShopProduct::find()->all();
        }

        $categories= ProductCategory::find()->all();

        return $this->render('index',['products' => $products,
            'categories' => $categories]);
    }

    public function actionProduct()
    {


        if (isset($_GET['id']))
        {
            $model = ShopProduct::getProduct(((int)$_GET['id']));

            return $this->render('/shop/product',['model' => $model]);
        }else
            if(isset($_GET['quantity']))
        {
            var_dump('add to cart');die();
        }


        else {
            return $this->goBack();
        }


    }

}

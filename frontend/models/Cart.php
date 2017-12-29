<?php

namespace frontend\models;


use Yii;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1)
    {
            if (isset($_SESSION['cart'][$product->id])) {
                $_SESSION['cart'][$product->id]['qty'] += $qty;
            } else {
                if(!isset($_SESSION['cart']))
                {
                    $_SESSION['cart'] = [];
                }
                    $_SESSION['cart'][$product->id] = [
                        'qty' => $qty,
                        'title' => $product->title,
                        'price' => $product->price,
                        'image' => $product->image
                    ];

            }
            $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ?
                ($_SESSION['cart.qty'] + $qty) :
                $qty;


            $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ?
                ($_SESSION['cart.sum'] + ($qty * $product->price)) :
                $qty * $product->price;

    }

    public function removeFromCart($product, $qty = 1)
    {
        if (isset($_SESSION['cart'][$product->id])) {

                $_SESSION['cart'][$product->id]['qty'] -= $qty;


                $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ?
                    ($_SESSION['cart.qty'] - $qty) :
                    $qty;


                $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ?
                    ($_SESSION['cart.sum'] - ($qty * $product->price)) :
                    $qty * $product->price;

                if($_SESSION['cart'][$product->id]['qty'] === 0)
                {
                    unset($_SESSION['cart'][$product->id]);
                }
        }
    }



}

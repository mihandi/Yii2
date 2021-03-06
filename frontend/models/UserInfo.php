<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
/*
 @property $user_id
 @property $firstName
 @property $lastName
 @property $date_of_birth
 @property $rating
 @property $city
 @property $phoneNumber
*/
class UserInfo extends ActiveRecord
{

    public function rules()
    {
        return [
            ['first_name', 'trim'],
            ['first_name', 'string', 'min' => 2, 'max' => 100],

            ['last_name', 'trim'],
            ['last_name', 'string', 'min' => 2, 'max' => 100],

            ['rating', 'trim'],
            ['rating', 'number', 'min' => 0, 'max' => 110,'message' => 'LoL'],

            ['city', 'trim'],
            ['city','string', 'min' => 2, 'max' => 100],


            ['phone_number', 'trim'],
            ['phone_number', 'match', 'pattern' => '/^\+380\d{3}\d{2}\d{2}\d{2}$/', 'message' => 'kek' ]





        ];
    }

    public static function getUserInfo($user_id)
    {
        return static::findOne(['user_id' => $user_id]);

//        Yii::$app->db->createCommand("SELECT * FROM `user_info` WHERE `user_id`=:user_id")
//            ->bindValue(":user_id", $user_id,PDO::PARAM_INT)->queryOne();
    }

    public function edit()
    {
        if (!$this->validate()) {
            return null;
        }

        return $this->save() ? $this : null;
    }



}

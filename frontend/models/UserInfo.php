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
 @property $img
*/
class UserInfo extends ActiveRecord
{
    public $file;

    public function rules()
    {
        return [
            ['first_name', 'trim'],
            ['first_name', 'required'],
            ['first_name', 'string', 'min' => 2, 'max' => 100],

            ['last_name', 'trim'],
            ['last_name', 'string', 'min' => 2, 'max' => 100],

            ['rating', 'trim'],
            ['rating', 'number', 'min' => 0, 'max' => 110,'message' => 'LoL'],

            ['city', 'trim'],
            ['city','string', 'min' => 2, 'max' => 100],

            ['phone_number', 'trim'],
            ['phone_number', 'match', 'pattern' => '/^\+380\d{3}\d{2}\d{2}\d{2}$/', 'message' => 'kek' ],


            ['file', 'file',  'extensions' => 'png, jpg'],

            ['bio', 'trim'],
            ['bio', 'required'],

        ];
    }



    public static function getUserInfo($user_id)
    {
        return static::findOne(['user_id' => $user_id]);
    }

    public function edit()
    {
        $this->user_id  = yii::$app->user->id;

        if (!$this->validate()) {
            return null;
        }

        return $this->save() ? $this : null;
    }



}

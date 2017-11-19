<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $email;
    public $password;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value

            ['email', 'validateEmail'],

            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
       $user = $this->getUser();

        if (!$this->hasErrors()){
           if(!$user || !$user->validatePassword($this->password))
           {
               $this->addError($attribute,'Wrong password');
           }
        }
    }

    public function validateEmail($attribute, $params)
    {
        $user = $this->getUser();

        if (!$this->hasErrors()){
            if(!$user)
            {
                $this->addError($attribute,'Wrong email');
            }
        }

    }



    public function getUser()
    {
        return User::findOne(['email' => $this->email]);
    }

}

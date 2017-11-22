<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_PLAYER = 5;
    const STATUS_ADMIN = 10;


    public static function tableName()
    {
        return '{{%user}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function selectAll($status = array(1,5,10))
    {
        $status = implode(',',$status);

        return  Yii::$app->db->createCommand(
           "Select u.id,u.username,ui.id,ui.first_name,ui.last_name,ui.bio,ui.img From ".self::tableName()." u 
              INNER JOIN user_info ui On u.id = ui.user_id
              Where u.status IN ($status)")
           ->queryAll();
    }


    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }



    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}

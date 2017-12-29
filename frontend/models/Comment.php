<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "Comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $object_id
 * @property integer $parent_id
 * @property string $comment
 * @property integer $created_at
 * @property integer $updated_at
 */
class Comment extends \yii\db\ActiveRecord
{
    public static $limit = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'object_id', 'comment'], 'required'],
            [['user_id', 'object_id', 'parent_id', 'created_at', 'updated_at'], 'integer'],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'object_id' => 'Object ID',
            'parent_id' => 'Parent ID',
            'comment' => 'Comment',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function SelectAllObjComments($obj_id)
    {
            $comments['comments'] = YIi::$app->db->createCommand("Select ui.first_name,ui.last_name,ui.img,c.id,c.created_at,c.comment,c.parent_id From ".self::tableName()." c
            Inner Join user_info ui On ui.user_id = c.user_id
            Where c.object_id=:object_id and ISNULL(c.parent_id)")
            ->bindValue('object_id',$obj_id)
            ->queryAll();

        foreach ($comments['comments'] as $comment)
        {
            $comment['answers'] = YIi::$app->db->createCommand("Select ui.first_name,ui.last_name,ui.img,c.id,c.created_at,c.comment,c.parent_id From ".self::tableName()." c
        Inner Join user_info ui On ui.user_id = c.user_id
        Where c.object_id=:object_id and c.parent_id=:parent_id ")
                ->bindValue('object_id',$obj_id)
                ->bindValue('parent_id',$comment['id'])
                ->queryAll();

            $result[] = $comment;

        }


//        $comments['answers'] = YIi::$app->db->createCommand("Select ui.first_name,ui.last_name,ui.img,c.id,c.created_at,c.comment,c.parent_id From ".self::tableName()." c
//        Inner Join user_info ui On ui.user_id = c.user_id
//        Where c.object_id=:object_id and c.parent_id IN (".implode(',',$ids).")")
//            ->bindValue('object_id',$obj_id)
//            ->queryAll();


        return $result??null;
    }


}

<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $status
 * @property string $title
 * @property string $url
 * @property string $tags
 * @property string $text
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $image
 */
class Blog extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
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
            [['user_id', 'title', 'url', 'tags', 'text', 'content', 'image'], 'required'],
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['image'], 'string'],
            [['title', 'url', 'tags', 'text', 'content'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'title' => 'Title',
            'url' => 'Url',
            'tags' => 'Tags',
            'text' => 'Text',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'image' => 'Image',
        ];
    }
}

<?php

namespace backend\models;

use frontend\models\Comment;
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
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
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
            [[ 'title', 'text'], 'required'],
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['image'], 'string'],
            [['file'],'file'],
            [['title', 'url', 'tags', 'content'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'category_id' => 'Category ID',
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

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public static function SelectAll()
    {
        return Yii::$app->db->createCommand("SELECT b.id,b.category_id,b.title,b.text,b.image, b.url,b.tags,b.created_at,
        u.id as 'user_id', u.username FROM ".self::tableName()." b
        Inner Join user u On u.id = b.user_id"
        )->queryAll();
    }

    public static function getArticle($article_id)
    {
        $model['article'] = Yii::$app->db->createCommand("SELECT u.id as 'user_id',u.username,b.id, b.title,b.text,b.created_at,b.image,b.url FROM ".self::tableName()." b
        Inner Join user u On u.id = b.user_id
        Where b.id=:article_id "
        )->bindValue('article_id',$article_id
        )->queryOne();

        $model['comments'] = Comment::SelectAllObjComments($article_id);


        return $model;
    }
}

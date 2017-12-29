<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Shop_product".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category_id
 * @property double $price
 *
 * @property ProductCategory $category
 */
class ShopProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Shop_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'price'], 'required'],
            [['title'], 'string'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
    }

    public static function getProduct($product_id)
    {
        $model = Yii::$app->db->createCommand("SELECT u.id as 'user_id',u.username,
      
        b.id, b.title,b.price,b.description, b.created_at,b.image,sc.id as 'category_id',sc.category FROM ".self::tableName()." b
        Inner Join user u On u.id = b.user_id
        Inner Join Shop_category sc On sc.id = b.category_id
        Where b.id=:product_id "
        )->bindValue('product_id',$product_id
        )->queryOne();


        return $model;
    }
}

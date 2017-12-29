<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Shop_category".
 *
 * @property integer $id
 * @property string $category
 * @property integer $status
 * @property string $image
 *
 * @property ShopProduct[] $shopProducts
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Shop_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'status'], 'required'],
            [['status'], 'integer'],
            [['category', 'image'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopProducts()
    {
        return $this->hasMany(ShopProduct::className(), ['category_id' => 'id']);
    }
}

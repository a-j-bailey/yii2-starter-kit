<?php

namespace app\models;

use Yii;

class Products extends \yii\db\ActiveRecord
{
    /**
     * returns name of database table
     */
    public static function tableName()
    {
        return 'tbl_products';
    }

    /**
     * data validation rules for the different form fields
     */
    public function rules()
    {
        return [
            [['name', 'accessories', 'quantity', 'price'], 'required'],
            [['id'], 'integer'], 
            [['name'], 'string'], // name of product
            [['accessories',], 'string'], // should be a db of other 'accessory' products, i'll come back to this
            [['quantity'], 'integer'], // quantity of this product on hand
            [['price'], 'integer'], // integer representation of price
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Product Name',
            'accessories' => 'Product Accessories',
            'quantity' => 'Inventory Quantity',
            'price' => 'Product Price'
        ];
    }
}
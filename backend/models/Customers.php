<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_customers".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property string $full_address
 * @property int $company_id
 */
class Customers extends \yii\db\ActiveRecord
{
    private $model;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'birthday', 'full_address', 'company_id'], 'required'],
            [['id', 'company_id'], 'integer'],
            [['first_name', 'last_name', 'full_address'], 'string'],
            [['birthday'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'birthday' => 'Birthday',
            'full_address' => 'Full Address',
            'company_id' => 'Company ID',
        ];
    }
}

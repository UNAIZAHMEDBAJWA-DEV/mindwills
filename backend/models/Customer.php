<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $created_at
 */
class Customer extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            ['email', 'email'],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
{
    return [
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
    ];
}


}

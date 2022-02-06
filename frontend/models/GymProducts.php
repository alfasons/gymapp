<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gym_products".
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $description
 * @property string|null $status
 * @property string $type
 * @property float $price
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class GymProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gym_products';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'path', 'description'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name', 'path'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'path' => 'Path',
            'description' => 'Description',
            'status' => 'Status',
            'type' => 'Type',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}

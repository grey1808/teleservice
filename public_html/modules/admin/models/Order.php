<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $manufacturer
 * @property string|null $model
 * @property int|null $serial_number
 * @property int|null $status
 * @property string|null $comment
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number','request_number'], 'integer'],
            [['name', 'manufacturer', 'model', 'comment', 'status','images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'request_number' => 'Номер заявки',
            'images' => 'Изображение',
            'name' => 'Наименование',
            'manufacturer' => 'Производитель',
            'model' => 'Модель',
            'serial_number' => 'Серийный номер',
            'status' => 'Статус',
            'comment' => 'Комментарий',
        ];
    }
}

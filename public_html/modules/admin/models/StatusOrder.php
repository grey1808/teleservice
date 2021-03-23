<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "status_order".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property string|null $comment
 */
class StatusOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'comment'], 'string', 'max' => 255],
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
            'content' => 'Content',
            'comment' => 'Comment',
        ];
    }
}

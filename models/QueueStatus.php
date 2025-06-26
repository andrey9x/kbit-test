<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "queue_statuses".
 *
 * @property int $id
 * @property string $s_name
 * @property string|null $c_name
 * @property string|null $c_id
 * @property string|null $a_type
 * @property string|null $direction
 * @property string|null $activation
 * @property string|null $c_state
 * @property string|null $control
 * @property string $created_at
 */
class QueueStatus extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'queue_statuses';
    }

    public function rules(): array
    {
        return [
            [['c_name', 'c_id', 'a_type', 'direction', 'activation', 'c_state', 'control'], 'default', 'value' => null],
            [['s_name'], 'required'],
            [['created_at'], 'safe'],
            [['s_name', 'c_name'], 'string', 'max' => 512],
            [['c_id', 'direction', 'activation', 'c_state', 'control'], 'string', 'max' => 32],
            [['a_type'], 'string', 'max' => 128],
            [['s_name'], 'unique'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            's_name' => 'S Name',
            'c_name' => 'C Name',
            'c_id' => 'C ID',
            'a_type' => 'A Type',
            'direction' => 'Direction',
            'activation' => 'Activation',
            'c_state' => 'C State',
            'control' => 'Control',
            'created_at' => 'Created At',
        ];
    }

}
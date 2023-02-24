<?php

namespace app\models\dto;

use yii\db\ActiveRecord;

/**
 * User
 *
 * @property integer   $id
 * @property string    $name
 * @property integer   $type
 * @property integer   $enable
 * @property integer   $sort
 */
class PollQuestion extends ActiveRecord
{

    public static function tableName()
    {
        return '{{poll_question}}';
    }

}
<?php

namespace app\models\dto;

use yii\db\ActiveRecord;

/**
 * User
 *
 * @property integer   $id
 * @property integer   $question_id
 * @property string    $name
 * @property integer   $sort
 */
class PollAnswer extends ActiveRecord
{

    public static function tableName()
    {
        return '{{poll_answer}}';
    }

}
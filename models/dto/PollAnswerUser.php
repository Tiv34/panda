<?php

namespace app\models\dto;

use yii\db\ActiveRecord;

/**
 * User
 *
 * @property integer   $id
 * @property integer   $user_id
 * @property integer   $question_id
 * @property integer   $answer_id
 * @property string    $date_answer
 * @property integer   $delete
 */
class PollAnswerUser extends ActiveRecord
{

    public static function tableName()
    {
        return '{{poll_answer_user}}';
    }

}
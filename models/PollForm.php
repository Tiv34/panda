<?php

namespace app\models;

use yii\base\Model;
use Yii;

class PollForm extends Model
{

    public $answer;

    public function rules()
    {
        return [
            [['answer'], 'required'],
        ];
    }


}
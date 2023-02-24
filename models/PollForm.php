<?php

namespace app\models;

use yii\base\Model;
use Yii;

class PollForm extends Model
{

    public $data_answer;

    public function rules()
    {
        return [
            [['data_answer'], 'required'],
        ];
    }


}
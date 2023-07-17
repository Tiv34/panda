<?php

namespace app\models\dto;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * User
 *
 * @property integer   $id
 * @property string    $name
 * @property string    $src
 * @property integer   $sort
 * @property integer   $count_pay
 * @property User[]    $presentUser
 */
class Present extends ActiveRecord
{

    public static function tableName()
    {
        return '{{present}}';
    }

    public function getPresentUser(): ActiveQuery
    {
        return $this->hasMany(User::class, ['present_id' => 'id']);
    }

}
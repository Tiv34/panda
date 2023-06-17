<?php

namespace app\models\dto;

use yii\db\ActiveRecord;

/**
 * User
 *
 * @property integer   $id
 * @property string    $name
 * @property string    $site_name
 * @property string    $phone
 * @property integer   $phone2
 * @property integer   $group_id
 * @property integer   $sort
 * @property string    $last_online
 * @property integer   $group_guest
 */
class User extends ActiveRecord
{

    public static function tableName()
    {
        return '{{user}}';
    }

}
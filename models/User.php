<?php

namespace app\models;

use app\models\dto\User as UserRecord;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $name;
    public $password;
    public $authKey;
    public $site_name;
    public $group_guest;
    public $show;

    private static $users = [];

    public static function setUsersArray() {
        $query = UserRecord::find()
            ->select('*')
            ->from('user')
            ->all();
        $users = [];
        foreach ($query as $value) {
            $users[$value->id] = [
                'id' => $value->id,
                'username' => $value->phone,
                'password' => $value->phone,
                'name' => $value->name,
                'site_name' => $value->site_name,
                'group_guest' => $value->group_guest,
                'show' => $value->show,
                'authKey' => 'test'.$value->id.'key',
            ];
        }
        return $users;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $userArray = self::setUsersArray();
        if (isset($userArray[$id])) {
           return new static($userArray[$id]);
        } else {
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $userArray = self::setUsersArray();
        foreach ($userArray as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $userArray = self::setUsersArray();
        foreach ($userArray as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}

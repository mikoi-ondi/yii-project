<?php

namespace app\models;


use app\modules\user\models\User;
use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $fio;
    public $email;
    public $phone;
    public $password;
    public $verifyCode;


    public function rules()
    {
        return [
            [['fio', 'email', 'password', 'phone'], 'required'],
            [['fio'], 'string'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => 'app\modules\user\models\User', 'targetAttribute' => 'email'],
            [['phone'], 'unique', 'targetClass' => 'app\modules\user\models\User', 'targetAttribute' => 'phone'],
            ['verifyCode', 'captcha']
        ];
    }


    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $hash = Yii::$app->getSecurity()->generatePasswordHash($this->password, $cost = null);
            $this->password = $hash;
            $user->attributes = $this->attributes;

            return $user->create();
        }
    }
}
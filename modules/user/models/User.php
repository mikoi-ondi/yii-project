<?php

namespace app\modules\user\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $fio
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $password
 * @property string|null $date_create
 */
class User extends ActiveRecord implements IdentityInterface
{

    public function behaviors()
    {
        return [
            // Other behaviors
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'date_create',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['date_create'], 'safe'],
            [['fio', 'email', 'phone', 'password'], 'string', 'max' => 255],
            //['fio' => 'ФИО']
        ];
    }

    public function __toString()
    {
        return $this->fio;
    }
    public function create(): bool
    {
        return $this->save(false);
    }

    public static function findByEmail($email): array|ActiveRecord|null
    {
        return User::find()->where(['email' => $email])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'date_create' => 'Date Create',
        ];
    }

    public static function findIdentity($id): ? IdentityInterface
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}

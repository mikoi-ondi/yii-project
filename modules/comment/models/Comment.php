<?php

namespace app\modules\comment\models;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $id_author
 * @property int|null $id_city
 * @property string|null $rating
 * @property string|null $created_at
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'title', 'rating'], 'required'],
            [['text'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 100],
            [['id_author', 'rating'], 'integer'],
            [['created_at'], 'safe'],
            [['rating'], 'number', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'id_author' => 'Id Author',
            'id_city' => 'Id City',
            'rating' => 'Rating',
            'created_at' => 'Created At',
        ];
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }

}

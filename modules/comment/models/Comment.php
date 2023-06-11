<?php

namespace app\modules\comment\models;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $id_author
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
            [['text'], 'string'],
            [['id_author'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'rating'], 'string', 'max' => 255],
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
            'rating' => 'Rating',
            'created_at' => 'Created At',
        ];
    }
}

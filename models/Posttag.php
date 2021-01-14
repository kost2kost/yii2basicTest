<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%post_tag}}".
 *
 * @property int $post_id
 * @property int $tag_id
 *
 * @property Post $post
 * @property Tag $tag
 */
class Posttag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%post_tag}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'tag_id'], 'required'],
            [['post_id', 'tag_id'], 'integer'],
            [['post_id', 'tag_id'], 'unique', 'targetAttribute' => ['post_id', 'tag_id']],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'post_id' => Yii::t('app', 'Post ID'),
            'post.title' => Yii::t('app', 'Post Title'),
//            'tag_id' => Yii::t('app', 'Tag ID'),
            'tag.title' => Yii::t('app', 'Tag Title'),
        ];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery|PostQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }

    /**
     * Gets query for [[Tag]].
     *
     * @return \yii\db\ActiveQuery|TagQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * {@inheritdoc}
     * @return PostTagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PosttagQuery(get_called_class());
    }
}

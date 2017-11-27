<?php

namespace app\modules\blog\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\blog\models\PostTag;


/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property integer $status
 * @property string $update_time
 * @property string $create_time
 */
class Post extends \yii\db\ActiveRecord
{

    /**
     * Список тэгов, закреплённых за постом.
     * @var array
     */
    protected $tags = [];

    public function behaviors()
    {
        return [
            [
                'class' => \yii\behaviors\TimestampBehavior::className(),
                'value' => new \yii\db\Expression('NOW()'),
            ],
            /*['class' => SluggableBehavior::className(), //use yii\behaviors\SluggableBehavior;
                'attribute' => 'title',
                'immutable' => true,
                'ensureUnique' => true,
            ],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'], //, 'slug'
            [['description', 'content'], 'string'],
            [['created_at', 'updated_at', 'tags'], 'safe'],
            [['status'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'created_at' => 'Create Time',
            'updated_at' => 'Update Time',
            'status' => 'Status 0/1',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getTagPost()
    {
        return $this->hasMany(PostTag::className(), ['post_id' => 'post_id']);
    }

    /**
     * Устанавлиает тэги поста.
     * @param $tagsId
     */
    public function setTags($tagsId)
    {
        $this->tags = (array)$tagsId;
    }

    /**
     * Возвращает массив идентификаторов тэгов.
     */
    public function getTags()
    {
        return ArrayHelper::getColumn(
            $this->getTagPost()->all(), 'tag_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function afterSave($insert, $changedAttributes)
    {
        PostTag::deleteAll(['post_id' => $this->post_id]);
        $values = [];
        if (is_array($this->tags)) {
            foreach ($this->tags as $tag_id) {
                $values[] = [$this->post_id, $tag_id];
            }
            self::getDb()->createCommand()->batchInsert(PostTag::tableName(), ['post_id', 'tag_id'], $values)->execute();
        }
        parent::afterSave($insert, $changedAttributes);
    }
}

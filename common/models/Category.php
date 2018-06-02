<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $cat_id
 * @property string $cat_name 分类名称
 * @property int $parent_id 父级分类
 * @property int $sort_order 排序号
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['parent_id', 'sort_order'], 'integer'],
            ['sort_order', 'default', 'value'=>99],
            ['parent_id', 'default', 'value'=>0],
            [['cat_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Cat Name',
            'parent_id' => 'Parent ID',
            'sort_order' => 'Sort Order',
        ];
    }
}

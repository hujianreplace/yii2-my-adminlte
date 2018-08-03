<?php
namespace common\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn {

    public function init() {
        parent::init();
        $buttons = [
            'view' => function($url, $model, $key){
                $title = Yii::t('yii', 'View');
                $options = [
                    'title' => $title,
                    'aria-label' => $title,
                    'data-pjax' => '0',
                    'class' => 'btn btn-primary btn-flat btn-sm',
                ];
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span> '.$title, $url, $options);
            },
            'update' => function($url, $model, $key){
                $title = Yii::t('yii', 'Update');
                $options = [
                    'title' => $title,
                    'aria-label' => $title,
                    'data-pjax' => '0',
                    'class' => 'btn btn-primary btn-flat btn-sm',
                ];
                return Html::a('<span class="glyphicon glyphicon-pencil"></span> '.$title, $url, $options);
            },
            'delete' => function($url, $model, $key){
                $title = Yii::t('yii', 'Delete');
                $options = [
                    'title' => $title,
                    'aria-label' => $title,
                    'data-pjax' => '0',
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'class' => 'btn btn-primary btn-flat btn-sm',
                ];
                return Html::a('<span class="glyphicon glyphicon-trash"></span> '.$title, $url, $options);
            },
        ];
        $this->buttons = ArrayHelper::merge($this->buttons, $buttons);
    }
}
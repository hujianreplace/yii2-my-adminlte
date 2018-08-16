<?php

use yii\helpers\Html;
use common\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理员列表';
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('创建管理员', ['create'], ['class' => 'btn btn-primary btn-flat btn-xs']);
?>
<div class="admin-user-index">

    <div class="box box-primary">
        <div class="box-body">
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'attribute' => 'id',
                        'contentOptions' => ['width'=>'30px']
                    ],
                    'username',
                    'nickname',
                    'email:email',

                    [
//                        'class' => 'yii\grid\ActionColumn',
                        'class' => 'common\widgets\ActionColumn',
                        'template' => ' {update} {delete} {reset-pwd} {permission}',
                        'buttons' => [
                            'reset-pwd' => function($url, $model, $key){
                                $options = [
                                    'title' => '重置密码',
                                    'aria-label' => '重置密码',
                                    'date-method' => 'post'
                                ];
                                return Html::a('<span class="glyphicon glyphicon-user"></span> 重置密码', $url, $options);
                            },
                        ],
                    ],
                ],
            ]); ?>

        </div>
    </div>
</div>

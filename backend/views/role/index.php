<?php

use yii\helpers\Html;
use common\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RoleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '角色列表';
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('创建角色', ['create'], ['class' => 'btn btn-primary btn-flat btn-xs'])
?>
<div class="role-index">
    <div class="box box-primary">
        <div class="box-body">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'type',
                'description:ntext',
                'rule_name',
                'data',
                // 'created_at',
                // 'updated_at',

                [
                    'class' => 'common\widgets\ActionColumn',
                    'template' => '{update} {delete}'
                ],
            ],
        ]); ?>
        </div>
    </div>
</div>

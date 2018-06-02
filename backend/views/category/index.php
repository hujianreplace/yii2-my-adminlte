<?php

use yii\helpers\Html;
use common\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('Create Category', ['create'], ['class' => 'btn btn-primary btn-flat btn-xs'])
?>
<div class="category-index">
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

                'cat_id',
                'cat_name',
                'parent_id',
                'sort_order',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}'
                ],
            ],
        ]); ?>
        </div>
    </div>
</div>

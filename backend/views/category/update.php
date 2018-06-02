<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = 'Update Category: ' . $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_id, 'url' => ['view', 'id' => $model->cat_id]];
$this->params['breadcrumbs'][] = 'Update';
$this->params['action'] = Html::a('Categories', ['index'], ['class' => 'btn btn-primary btn-flat btn-xs']);
?>
<div class="category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

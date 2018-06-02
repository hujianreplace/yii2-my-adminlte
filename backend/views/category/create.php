<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('Categories'.' list ', ['index'], ['class' => 'btn btn-primary btn-flat btn-xs']);
?>
<div class="category-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

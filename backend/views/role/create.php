<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Role */

$this->title = '创建角色';
$this->params['breadcrumbs'][] = ['label' => '角色管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('角色列表', ['index'], ['class' => 'btn btn-primary btn-flat btn-xs']);
?>
<div class="role-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

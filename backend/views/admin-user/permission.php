<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminUser */

$this->title = '用户权限';
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('管理员列表', ['index'], ['class' => 'btn btn-primary btn-flat btn-xs']);
?>
<div class="admin-user-permission">

    <div class="box box-primary">
        <div class="box-body">

            <?php $form = ActiveForm::begin([
                    'action' => ['permit-save'],
                    'method' => 'post'
            ]); ?>

            <?= Html::checkboxList('permission', $userPermissionArr, $allPermissionArr) ?>

            <?= Html::hiddenInput('id', $id) ?>

            <div class="form-group">
                <?= Html::submitButton('更新', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

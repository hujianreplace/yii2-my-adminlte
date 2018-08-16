<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model \modules\AdminUser\models\AdminUserSearch */

$this->title = '重置密码';
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['action'] = Html::a('管理员列表', ['index'], ['class' => 'btn btn-primary btn-flat btn-xs']);

?>
<div class="admin-user-create">

    <div class="box box-primary">
        <div class="box-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'repeatPwd')->passwordInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton( '重置', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

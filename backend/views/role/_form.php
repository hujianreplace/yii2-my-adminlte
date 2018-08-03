<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Role */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-primary">
    <div class="box-body">
        <div class="role-form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'rule_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'data')->textInput() ?>

            <?= \common\widgets\PermitWidget::widget(['selectPermit'=>$model->getSelectedPermits()]);?>

            <div class="form-group">
                <?= Html::submitButton('更新', ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

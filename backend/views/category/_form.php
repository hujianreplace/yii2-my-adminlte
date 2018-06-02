<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-primary">
    <div class="box-body">
        <div class="category-form">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'parent_id')->textInput() ?>

        <?= $form->field($model, 'sort_order')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

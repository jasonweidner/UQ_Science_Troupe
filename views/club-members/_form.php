<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMembers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'join_date')->textInput() ?>

    <?= $form->field($model, 'membership_payment_date')->textInput() ?>

    <?= $form->field($model, 'membership_payment_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_courses_passed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_due_date')->textInput() ?>

    <?= $form->field($model, 'membership_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'officer')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

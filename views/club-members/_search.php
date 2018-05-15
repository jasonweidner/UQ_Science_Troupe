<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMembersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'join_date') ?>

    <?= $form->field($model, 'membership_payment_date') ?>

    <?= $form->field($model, 'membership_payment_amount') ?>

    <?php // echo $form->field($model, 'training_courses_passed') ?>

    <?php // echo $form->field($model, 'next_due_date') ?>

    <?php // echo $form->field($model, 'membership_status') ?>

    <?php // echo $form->field($model, 'officer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

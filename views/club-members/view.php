<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMembers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Club Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-members-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'join_date',
            'membership_payment_date',
            'membership_payment_amount',
            'training_courses_passed',
            'next_due_date',
            'membership_status',
            'officer',
        ],
    ]) ?>

</div>

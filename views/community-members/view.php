<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CommunityMembers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Community Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-members-view">

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
            'organisation_name',
            'street_address',
            'state',
            'postal_code',
            'country',
            'membership_status',
            'join_date',
            'membership_approval_date',
            'membership_approver',
        ],
    ]) ?>

</div>

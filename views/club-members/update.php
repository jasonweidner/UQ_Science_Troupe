<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMembers */

$this->title = 'Update Club Members: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Club Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

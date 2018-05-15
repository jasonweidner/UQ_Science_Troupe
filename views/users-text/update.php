<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersText */

$this->title = 'Update Users Text: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClubMembers */

$this->title = 'Create Club Members';
$this->params['breadcrumbs'][] = ['label' => 'Club Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

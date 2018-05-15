<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CommunityMembers */

$this->title = 'Create Community Members';
$this->params['breadcrumbs'][] = ['label' => 'Community Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

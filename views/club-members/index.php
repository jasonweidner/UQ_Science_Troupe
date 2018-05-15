<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClubMembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Club Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Club Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'join_date',
            'membership_payment_date',
            'membership_payment_amount',
            //'training_courses_passed',
            //'next_due_date',
            //'membership_status',
            //'officer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

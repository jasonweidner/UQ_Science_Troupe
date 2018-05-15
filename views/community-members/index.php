<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommunityMembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Community Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="community-members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Community Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'organisation_name',
            'street_address',
            'state',
            //'postal_code',
            //'country',
            //'membership_status',
            //'join_date',
            //'membership_approval_date',
            //'membership_approver',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

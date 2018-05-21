<?php
use yii\helpers\Html;
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Just a BIG TEST</h1>

        <p class="lead">Sub-title</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>



<div class="pdf-dealer container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</td>
                <th>Name</td>
                <th>Address</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= Yii::$app->user->identity->id ?></td>
                <td><?= Yii::$app->user->identity->username ?></td>
                <td><?= Yii::$app->user->identity->email ?></td>
            </tr>
        </tbody>
    </table>
</div>


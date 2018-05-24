<?php
use yii\helpers\Html;
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>University of Queensland Science Troupe</h1>
        
        <p> 
        
        <p class="lead">A group dedicated to promoting science and STEM through live demonstrations.</p>
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


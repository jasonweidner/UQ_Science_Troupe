<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
phpinfo();

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    // if a user is an admin then 
    // a button should appear to navigate all Users
    // http://localhost/UQST/web/index.php?r=user%2Fadmin%2Findex

    // if a user is a regular member, they should be able to read basic info about other Users

    // if a user is a community member, they should be able to contact the officers



    $navItems=[
        ['label' => 'Users', 'url' => ['/user/index']],
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']]
    ];
    
    if (Yii::$app->user->isGuest) {
        array_push($navItems,
            ['label' => 'Sign In', 'url' => ['/user/settings/profile']],
            ['label' => 'Sign Up', 'url' => ['/user/registration/register']]);
    } else {
        array_push($navItems,
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
            ['label' => 'Account','url' => ['/user/settings/profile']]
        );
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $navItems,
    ]);

    NavBar::end();
    ?>


/* MAIN CONTENT HERE */
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?> 
     </div> 
</div>



<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; INFS7202 <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

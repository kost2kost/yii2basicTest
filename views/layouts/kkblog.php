<?php


/* @var $this \yii\web\View */
/* @var $content string */
/*use app\assets\AdminAsset; */
/*AdminAsset::register($this); */

/* use app\assets\AppAsset; */
/*AppAsset::register($this); */

/*            'class' => 'navbar-inverse navbar-fixed-top',*/
/*        <?= $content ?> */


use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset; 
use app\assets\AdminAsset; 

AdminAsset::register($this); 
AppAsset::register($this); 




?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
/*Yii::$app->homeUrl = Yii::toUrl */
    NavBar::begin([
/*        'brandLabel' => Yii::$app->name, */
        'brandLabel' => 'AppKkblog',
        'brandUrl' => Yii::$app->homeUrl, 
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'KkblogHome', 'url' => ['/kkblog/index']],
            ['label' => 'KKblogKkproc', 'url' => ['/kkblog/kkproc']],
            ['label' => 'KkblogOut', 'url' => ['/site/index']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

<div class="blog-nav">
    <?php
    NavBar::begin();
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'KkblogHome1', 'url' => ['/kkblog/index']],
            ['label' => 'KKblogKkproc', 'url' => ['/kkblog/kkproc']],
            ['label' => 'KkblogOut1', 'url' => ['/site/index']],
        ],
    ]);
    NavBar::end();
    
    ?>

</div>

        <?= $content ?> 

<p>
<?= Yii::$app->homeUrl ?>
</p>
    </div>
</div>



<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Kost2Kost <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Kostscript';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-kostscript">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::script('alert("Привет!");') ?>

    <p>
        This is the KostScriptTest page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>



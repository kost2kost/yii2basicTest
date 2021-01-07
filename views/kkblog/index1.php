<?php

/* @var $this yii\web\View */

/*<?= Html::cssFile('@app/modules/admin/web/css/blog.css') ?>*/


use yii\helpers\Html;

$this->title = 'KKblog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kkblog-index1">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

</div>


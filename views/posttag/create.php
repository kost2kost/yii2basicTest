<?php

/*
    <?= $this->render('_form', [
        'model' => $model,
        'mapPost' => $mapPost,
        'mapTag' =>  $mapTag,
        'viewPostTagPromptPost' => $viewPostTagPromptPost,
        'viewPostTagPromptTag' =>  $viewPostTagPromptTag,
        'viewPostTagLabelPost' =>  $viewPostTagLabelPost,
        'viewPostTagLabelTag' =>  $viewPostTagLabelTag,
    ]) ?>
*/

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostTag */

$this->title = Yii::t('app', 'Create Post Tag');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

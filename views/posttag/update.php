<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostTag */

$this->title = Yii::t('app', 'Update Post Tag: {name}', [
    'name' => $model->post_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'post_id' => $model->post_id, 'tag_id' => $model->tag_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="post-tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'params' =>  $params,
  ]) ?>

</div>

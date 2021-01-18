<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Post Tags');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Post Tag'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'post_id',
//            'tag_id',
//            'post.title',
//            'tag.title',
//               'post.title'::'Статья',
                ['label' => 'Статья', 'attribute' => 'post.title'],
                ['label' => 'Тег', 'attribute' => 'tag.title'],        

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

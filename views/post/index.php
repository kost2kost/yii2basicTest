<?php


/*            ['class' => 'yii\grid\ActionColumn'::className(),
                'footer' => 'Кнопки',
            ],*/

/*            'author_id', */
/*            'template' => '{delete}',*/
/*                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [*/


use yii\helpers\Html;
use yii\grid\GridView;
/*use yii\grid\ActionColumn;*/

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Post'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author.name_user',
            'category_id',
            'title',
            'body:ntext',
            'category.title',

            ['class' => 'yii\grid\ActionColumn'],
            [
            'class' => 'yii\grid\ActionColumn'::className(),

            'template' => '{details} {delete} {shopping}' ,

            'buttons' => [
                'details' => function ($url, $searchModel, $key) {
                    return Html::a('<span class="glyphicon glyphicon-euro"></span>', $url, [
                    'title' => 'Full Details',
                    'data-pjax' => '0',
                ]);
            },
            'delete' => function ($url, $searchModel, $key) {
                return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'title' => Yii::t('yii', 'Delete'),
                    'data-confirm' => 'Are you sure you want to delete?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                    ]);
                },
            'shopping' => function ($url, $searchModel, $key) {
                return Html::a('<span class="glyphicon glyphicon-shopping-cart"></span>', $url, [
                    'title' => Yii::t('yii', 'Shopping'),
                    'data-pjax' => '0',
                    ]);
                },
            ], 
        ],
        ],
    ]); ?>


</div>



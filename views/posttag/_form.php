<?php

use app\models\Post;
use app\models\Tag;
//use app\models\Posttag;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/*    <?= $form->field($model, 'post_id')->textInput() ?>*/
/*    <?= $form->field($model, 'tag_id')->textInput() ?> */


/* @var $this yii\web\View */
/* @var $model app\models\PostTag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-tag-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $posts = Post::find()->all(); ?>
    <?php $items1 = ArrayHelper::map($posts, 'id', 'title'); ?>
    <?php       $params1 = ['prompt' => 'Выберите наименование статьи'];                ?>
    <?php echo $form->field($model, 'post_id')->dropDownList($items1, $params1)->label('Статья')    ?>

    <?php $tags = Tag::find()->all();
     $items2 = ArrayHelper::map($tags, 'id', 'title');
     $params2 = ['prompt' => 'Выберите тег' ];
     echo $form->field($model, 'tag_id')->dropDownList($items2, $params2)->label('Тег')
    ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use app\models\Post;
use app\models\Tag;
//use app\models\Posttag;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/*    <?= $form->field($model, 'post_id')->textInput() ?>*/
/*    <?= $form->field($model, 'tag_id')->textInput() ?> */

/*    <?php echo $form->field($model, 'post_id')->dropDownList($params1, $params2)->label($params5)    ?> */
/*    <?php      echo $form->field($model, 'tag_id')->dropDownList($params3, $params4)->label($params6)    ?> */


/* @var $this yii\web\View */
/* @var $model app\models\PostTag */
/* @var $form yii\widgets\ActiveForm */

/*    <?php $posts = Post::find()->all(); ?>
    <?php $items1 = ArrayHelper::map($posts, 'id', 'title'); ?>
    <?php       $params1 = ['prompt' => 'Выберите наименование статьи'];                ?>
*/
?>

<div class="post-tag-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'post_id')->dropDownList($params['params1'], $params['params2'])->label($params['params5'])    ?>

    <?php echo $form->field($model, 'tag_id')->dropDownList($params['params3'], $params['params4'])->label($params['params6'])    ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

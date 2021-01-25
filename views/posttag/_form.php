<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/*    <?= $form->field($model, 'post_id')->textInput() ?>*/
/*    <?= $form->field($model, 'tag_id')->textInput() ?> */

/*    <?php echo $form->field($model, 'post_id')->dropDownList($params1, $params2)->label($params5)    ?> */
/*    <?php      echo $form->field($model, 'tag_id')->dropDownList($params3, $params4)->label($params6)    ?> */

/*    <?php echo $form->field($model, 'post_id')->dropDownList($paramsView['params1'], $paramsView['params2'])->label($paramsView['params5'])    ?> */
/*    <?php echo $form->field($model, 'tag_id')->dropDownList($paramsView['params3'], $paramsView['params4'])->label($paramsView['params6'])    ?> */



/* @var $this yii\web\View */
/* @var $model app\models\PostTag */
/* @var $form yii\widgets\ActiveForm */

/*    <?php echo $form->field($model, 'post_id')->dropDownList($mapPost, $viewPostTagPromptPost)->label($viewPostTagLabelPost)    ?>
    <?php echo $form->field($model, 'tag_id')->dropDownList($mapTag, $viewPostTagPromptTag)->label($viewPostTagLabelTag)    ?>
*/
/*    <?php $posts = Post::find()->all(); ?>
    <?php $items1 = ArrayHelper::map($posts, 'id', 'title'); ?>
    <?php       $params1 = ['prompt' => 'Выберите наименование статьи'];                ?>
*/
?>

<div class="post-tag-form">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-6"> 
        <?php echo $form->field($model, 'post_id')->dropDownList($model['paramsView']['mapPost'],  
                $model['paramsView']['viewPostTagPromptPost'])->label($model['paramsView']['viewPostTagLabelPost'])    ?>
        </div>
        <div class="col-md-6"> 
        <?php echo $form->field($model, 'tag_id')->dropDownList($model['paramsView']['mapTag'], 
                $model['paramsView']['viewPostTagPromptTag'])->label($model['paramsView']['viewPostTagLabelTag'])    ?>
        </div>
  
      <div class="col-md-12"> 
  
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

      </div>

        <?php ActiveForm::end(); ?>
     </div>

</div>


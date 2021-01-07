<?php

namespace app\controllers\kktest;
use app\models\kktest\KkFormTest1;

class Kktest1Controller extends \yii\web\Controller
{
    public function actionKkaction1()
    {
        $model = new KkFormTest1;
        return $this->render('kkaction1', [
            'model' => $model,
        ]); 
    }

}

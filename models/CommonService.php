<?php
namespace app\models;

use yii\helpers\ArrayHelper;

class CommonService
{
    public static function PostMap()
    {
        $paramsPostMap = ArrayHelper::map(Post::find()->all(), 'id', 'title');
        return $paramsPostMap;
    }

    public static function TagMap()
    {
        $paramsTagMap = ArrayHelper::map(Tag::find()->all(), 'id', 'title');
        return $paramsTagMap;
    }

    public static function PostDropDownListPrompt()
    {
        $prompt = ['prompt' => 'Выберите наименование статьи'];
        return $prompt;
    }

    public static function TagDropDownListPrompt()
    {
        $prompt = ['prompt' => 'Выберите тег' ];
        return $prompt;
    }

}

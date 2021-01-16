<?php
namespace app\services;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\Tag;
use app\models\Post;

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

    public static function PostDropDownListLabel()
    {
        $label = 'Статья';
        return $label;
    }

    public static function TagDropDownListPrompt()
    {
        $prompt = ['prompt' => 'Выберите тег' ];
        return $prompt;
    }
    public static function TagDropDownListLabel()
    {
        $label = 'Тег';
        return $label;
    }

}

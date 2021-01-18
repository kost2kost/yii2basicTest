<?php
namespace app\services;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\Tag;
use app\models\Post;

class TagHelperService
{
    public static function getTagMap()
    {
        $paramsTagMap = ArrayHelper::map(Tag::find()->all(), 'id', 'title');
        return $paramsTagMap;
    }
    public static function getTagDropDownListPrompt()
    {
        $prompt = ['prompt' => 'Выберите тег' ];
        return $prompt;
    }
    public static function getTagDropDownListLabel()
    {
        $label = 'Тег';
        return $label;
    }
}


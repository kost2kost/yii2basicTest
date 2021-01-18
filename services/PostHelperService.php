<?php
namespace app\services;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\Tag;
use app\models\Post;

class PostHelperService
{
    public static function getPostMap()
    {
        $paramsPostMap = ArrayHelper::map(Post::find()->all(), 'id', 'title');
        return $paramsPostMap;
    }


    public static function getPostDropDownListPrompt()
    {
        $prompt = ['prompt' => 'Выберите наименование статьи'];
        return $prompt;
    }

    public static function getPostDropDownListLabel()
    {
        $label = 'Статья';
        return $label;
    }


}

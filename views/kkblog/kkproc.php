<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Kkproc';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kkblog-kkproc">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>




<?php
   $mysqli = new mysqli("localhost","kost","Kostk279_","yii2basic");
    if ($mysqli->connect_errno){
?>
    <h1><?= Html::encode("kost") ?></h1>
    <p> 
        Не удалось подключиться к MySql:
    </p>
<?php        
        }
        else
        {
?>
    <h1><?= Html::encode("kost") ?></h1>
    <p> 
        Kost подключился к MySql:
    </p>
<?php
            echo "<p> echo Удалось подключиться </p>";
        if(!$mysqli->query("CALL kkProcTest1(2)")){
            echo "<p> Не удалось вызвать хранимую процедуру <p>";
        }
        else {
            echo "<p> Вызвана хранимая процедура <p>";
        }
        $mysqli->close();        
    }
?> 
    
</div>




<?php 
    use yii\helpers\Url;
?>
<h1><?php echo $item['title']; ?></h1>

<p><?php echo $item['content']; ?></p>

<hr>

<!--<a href="<?php // echo Yii::$app->urlManager->createUrl(['test/index']); ?>" class="btn btn-info">
    Вернуться к новостям
</a>-->
<a href="<?php echo Url::to(['test/index']); ?>" class="btn btn-info">
    Вернуться к новостям
</a>
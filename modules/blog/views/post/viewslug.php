<?php

use yii\helpers\Html;

echo app\widgets\highlightJs\HighlightJs::widget();
echo app\widgets\scrollTop\ScrollTop::widget();

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

/*
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description set inside view',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Keywords set inside view',
]);
*/

?>
<div class="post_view">

    <h1><?=$this->title?></h1>

    <div class="row col-xs-12 post_content">
        <?=$model->content?>
    </div>
    <div class="row col-xs-12 post_meta">
        <p class="pull-left">
            Теги:
            <?php foreach($model->getTagPost()->all() as $post): ?>
                <?= $post->getTag()->one()->title ?>
            <?php endforeach ?>
        </p>
        <p class="pull-right">
            Опубликовано: <?= Yii::$app->formatter->asDate($model->created_at, 'd MMMM, yyyy') ?>
            <?php if ($model->created_at !== $model->updated_at): ?>
                | Обновлено: <?= Yii::$app->formatter->asDate($model->updated_at, 'd MMMM, yyyy') ?>
            <?php endif ?>
        </p>
    </div>
    <div class="row col-xs-12">
        <div id="hypercomments_widget"></div>
        <script type="text/javascript">
            _hcwp = window._hcwp || [];
            _hcwp.push({widget:"Stream", widget_id: 75492});
            (function() {
                if("HC_LOAD_INIT" in window)return;
                HC_LOAD_INIT = true;
                var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/75492/"+lang+"/widget.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hcc, s.nextSibling);
            })();
        </script>
        <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>
    </div>
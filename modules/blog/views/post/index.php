<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Этот блог про PHP, Yii и базы данных MySQL, PostgreSQL';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1 class="blog_title"><?= Html::encode($this->title) ?></h1>
    <?=ListView::widget( [
        'dataProvider' => $dataProvider,
        'layout' => '{items}{pager}',
        'emptyText' => 'Пусто',
        'itemOptions' => ['class' => 'row post_item'], //col-sm-12 post_item
        'itemView' => '_post',
        'separator' => '<hr>',
    ] );
    ?>
    <!-- list of tags will be here -->
    <!-- subscribe will be here -->


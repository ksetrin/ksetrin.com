<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

echo app\widgets\highlightJs\HighlightJs::widget();

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'post_id' => $model->post_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'post_id' => $model->post_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'post_id',
            'title',
            'slug',
            'description:ntext',
            'content:ntext',
            'status',
            'updated_at',
            'created_at',
        ],
    ]) ?>

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#preview_description" aria-expanded="false" aria-controls="preview_description">
        Preview description
    </button>
    <div class="collapse" id="preview_description">
        <?= $model->description ?>
    </div>

    <p></p>

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#preview_content" aria-expanded="false" aria-controls="preview_content">
        Preview content
    </button>
    <div class="collapse" id="preview_content">
        <?= $model->content ?>
    </div>



</div>

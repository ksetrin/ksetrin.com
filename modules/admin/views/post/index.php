<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php /*
	Other formatters
	In addition to date, time and number formatting, Yii provides a set of other useful formatters for different situations:

	raw - the value is outputted as is, this is a pseudo-formatter that has no effect except that null values will be formatted using nullDisplay.
	text - the value is HTML-encoded. This is the default format used by the GridView DataColumn.
	ntext - the value is formatted as an HTML-encoded plain text with newlines converted into line breaks.
	paragraphs - the value is formatted as HTML-encoded text paragraphs wrapped into <p> tags.
	html - the value is purified using HtmlPurifier to avoid XSS attacks. You can pass additional options such as ['html', ['Attr.AllowedFrameTargets' => ['_blank']]].
	email - the value is formatted as a mailto-link.
	image - the value is formatted as an image tag.
	url - the value is formatted as a hyperlink.
	boolean - the value is formatted as a boolean. By default true is rendered as Yes and false as No, translated to the current application language. You can adjust this by configuring the yii\i18n\Formatter::$booleanFormat property.
	*/ ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
            'title',
            'slug',
            'description:ntext',

            //'content:ntext',
            //'status',
            //'update_time',
            //'create_time',

            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::to(['/admin/post/'.$action, 'post_id' => $model->post_id]);
                }
            ],
        ],
    ]); ?>

</div>

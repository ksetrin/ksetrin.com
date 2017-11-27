<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="col-md-6">
	<h2><?=Html::a($model->title, ['/blog/post/'.$model->slug]); ?></h2>

	<div class="post_metainfo">
		<?= Yii::$app->formatter->asDate($model->created_at, 'd MMMM, yyyy')?>
	</div>

	<div class="post_tags">
		<?php foreach($model->getTagPost()->all() as $post) : ?>
			<?= Html::img($post->getTag()->one()->image, [
                'alt' => $post->getTag()->one()->title,
			]) ?>
		<?php endforeach; ?>
	</div>

	<!-- comments will be here -->

</div>

<div class="col-md-6">
	<div class="post_description"><?= HtmlPurifier::process($model->description)?></div>
</div>
  
  




<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Administration';
$this->params['breadcrumbs'][] = $this->title;

/*
<?= $this->context->action->uniqueId ?>
<?= $this->context->action->id ?>
<?= $this->context->module->id ?>
<?= get_class($this->context) ?>
*/

?>

<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<div class="admin-default-index">
    <h1>Разделы</h1>
	<div class="container">
	<ul>
		<li><?= Html::a('Посты блога', ['/admin/post/index']) ?></li>
		<li><?= Html::a('Теги', ['/admin/tag/index']) ?></li>
	</ul>
	</div>
</div>

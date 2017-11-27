<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Список примеров по Pjax';
$this->params['breadcrumbs'][] = ['label' => 'Pjax', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<h1>Список примеров Pjax</h1>
<ul>
    <li><?= Html::a('Обновление серверного времени', 'pjax-example-1') ?></li>
    <li><?= Html::a('Автоматическое обновление с интервалом времени', 'pjax-example-2') ?></li>
    <li><?= Html::a('Навигация с использованием виджета Pjax', 'pjax-example-3') ?></li>
    <li><?= Html::a('Использование Pjax для нескольких блоков', 'pjax-example-4') ?></li>
    <li><?= Html::a('Отправка данных на сервер с помощью Pjax методом POST', 'pjax-example-5') ?></li>
    <li><?= Html::a('Pjax c параметром enablePushState и сессии(Session) между запросами', 'pjax-example-6') ?></li>
    <li><?= Html::a('GridView в Pjax', 'pjax-example-7') ?></li>
</ul>

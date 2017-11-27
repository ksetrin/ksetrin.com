<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

	NavBar::begin([
		'brandLabel' => '<img src="'.Yii::getAlias('@web').'/themes/ksetrin/images/logo.png">',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar navbar-default',
		],

	]);
	
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => [
			//['label' => 'Home', 'url' => ['/main/default/index']],
			['label' => 'Блог', 'url' => ['/blog/post/index'], 'options' => ['style'=> 'background: #0088DC;']],
            ['label' => 'Код', 'url' => ['/example/default/index'], 'options' => ['style'=> 'background: #0060DC;']],
			//['label' => 'Admin', 'url' => ['/admin/post/index']],
			//['label' => 'Проекты', 'url' => ['/project/default/index']],
			['label' => 'Автор', 'url' => ['/main/default/about'], 'options' => ['style'=> 'background: #004BAD;']],
			['label' => 'Контакты', 'url' => ['/main/contact/index'], 'options' => ['style'=> 'background: #1D138B;']],
		],
		'encodeLabels' => true,
		'activateParents' => true,
        'activateItems' => true,
	]);
	NavBar::end();
?>
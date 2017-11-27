<?php
namespace webroot\themes\ksetrin;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/ksetrin/';
    public $baseUrl = '@web/themes/ksetrin/';
    public $css = [
        'css/bootstrap-theme.css',
		'css/style.css',
        //'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css',
        //'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        //'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
    ];
    public $js = [

    ];
    public $jsOptions = array( //http://www.yiiframework.com/doc-2.0/yii-web-view.html#registerJsFile()-detail
        'position' => \yii\web\View::POS_HEAD
    );
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

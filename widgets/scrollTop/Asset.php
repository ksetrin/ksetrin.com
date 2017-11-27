<?php

namespace app\widgets\scrollTop;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/widgets/scrollTop';
    public $css = [
        'css/scroll-top.css',
    ];
    public $js = [
        'js/scroll-top.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
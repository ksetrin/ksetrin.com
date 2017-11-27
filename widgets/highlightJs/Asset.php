<?php
//https://highlightjs.org/download/
namespace app\widgets\highlightJs;

class Asset extends \yii\web\AssetBundle
{
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/styles/idea.min.css',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js',
    ];
    public $depends = [
    ];
}
<?php
//https://github.com/bluezed/yii2-scroll-top
namespace app\widgets\scrollTop;

use yii\helpers\Html;

class ScrollTop extends \yii\base\Widget
{
    public function init()
    {
        parent::init();
        $view = $this->getView();
        Asset::register($view);
    }

    public function run()
    {
        return Html::a(
            Html::tag('i','',['class'=>'glyphicon glyphicon-menu-up scroll-top-circle']),
            '#',
            ['id'=>'btn-top-scroller', 'class'=>'scroll-top']
        );
    }
}
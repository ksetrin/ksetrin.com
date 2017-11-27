<?php
namespace app\widgets\highlightJs;

class HighlightJs extends \yii\base\Widget
{
    public function init() //init() должен содержать код, выполняющий нормализацию свойств виджета
    {
        parent::init();
        $view = $this->getView();
        Asset::register($view);
        $view->registerJs("hljs.initHighlightingOnLoad();", $view::POS_END);
    }

    public function run() //метод run() - код, возвращающий результат рендеринга виджета. Результат рендеринга может быть выведен непосредственно с помощью конструкции "echo" или же возвращен в строке методом run().
    {
    }
}
<?php

namespace app\modules\example;

use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\example\controllers';

    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }
}

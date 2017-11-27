<?php

namespace app\modules\admin;

use Yii;
use yii\base\ActionEvent;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
/*
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
*/
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function beforeAction($action)
    {
        if (\Yii::$app->user->isGuest || \Yii::$app->getUser()->getIdentity()->getAuthKey() !== "test100key") //&& \Yii::$app->getRequest()->url !== Url::to(\Yii::$app->getUser()->loginUrl)
        {
            \Yii::$app->getResponse()->redirect(\Yii::$app->getUser()->loginUrl);
        }
        $event = new ActionEvent($action);
        $this->trigger(self::EVENT_BEFORE_ACTION, $event);
        return $event->isValid;
    }

}

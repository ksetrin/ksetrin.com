<?php

namespace app\modules\example\controllers;

use Yii;
use yii\web\Controller;

class PjaxController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }

    public function actionPjaxExample1()
    {
        return $this->render('pjax_example_1', [
            'time' => date('H:i:s'),
        ]);
    }

    public function actionPjaxExample2()
    {
        return $this->render('pjax_example_2', [
            'time' => date('H:i:s'),
        ]);
    }

    public function actionPjaxExample3($action = 'time')
    {
        if ($action === 'time') {
            return $this->render('pjax_example_3', [
                'data' => date('H:i:s'),
            ]);
        } else {
            return $this->render('pjax_example_3', [
                'data' => date('Y-M-d'),
            ]);
        }
    }

    public function actionPjaxExample4($action = 'string')
    {
        $security = new \yii\base\Security();
        if ($action === 'string') {
            return $this->render('pjax_example_4', [
                'string' => $security->generateRandomString(),
            ]);
        } else {
            return $this->render('pjax_example_4', [
                'key' => $security->generateRandomKey(),
            ]);
        }
    }

    public function actionPjaxExample5()
    {
        return $this->render('pjax_example_5', [
            'md5' => md5(Yii::$app->request->post('string'))
        ]);
    }

    public function actionPjaxExample6($vote = null)
    {
        $votes = Yii::$app->session->get('votes', 0);
        if ($vote === 'up') {
            Yii::$app->session->set('votes', ++$votes);
        } elseif ($vote === 'down') {
            Yii::$app->session->set('votes', --$votes);
        }
        return $this->render('pjax_example_6');
    }

    public function actionPjaxExample7()
    {
        $array = [
            ['id'=>1, 'name'=>'Sam','age'=> '21', 'height'=> '190'],
            ['id'=>2, 'name'=>'John','age'=> '34', 'height'=> '156'],
            ['id'=>3, 'name'=>'Alex','age'=> '29', 'height'=> '178'],
            ['id'=>4, 'name'=>'David','age'=> '31', 'height'=> '188'],
            ['id'=>5, 'name'=>'Max','age'=> '26', 'height'=> '184'],
        ];

        $searchModel = [
            'age' => Yii::$app->request->getQueryParam('filterage', ''),
        ];

        $filteredData = array_filter($array, function($item) use ($searchModel) {
            if (!empty($searchModel['age'])) {
                if ($item['age'] == $searchModel['age']) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        });

        $dataProvider = new \yii\data\ArrayDataProvider([
            'key' => 'id',
            'allModels' => $filteredData,
            'sort' => [
                'attributes' => ['name'],
            ],
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);

        return $this->render('pjax_example_7', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}

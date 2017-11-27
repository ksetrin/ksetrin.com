<?php

namespace app\modules\blog\controllers;
<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\blog\models\Tag;
use yii\data\ActiveDataProvider;

/**
 * TagController implements the CRUD actions for Tag model.
 */
class TagController extends \yii\web\Controller
{


    /**
     * Lists all Tag models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Tag::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tag model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Tag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\blog\models\Post;
use app\modules\blog\models\PostSearch;

use app\modules\blog\models\Tag;
use app\modules\blog\models\TagPost;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = [
            'defaultPageSize' => 12,
            'pageSizeLimit' => [12, 100],
        ];
        $dataProvider->sort = [
            'defaultOrder' => [
                'post_id' => SORT_DESC,
                //'title' => SORT_ASC,
            ]
        ];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($post_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($post_id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
				'tags' => Tag::find()->all(),
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($post_id)
    {
        $model = $this->findModel($post_id);

        if ($model->load(Yii::$app->request->post()) && $model->save() ) {
            return $this->redirect(['view', 'post_id' => $model->post_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'tags' => Tag::find()->all(),
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($post_id)
    {
        $this->findModel($post_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($post_id)
    {
        if (($model = Post::findOne($post_id)) !== null) {
            return $model;
        } else {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }
    }
}

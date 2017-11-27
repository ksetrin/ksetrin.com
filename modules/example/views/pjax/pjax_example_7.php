<?php
/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;

echo app\widgets\highlightJs\HighlightJs::widget();

$this->title = 'Пример Pjax 7';
$this->params['breadcrumbs'][] = ['label' => 'Pjax', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .preview_block {border: 1px solid #000;padding: 10px;font-size: 16px;}
</style>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<h1>GridView в Pjax (Yii2)</h1>

<a href="/blog/post/use-pjax-widget-in-yii2-with-examples#pjax-example-7">&larr; вернуться к статье</a>

<h2>Controller</h2>
<?php
$code = <<<'CODE'
<?php
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
?>
CODE;
echo "<pre><code>".htmlspecialchars($code)."</code></pre>";
?>

<h2>View</h2>
<?php
$code = <<<'CODE'
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'value' => 'name',
            ],
            [
                'attribute' => 'age',
                'filter' => '<input class="form-control" name="filterage" value="'. $searchModel['age'] .'" type="text">',
                'value' => 'age',
            ],
            'height:ntext',
        ],
    ]); ?>
<?php Pjax::end(); ?>
CODE;
echo "<pre><code class='php'>".htmlspecialchars($code)."</code></pre>";
?>

<h2>Пример</h2>
<div class="preview_block">
    <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                [
                    'attribute' => 'name',
                    'value' => 'name',
                ],
                [
                    'attribute' => 'age',
                    'filter' => '<input class="form-control" name="filterage" value="'. $searchModel['age'] .'" type="text">',
                    'value' => 'age',
                ],
                'height:ntext',
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>

<div>
    <div id="hypercomments_widget"></div>
    <script type="text/javascript">
        _hcwp = window._hcwp || [];
        _hcwp.push({widget:"Stream", widget_id: 75492});
        (function() {
            if("HC_LOAD_INIT" in window)return;
            HC_LOAD_INIT = true;
            var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
            var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
            hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/75492/"+lang+"/widget.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hcc, s.nextSibling);
        })();
    </script>
    <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>
</div>
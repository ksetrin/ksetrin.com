<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;

echo app\widgets\highlightJs\HighlightJs::widget();

$this->title = 'Пример Pjax 3';
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

<h1>Навигация с использованием виджета Pjax (Yii2)</h1>

<a href="/blog/post/use-pjax-widget-in-yii2-with-examples#pjax-example-3">&larr; вернуться к статье</a>

<h2>Controller</h2>
<?php
$code = <<<'CODE'
<?php
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
?>
CODE;
echo "<pre><code>".htmlspecialchars($code)."</code></pre>";
?>

<h2>View</h2>
<?php
$code = <<<'CODE'
<?php Pjax::begin(); ?>
    <?= Html::a(
        'Показать время',
        ['/example/pjax/pjax-example-3?action=time'],
        ['class' => 'btn btn-lg btn-primary']
    ) ?>
    <?= Html::a(
        'Показать дату',
        ['/example/pjax/pjax-example-3?action=date'],
        ['class' => 'btn btn-lg btn-success']
    ) ?>
    <p>Ответ сервера: <?= $data ?></p>
<?php Pjax::end(); ?>
CODE;
echo "<pre><code class='php'>".htmlspecialchars($code)."</code></pre>";
?>

<h2>Пример</h2>
<div class="preview_block">
    <?php Pjax::begin(); ?>
        <?= Html::a(
            'Показать время',
            ['/example/pjax/pjax-example-3?action=time'],
            ['class' => 'btn btn-lg btn-primary']
        ) ?>
        <?= Html::a(
            'Показать дату',
            ['/example/pjax/pjax-example-3?action=date'],
            ['class' => 'btn btn-lg btn-success']
        ) ?>
        <p>Ответ сервера: <?= $data ?></p>
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
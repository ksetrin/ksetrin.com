<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;

echo app\widgets\highlightJs\HighlightJs::widget();

$this->title = 'Пример Pjax 1';
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

<h1>Обновление серверного времени виджетом Pjax (Yii2)</h1>

<a href="/blog/post/use-pjax-widget-in-yii2-with-examples#pjax-example-1">&larr; вернуться к статье</a>

<h2>Controller</h2>
<?php
$code = <<<'CODE'
<?php
    public function actionPjaxExample1()
    {
        return $this->render('pjax_example_1', [
            'time' => date('H:i:s'),
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
    <?= Html::a(
        'Обновить',
        ['/example/pjax/pjax-example-1'],
        ['class' => 'btn btn-lg btn-primary']
    ) ?>
    <p>Время сервера: <?= $time ?></p>
<?php Pjax::end(); ?>
CODE;
echo "<pre><code class='php'>".htmlspecialchars($code)."</code></pre>";
?>

<h2>Пример</h2>
<div class="preview_block">
    <?php Pjax::begin(); ?>
        <?= Html::a(
            'Обновить',
            ['/example/pjax/pjax-example-1'],
            ['class' => 'btn btn-lg btn-primary']
        ) ?>
        <p>Время сервера: <?= $time ?></p>
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
<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;

echo app\widgets\highlightJs\HighlightJs::widget();

$this->title = 'Пример Pjax 4';
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

<h1>Использование Pjax для нескольких блоков (Yii2)</h1>

<a href="/blog/post/use-pjax-widget-in-yii2-with-examples#pjax-example-4">&larr; вернуться к статье</a>

<h2>Controller</h2>
<?php
$code = <<<'CODE'
<?php
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
?>
CODE;
echo "<pre><code>".htmlspecialchars($code)."</code></pre>";
?>

<h2>View</h2>
<?php
$code = <<<'CODE'
<?php Pjax::begin(); ?>
    <?= Html::a(
        'Случайная строка',
        ['/example/pjax/pjax-example-4?action=string'],
        ['class' => 'btn btn-lg btn-primary']
    ) ?>
    <p>Ответ сервера: <?=(isset($string)) ? $string : '' ?></p>
<?php Pjax::end(); ?>

<?php Pjax::begin(); ?>
    <?= Html::a(
        'Случайный ключ',
        ['/example/pjax/pjax-example-4?action=key'],
        ['class' => 'btn btn-lg btn-success']
    ) ?>
    <p>Ответ сервера: <?=(isset($key)) ? $key : '' ?></p>
<?php Pjax::end(); ?>
CODE;
echo "<pre><code class='php'>".htmlspecialchars($code)."</code></pre>";
?>

<h2>Пример</h2>
<div class="preview_block">
    <?php Pjax::begin(); ?>
        <?= Html::a(
            'Случайная строка',
            ['/example/pjax/pjax-example-4?action=string'],
            ['class' => 'btn btn-lg btn-primary']
        ) ?>
        <p>Ответ сервера: <?=(isset($string)) ? $string : '' ?></p>
    <?php Pjax::end(); ?>
</div>
<br><br>
<div class="preview_block">
    <?php Pjax::begin(); ?>
        <?= Html::a(
            'Случайный ключ',
            ['/example/pjax/pjax-example-4?action=key'],
            ['class' => 'btn btn-lg btn-success']
        ) ?>
        <p>Ответ сервера: <?=(isset($key)) ? $key : '' ?></p>
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
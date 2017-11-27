<?php
use yii\helpers\Html;
use webroot\themes\ksetrin\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= Html::encode($this->title) ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/favicon.ico">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8635764928094374",
            enable_page_level_ads: true
        });
    </script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <?=$this->render('_topnavbar.php');?>
        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">
			    &copy; 2015 - <?= date('Y') ?>, Евсиков Петр, <a href="http://ksetrin.com/">ksetrin.com</a>
				<?php
					if (!Yii::$app->user->isGuest) {
                        echo Html::a('Logout '.Yii::$app->user->identity->username, ['/user/default/logout'], ['data-method' => 'post']);
                        echo '&nbsp;';
                        echo Html::a('admin', ['/admin/default/index']);

                        //echo "<a href='".Yii::getAlias('@web')."/user/default/logout' data-method='post'>Logout (".Yii::$app->user->identity->username.")</a> / <a href='".Yii::getAlias('@web')."/admin/default/index'>admin</a>";
					}
				?>
			</p>
            <p class="pull-right">
                <?=$this->render('_counters.php');?>
                <?php //=Yii::powered(); ?>
			</p>
        </div>
    </footer>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 67486818, {expanded: "0", disableButtonTooltip: "1"});
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

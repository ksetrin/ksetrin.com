<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\modules\main\models\ContactForm */

$this->title = 'Как связаться';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
</div>

<div class="row">

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="col-lg-6 alert alert-success">
            Сообщение успешно отправлено. Ждите ответа.
        </div>
    <?php else: ?>
        <div class="col-lg-6">
            <p>
                Раньше тут была форма, но теперь ее нет.
<!--                Можно написать сообщение прямо здесь и сейчас! Заполните форму ниже и нажмите кнопку "Отправить".-->
            </p>
<!--            --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!--                --><?//= $form->field($model, 'name') ?>
<!--                --><?//= $form->field($model, 'email') ?>
<!--                --><?//= $form->field($model, 'subject') ?>
<!--                --><?//= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
<!--                --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                    'captchaAction' => '/main/contact/captcha',
//                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                ]) ?>
<!--                <div class="form-group">-->
<!--                    --><?//= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!--            --><?php //ActiveForm::end(); ?>
        </div>
    <?php endif; ?>
    <div class="col-lg-6">
        <p>Где меня можно найти:</p>
        <p><strong>Skype:</strong> ksetrin</p>
        <p><strong>E-mail:</strong> <a href="mailto:ksetrinn@gmail.com">ksetrinn@gmail.com</a></p>
        <p><strong>Facebook:</strong> <a href="http://www.facebook.com/peter.evsikov">Евсиков Петр</a></p>
    </div>
</div>

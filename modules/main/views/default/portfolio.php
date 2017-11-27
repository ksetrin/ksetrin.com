<?php
/* @var $this yii\web\View */
$this->title = 'Евсиков Петр - Портфолио';
?>



<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myModalLabel">Изображение страницы сайта</h4>
            </div>
            <div class="modal-body">
                <img src="" id="imagepreview" style="width: 100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('document').ready(function(){
        $(".pop").on("click", function() {
            $('#imagepreview').attr('src', $(this).find('.imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
            return false;
        });
    });
</script>

<style>
    .col-md-7 {height: 150px; overflow: hidden;}
    .col-md-7 img{width: 100%;}
    .portfolio .row {margin-bottom: 15px;}
    .modal-dialog {width: 800px;margin: 30px auto;}
</style>

<h3>Некоторые проекты</h3>
<div class="portfolio">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJRTJ5ZnY3UUNnUUE/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://ksetrin.com" target="_blank">Ksetrin.com, личный сайт</a></h4>
            <p>Это мой личный проект, который разрабатывается мною на Yii framework 2. На этом сайте сейчас есть блог, контакты, страница автора. В дальнейшем будут появляться и другие разделы. Следующим появится раздел с проектами.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJcmkxdFpVdnNEdFk/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://uzgc.ru" target="_blank">Уральский завод горячего цинкования</a></h4>
            <p>Сайт рассказывает о деятельности завода, основные направления, новости. На сайте реализованы модули: статические страницы до бесконечного уровня вложенности, блог для публикации статей, интерактивный раздел с вопросами, контакты с картой.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJU213UG1fVEVkclk/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://canwant.com" target="_blank">CanWant, социальная сеть для обмена навыками</a></h4>
            <p>CanWant - это социальная сеть для обмена навыками. Писали на Ruby On Rails вместе с другом. Много раз переделывали, но в итоге сделали. На проекте реализованы возможности добавлять навыки, обмениваться, искать. Личный профиль пользователя, обмен сообщения меж пользователями. Сейчас там немного не презентабельный дизайн, так как проект переделали под приложение VK.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJaWd6SVhTTWt1OWc/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://desturm.com" target="_blank">Дештурм, сайт-портфолио</a></h4>
            <p>Сайт-портфолио, разработан в 2010 году. Сайт разработан на нативном PHP. Верстка по макету из PS, немного javascript(jquery), CSS и HTML. Администратор сайта имеет возможность добавления/удаления работ из администраторской зоны, а также управление разделами сайта.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJd1l6d2tYYy1NekU/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://deparabellum.com" target="_blank">Парабеллум, сборник военных мистических рассказов</a></h4>
            <p>Небольшой проект представляющий аудиокнигу с рассказами. На сайте можно послушать. Тут все очень просто. Несколько статических страниц, контакты, и раздел с аудиокниой. В разработке использована самописная CMS.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJWnlXODNKeGdKRFk/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://imir174.ru" target="_blank">Имир, интернет магазин инженерных решений</a></h4>
            <p>Интернет-магазин или интернет-витрина, кому как больше нравится. Сайт с каталогом продукции компании, есть фильтры по названию, брендам, цене, поиск по сайту. Раздел с новостями, статьи, контакты. Магазин не предполагает регистрации пользователей, корзина работает на cookie.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJazNNQ2w0Vm9ZOFU/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://sportsmen.tkd-chel.ru/" target="_blank">Веб-сервис для спортсменов школы СДЮСШОР Конас</a></h4>
            <p>Цель проекта - дать родителям возможность наблюдать за спортивными результатами их детей. Т.е. тренеры вносят информацию на сайт, родители заходят и видят все результаты своего ребенка. Сервис написан на Yii 1.16. Хотя возможности этого сервиса несколько обширнее, чем описано в цели. Кроме этого продумана и реализована система для уведомления родителей о важных событиях школы удобным способом. База формируется из excel-файлов, что упрощает внесение информации для тренеров.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJUEVlcXpFeW1OOTQ/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://prof-voda.ru" target="_blank">Проф-вода, оборудование для фонтанов</a></h4>
            <p>Это еще один проект от компании ИМИР. Реализован на той же системе, что сайт Имир, но есть некоторые изменения. Они коснулись частично верстки проекта, еще переработана система импорта данных на сайт. Есть возможность загружать excel-файл с товарами магазина.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <a class="pop" href="#"><img src="http://googledrive.com/host/0B8eQPRGERKcJLU1HdFowbWI3eVU/" class="imageresource"></a>
        </div>
        <div class="col-md-5 col-sm-12">
            <h4><a href="http://мед-всем.рф" target="_blank">Доставка меда по всей России (лэндинг)</a></h4>
            <p>Одностраничный сайт, где я участвовал как front-end разработчик. Задача была реализовать все анимационные действия с объектами, всплывающие формы.</p>
        </div>
    </div>
</div>
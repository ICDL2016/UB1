<?php $title = "Контакты" ?>
<?php require_once '_header.php'?>

<div class="about-line"></div>

<div class="study-maintitle contacts-maintitle">
    <strong>Контакты</strong>
</div>

<section class="form-wrap">
    <div class="container">
        <form action="#" class="form">
            <div class="form-body">
                <input class="form-input form-input__name" type="text" placeholder="Имя*" name="name">
                <span class="form-input__span form-input__span-name">Поле "Имя" обязательно к заполнению</span>
                <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
                <input class="form-input form-input__email" type="text" placeholder="Телефон" name="phone">
                <textarea class="contacts-textarea" rows="4" name="message" placeholder="Сообщение"></textarea>

                <div class="form-checkbox__block">
                    <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                    <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
                </div>
            </div>

            <div class="form-bottom">
                <span class="form-bottom__top contacts-submit">Отправить</span>
            </div>
        </form>
    </div>
</section>

<section class="contacts-block">
    <div class="container">

        <div class="contacts-phone__title">Многоканальный телефон</div>
        <div class="contacts-phone">+7 999 333-12-97</div>

        <div class="contacts-managers__title">Менеджеры учебного отдела:</div>
        <div class="contacts-managers">
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Анна</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Евгений</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Татьяна</div>
            </div>
        </div>

        <div class="contacts-address__title">Адрес и схема проезда:</div>
        <div class="contacts-address">г. Москва, (ст. метро Белорусская),
            ул. Бутырский Вал, дом 10, <br>
            Бизнес-центр "Белая площадь"
        </div>
    </div>

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7230bd9a725108e3a079ce80c4f7407b4cfc38c1f44eee3397cf1b2b041ec70b&amp;width=100%25&amp;height=541&amp;lang=ru_RU&amp;scroll=false"></script>


</section>

<div class="contacts-gallery">
    <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/1.jpg)"></a>
    <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/2.jpg)"></a>
    <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/3.jpg)"></a>
    <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/4.jpg)"></a>
    <a href="img/contacts/5.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/5.jpg)"></a>
    <a href="img/contacts/6.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/6.jpg)"></a>
    <a href="img/contacts/7.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/7.jpg)"></a>
    <a href="img/contacts/8.jpg" class="fancybox-buttons" data-fancybox-group="button" style="background-image: url(img/contacts/8.jpg)"></a>
</div>

<div style="margin-bottom: 30px"></div>

<?php require_once '_start-button.php'?>
<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_footer.php'?>
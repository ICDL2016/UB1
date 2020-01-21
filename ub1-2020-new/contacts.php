<?php require_once '_header.php'; ?>

<div class="container contacts-container">
  <div class="contacts-top">
    <div class="contacts-form__wrapper">
      <div class="contacts-title">
        <img src="img/contacts/envelope.png" alt="envelope">
        <span>Контакты</span>
      </div>
      <form class="contacts-form">
        <input class="form-input__name contacts-form__name" type="text" name="name" placeholder="Имя*">
        <div class="form-input__span form-input__span-email form-input__span-password">Поле "Пароль" обязательно для
          заполнения
        </div>
        <input class="form-input__email contacts-form__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать
          правильный электронный адрес (например, example@mail.ru)
        </div>
        <input class="form-input__password contacts-form__password" type="text" name="phone" placeholder="Введите Ваш телефон">
        <textarea name="comment" id="" cols="30" rows="5" placeholder="Сообщение"></textarea>
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
        <button class="button contacts-button">Отправить</button>
      </form>
    </div>

    <div class="contacts-img">
      <img src="img/contacts/contacts-img.png" alt="image">
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="contacts">
    <div class="contacts-phone">
      <img src="img/contacts/phone.png" alt="phone">
      <div class="contacts-text">
        <span>Многоканальный телефон</span>
        <a href="tel:89993331297">+7 999 333-12-97</a>
      </div>
    </div>

    <div class="contacts-managers">
      <div class="contacts-managers__title">Менеджеры учебного отдела:</div>
      <div class="contacts-managers__block">
        <div class="contacts-manager">
          <div class="contacts-manager__img">
          </div>
          <div class="contacts-manager__name">Анна</div>
        </div>
        <div class="contacts-manager">
          <div class="contacts-manager__img">
          </div>
          <div class="contacts-manager__name">Анна</div>
        </div>
        <div class="contacts-manager">
          <div class="contacts-manager__img">
          </div>
          <div class="contacts-manager__name">Анна</div>
        </div>
      </div>
    </div>

    <div class="contacts-address">
      <span>Адрес и схема проезда:</span>
      г. Москва, (ст. метро Белорусская), ул. Бутырский Вал, дом 10,
      Бизнес-центр «Белая Площадь»
    </div>
  </div>
</div>

<div class="contacts-gallery">
  <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/1.jpg" alt="photo"></a>
  <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/2.jpg" alt="photo"></a>
  <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/3.jpg" alt="photo"></a>
  <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/4.jpg" alt="photo"></a>
  <a href="img/contacts/5.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/5.jpg" alt="photo"></a>
  <a href="img/contacts/6.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/6.jpg" alt="photo"></a>
  <a href="img/contacts/7.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/7.jpg" alt="photo"></a>
  <a href="img/contacts/8.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/8.jpg" alt="photo"></a>
  <a href="img/contacts/5.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/5.jpg" alt="photo"></a>
  <a href="img/contacts/6.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/6.jpg" alt="photo"></a>
  <a href="img/contacts/7.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/7.jpg" alt="photo"></a>
  <a href="img/contacts/8.jpg" class="fancybox-buttons" data-fancybox="gallery"><img src="img/contacts/8.jpg" alt="photo"></a>
</div>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1f2cb066f8eb04aa97fe9edbac828af56976f5cff13d5ce5100b0e627b564557&amp;width=100%25&amp;height=541&amp;lang=ru_RU&amp;scroll=false"></script>

<div class="start contacts-start">
  <div class="container">
    <div class="start-block contacts-start__block">
      <div class="start-block__icon">
        <img src="img/start/start-icon.png" alt="icon" class="start-icon">
      </div>
      <div class="start-text contacts-start__text">
        Получите новую специальность
        в <span>Университете Бизнеса №1
        и мы поможем вам найти
        престижную и высокооплачиваемую работу</span> в выбранной
        вами сфере деятельности
      </div>
      <div class="button start-button">
        Выбрать программу <br>
        <span>Начать обучение бесплатно</span>
      </div>
    </div>
  </div>
</div>

<?php require_once '_footer.php';?>
<?php require_once '_scripts.php';?>
<script>
    // псевдовалидация

    let emptyTop = false;
    let emptyBottom = false;
    $('.form-input__name').on('click', function () {
        emptyTop = true;
        if (emptyBottom === true && ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1)) {
            $(this).parent().children('.form-input__span-email').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-name').hide();
        $(this).parent().children('.form-input__name').removeClass('border-red');
    });

    $('.form-input__email').on('click', function () {
        emptyBottom = true;
        if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
            $(this).parent().children('.form-input__span-name').show();
        }
    }).on('input', function () {
        $(this).parent().children('.form-input__span-email').hide();
        $(this).parent().children('.form-input__email').removeClass('border-red');
    });

    $('.contacts-button').on('click', function () {
        event.preventDefault();
        let send = true;

        if ($(this).parent().children('.form-input__name').val().length === 0) {
            $(this).parent().children('.form-input__span-name').show();
            $(this).parent().children('.form-input__name').addClass('border-red');
            send = false;
        }

        if ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1) {
            $(this).parent().children('.form-input__span-email').show();
            $(this).parent().children('.form-input__email').addClass('border-red');
            send = false;
        }

        if (send === true) {
            $(this).parent().submit();
        }
    });
</script>
<?php require_once '_end.php';?>

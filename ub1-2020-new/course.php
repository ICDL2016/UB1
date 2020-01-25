<?php require_once '_header.php'; ?>
  <div class="video course-video">
    <div class="container position-relative course-video__container">
      <div class="video-wrapper course-video__wrapper">
        <div class="video-play" onclick="play1(event)">
          <?php require_once 'img/video/play.svg'; ?>
        </div>

        <div class="course-video__small">Курс обучения:</div>
        <div class="video-title course-video__title">
          <span>Менеджмент, управление организацией и персоналом</span>
        </div>
      </div>
    </div>
    <div id="divPlayer1"></div>
  </div>

  <div class="course-form">
    <div class="course-form__block">
      <div class="course-prices">
        <div class="course-price">
          <img src="img/course/form-icon1.png" alt="icon">
          <div>360 ч.</div>
        </div>
        <div class="course-price">
          <img src="img/course/form-icon2.png" alt="icon">
          <div>29400 р.
            <span>59000</span>
          </div>
        </div>
      </div>

      <div class="course-form__border">
        <img src="img/course/course-border.png" alt="border">
      </div>

      <form class="course-form__form">
        <input class="form-input__name" type="text" name="name" placeholder="Имя*">
        <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для
          заполнения
        </div>
        <input class="form-input__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать
          правильный электронный адрес (например, example@mail.ru)
        </div>
        <input class="form-input__phone" type="text" name="phone" placeholder="Введите Ваш телефон">
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
        <button class="button course-button">
          <span>Начать обучение бесплатно</span>
          <small>Посмотреть мой образец документа об обучении</small>
          <small>сегодня 25.04.2019</small>
        </button>
        <div class="course-form__small">
          Нажмите на кнопку «Начать обучение бесплатно» и вы
          сразу перейдете к дистанционному курсу обучения
        </div>
      </form>
    </div>
  </div>

  <div class="fast">
    <div class="container">
      <div class="title course-title">
        Получи официальный диплом в сфере менеджмента,
        управления организацией и персоналом в кратчайшие
        сроки и начни применять свои знания на практике
      </div>

      <div class="fast-about">
        <img src="img/fast/vertical-line.png" alt="line">
        <span>Этот содержательный курс даст вам именно те знания которые вы ищите.
      Пройдите обучение в Новом Бизнес Университете получите престижный диплом и
      станьте высокооплачиваемым специалистом в интересной Вам сфере деятельности.
      </span>
      </div>

      <div class="diploma-img fast-img">
        <a href="img/diploma/diploma1.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma1.png" alt="photo">
        </a>
        <a href="img/diploma/diploma1.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma1.png" alt="photo">
        </a>
        <a href="img/diploma/diploma1.png" class="fancybox-buttons" data-fancybox="gallery">
          <img src="img/diploma/diploma1.png" alt="photo">
        </a>
      </div>

      <div class="fast-about">
        <img src="img/fast/vertical-line.png" alt="line">
        <span>Этот содержательный курс даст вам именно те знания которые вы ищите.
      Пройдите обучение в Новом Бизнес Университете получите престижный диплом и
      станьте высокооплачиваемым специалистом в интересной Вам сфере деятельности.
      </span>
      </div>
    </div>
  </div>

  <div class="course-program">
    <div class="course-video__small">Программа курса обучения:</div>
    <div class="title course-program__title">Менеджмент, управление организацией и персоналом</div>

    <div class="course-program__blocks">
      <?php for ($i = 0; $i < 8; $i++) : ?>
        <div class="course-program__block">
          <div class="course-program__img">
            <img src="img/course/program<?= rand(1, 2); ?>.jpg" alt="program">
          </div>
          <div class="course-program__info">
            <div class="course-program__header">Часть <?= $i + 1 ?></div>
            <div class="course-program__descr">Санитарные нормы на предприятии общественного питания</div>
            <a class="course-program__more" href="">Подробнее</a>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>

<?php require_once '_diploma.php'; ?>
<?php require_once '_stats.php'; ?>
<?php require_once '_advantages.php'; ?>
  <div class="start course-start">
    <div class="container">
      <div class="start-block">
        <div class="start-block__icon course-start__icon">
          <img src="img/start/start-icon.png" alt="icon" class="start-icon">
        </div>
        <div class="start-text course-start__text">
          Пройдите обучение по курсу <span>Менеджмент, управление организаций и персоналом</span> и мы поможем вам найти
          престижную и высокооплачиваемую работу в данной сфере деятельности
        </div>

        <img src="img/course/course-girl.png" alt="photo" class="start-photo course-start__photo">
      </div>
    </div>
  </div>
<?php require_once '_clients.php'; ?>
<?php require_once '_reviews.php'; ?>

  <div class="people">
    <img src="img/people.png" alt="people">
  </div>

  <div class="course-form course-form__bottom">
    <div class="course-video__small">Курс обучения:</div>
    <div class="title course-program__title">Менеджмент, управление организацией и персоналом</div>
    <div class="course-form__block">
      <div class="course-prices">
        <div class="course-price">
          <img src="img/course/form-icon1.png" alt="icon">
          <div>360 ч.</div>
        </div>
        <div class="course-price">
          <img src="img/course/form-icon2.png" alt="icon">
          <div>29400 р.
            <span>59000</span>
          </div>
        </div>
      </div>

      <div class="course-form__border">
        <img src="img/course/course-border.png" alt="border">
      </div>

      <form class="course-form__form">
        <input class="form-input__name" type="text" name="name" placeholder="Имя*">
        <div class="form-input__span form-input__span-name">Поле "Имя" обязательно для
          заполнения
        </div>
        <input class="form-input__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать
          правильный электронный адрес (например, example@mail.ru)
        </div>
        <input class="form-input__phone" type="text" name="phone" placeholder="Введите Ваш телефон">
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
        <button class="button course-button">
          <span>Начать обучение бесплатно</span>
          <small>Посмотреть мой образец документа об обучении</small>
          <small>сегодня 25.04.2019</small>
        </button>
        <div class="course-form__small">
          Нажмите на кнопку «Начать обучение бесплатно» и вы
          сразу перейдете к дистанционному курсу обучения
        </div>
      </form>
    </div>
  </div>

  <div class="offer">
    <div class="course-video__small">Другие курсы в сфере</div>
    <div class="title course-program__title">Менеджмент, управление организацией и персоналом</div>
    <div class="offer-blocks">
      <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="offer-block">
          <div class="offer-img"
               style="background: url(img/offer/offer-block<?= rand(1, 4); ?>.png) center no-repeat; background-size: cover; background-position-y: 0"></div>

          <div class="offer-title">
            ПРОЙДИТЕ ОБУЧЕНИЕ ПО ЧАСТЯМ В УДОБНОМ ДЛЯ ВАС РИТМЕ
          </div>

          <div class="offer-info">
            <i class="fa fa-clock-o"></i>
            <div class="offer-hours">1100<span>часов</span></div>
            <div class="offer-price">
              <span>19500</span>
              <i class="fa fa-ruble"></i>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
  <script>
      //video
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player1;

      function onYouTubeIframeAPIReady() {
          player1 = new YT.Player('divPlayer1', {
              height: '350',
              width: '100%',
              videoId: 'd8Oc90QevaI',
          });
      }

      function play1(event) {
          $('.course-video__container').hide();
          $('#divPlayer1').show();
          $('iframe').css('display', 'block');
          player1.playVideo();
      }
  </script>

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

      $('.course-button').on('click', function () {
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
<?php require_once '_end.php'; ?>
<div class="video">
  <div class="container position-relative">
    <div class="video-wrapper">
      <div class="video-play" onclick="play1(event)">
        <?php require_once 'img/video/play.svg'; ?>
      </div>

      <div class="video-title">
        <span>Выберите программу обучения</span>
        <img src="img/video/video-arrow.png" alt="arrow" class="video-title__arrow">
      </div>

      <form action="" class="video-form">
        <input type="text" name="q" placeholder="Найти курс обучения" class="video-form__input">
        <i class="fa fa-search"></i>
      </form>

      <div class="video-all">
        <div class="video-all__top">
          Все сферы деятельности
          <div class="video-all__arrow">
            <img src="img/video/video-more.png" alt="more">
          </div>
        </div>

        <ul class="video-all__list">
          <li><a href="">Вариант 1</a></li>
          <li><a href="">Вариант 2</a></li>
          <li><a href="">Вариант 3</a></li>
        </ul>
      </div>

      <img src="img/video/video-girl.png" alt="girl" class="video-pic">
    </div>
  </div>
  <div id="divPlayer1"></div>
</div>
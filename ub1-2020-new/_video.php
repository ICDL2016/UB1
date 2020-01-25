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
          <?php $arr = ['слово', 'длинное слово', 'длинный-предлинный заголовок', 'самый длинный заголовок из всех возможных'];
          for($i=1; $i<25; $i++) :?>
            <li><a href="">Вариант <?= $i . ' ' . $arr[rand(0,count($arr)-1)];?></a></li>
          <?php endfor; ?>
        </ul>
      </div>

      <img src="img/video/video-girl.png" alt="girl" class="video-pic">
    </div>
  </div>
  <div id="divPlayer1"></div>
</div>

<div class="video-under">
  <div class="container">
    <div class="video-under__wrapper">
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
          <?php $arr = ['слово', 'длинное слово', 'длинный-предлинный заголовок', 'самый длинный заголовок из всех возможных'];
          for($i=1; $i<25; $i++) :?>
            <li><a href="">Вариант <?= $i . ' ' . $arr[rand(0,count($arr)-1)];?></a></li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
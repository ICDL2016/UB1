<div class="offer">
  <div class="offer-blocks">
    <?php for($i=0; $i<30; $i++) : ?>
    <div class="offer-block">
      <div class="offer-img" style="background: url(img/offer/offer-block<?=rand(1,4);?>.png) center no-repeat; background-size: cover; background-position-y: 0"></div>

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

  <div class="offer-more">
    <span class="offer-current"></span> из <span class="offer-all"></span> <a href="#">Смотреть еще</a>
  </div>
</div>
$(function () {

  //попапы
  $('.fancybox').fancybox();

  $('.js-nav-toggle').on('click', function (e) {
    //e.stopPropagation();
    setTimeout(function () {
      $grid.shuffle('update');
    }, 350)
    $('.nav').toggleClass('active');
    $('.content').toggleClass('active');
    if ($('.courses-dropdown').hasClass('active')) {
      $('.courses-dropdown').find('.courses-dropdown__list').slideToggle();
      $('.courses-dropdown').toggleClass('active');
    }
  });

  $('.js-courses-dropdown').on('click', function (e) {
    e.stopPropagation();
    if ($('.nav').hasClass('active')) {
      //setTimeout(function () {
      //  $grid.shuffle('update');
      //}, 350)
      $('.nav').toggleClass('active');
      $('.content').toggleClass('active');
    }

    $(this).closest('.courses-dropdown').find('.courses-dropdown__list').slideToggle();
    $(this).closest('.courses-dropdown').toggleClass('active');
  });

  if ($(window).width() < 768 && !$('.nav').hasClass('active')) {
    $('.js-nav-toggle').click()
  }
  $(window).resize(function () {
    if ($(window).width() < 768 && !$('.nav').hasClass('active')) {
      $('.js-nav-toggle').click()
    }
  });
  console.log($('.nav__in').outerHeight() , $('.content').outerHeight())
  //if ($('.nav__in').outerHeight() > $('.content').outerHeight()) {
  //  $('.nav').css('position', 'relative')
  //}

  ////фикс высоты курсов
  //if ($('.courses').length) {
  //  var coursesHeight = $(window).height();
  //  $('.courses').css('min-height',coursesHeight+'px');
  //  $(window).resize(function () {
  //    var coursesHeight = $(window).height();
  //    $('.courses').css('min-height',coursesHeight+'px');
  //  });
  //}

  var $grid = $('.courses-main');

  $grid.shuffle({
    itemSelector: '.courses-main__item',
    //sizer: $('.shufle-sizer')
  })
  setTimeout(function () {
    $grid.shuffle('update');
  }, 1)

  $(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
      $('body').addClass('scrolled')
    } else {
      $('body').removeClass('scrolled')
    }
  });

  var $overflow = $('.js-overflow');
  $overflow.append( ' <a class="toggle" href="#"><span class="open">Смотреть всю программу</span><span class="close">Свернуть программу</span></a>' );


  function createDots()
  {
    $overflow.dotdotdot({
      after: 'a.toggle'
    });
  }
  function destroyDots() {
    $overflow.trigger( 'destroy' );
  }
  createDots();

  $overflow.on(
    'click',
    'a.toggle',
    function() {
      $overflow.toggleClass( 'opened' );

      if ( $overflow.hasClass( 'opened' ) ) {
        destroyDots();
      } else {
        createDots();
      }
      return false;
    }
  );

  $('.js-sublist').on('click', function () {
    $(this).toggleClass('active').find('.sublist').toggleClass('active');
    if ($('.nav_new').length) {
      $('.main').css('padding-top', $('.header').height() + 5 + 'px')
    }
  });

  $('.nav__hidden').on('click', function() {
    if ($('.nav__sublist').is(':visible')) {
      $('.nav__sublist').hide();
    }
    else {
      $('.nav__sublist').show();
    }
  });

  $('.js-filter-link').on('click', function (e) {
    e.preventDefault();
    $(this).parent().addClass('active').siblings().removeClass('active')
    $('.courses-dropdown__link').removeClass('courses-dropdown__link_active');
    $(this).addClass('courses-dropdown__link_active');
    var $target = $(this).data('target');
    $("[data-section=" + $target + "]").addClass('active').show().siblings().fadeOut().removeClass('active')
    $('.nav__sublist').hide();
    $('.js-sublist-title').text($(e.target).text())

  })


  /*
  $(document).on('click', '.sublist__item', function(e){
    console.log('sdadsa');
  e.preventDefault();
  var item = $(this).find('a').data("target");
  $('.courses-main').fadeOut();
  $(".courses-main").each(function(){
    if ($(this).data("section") == item) {
      $(this).fadeIn();
    }
  });
  });
  */

  $('.js-filter-showall').on('click', function (e) {
    e.preventDefault();
    $('.courses-main').show().removeClass('active');
  });

})

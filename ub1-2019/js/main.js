var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {

    if($(window).width() < 451) {
        player1 = new YT.Player('divPlayer1', {
            height: '200',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if($(window).width() < 992) {
        player1 = new YT.Player('divPlayer1', {
            height: '300',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else {
        player1 = new YT.Player('divPlayer1', {
            height: '300',
            width: '600px',
            videoId: 'd8Oc90QevaI',
        });
    }

}

function play1(event) {
    event.target.parentElement.style.display = 'none';
    $('#divPlayer1').show();
    $('iframe').css('display', 'block');
    player1.playVideo();
}


// плавный скролл
$(function(){
    $('a[href^="#"]').on('click', function(event) {
        // отменяем стандартное действие
        event.preventDefault();
        var sc = $(this).attr("href"),
            dn = $(sc).offset().top;
        /*
        * sc - в переменную заносим информацию о том, к какому блоку надо перейти
        * dn - определяем положение блока на странице
        */
        $('html, body').animate({scrollTop: dn}, 1000);
        /*
    * 1000 скорость перехода в миллисекундах
    */
    });
});


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
});

$('.form-input__email').on('click', function () {
    emptyBottom = true;
    if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-email').hide();
});

$('.form-bottom').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-body').children('.form-input__span-name').show();
        send = false;
    }

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

$('.login-submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__password').val().length === 0) {
        $(this).parent().children('.form-body').children('.form-input__span-password').show();
        send = false;
    }

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

$('.remind-submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-body').children('.form-input__email').val().length === 0 || $(this).parent().children('.form-body').children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-body').children('.form-input__span-email').show();
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

// слайдер

$('.fancybox-buttons').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',

    prevEffect : 'none',
    nextEffect : 'none',

    closeBtn  : false,

    helpers : {
        title : '',
        buttons	: {}
    },

    afterLoad : function() {
        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    }
});


//модалка

let popup = document.querySelector('.course-modal');
var popupHeight = 0;

$('.programms-block').on('click', function () {
    $('.overlay').show();
    $('.course-modal').fadeIn();
    $('body').css('overflow', 'hidden');
    popupHeight = +getComputedStyle(popup).height.replace('px', '');

    if (popupHeight > ($(window).height()-50)) {
        popup.style.overflow = 'scroll';
        popup.style.height = '95%';
    } else {
        popup.style.height = popupHeight + 'px';
    }
});

$('.overlay, .modal-close').on('click', function () {
    $('.overlay').fadeOut();
    $('.course-modal').fadeOut();
    $('body').css('overflow', 'visible');
});

// ресайзы экрана
window.onresize = function() {
    if (popup) {
        if (popupHeight > ($(window).height()-50)) {
            popup.style.overflow = 'scroll';
            popup.style.height = '95%';
        } else {
            popup.style.height = popupHeight + 'px';
        }
    }
};

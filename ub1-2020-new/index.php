<?php require_once '_header.php';?>
<?php require_once '_video.php';?>
<?php require_once '_offer.php';?>
<?php require_once '_diploma.php';?>
<?php require_once '_stats.php';?>
<?php require_once '_advantages.php';?>
<?php require_once '_clients.php';?>
<?php require_once '_fast.php';?>
<?php require_once '_reviews.php';?>

<div class="people">
  <img src="img/people.png" alt="people">
</div>
<?php require_once '_start.php';?>
<?php require_once '_footer.php';?>
<?php require_once '_scripts.php';?>
  <script>
      //video
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player1;

      function onYouTubeIframeAPIReady() {

          if($(window).width() < 768) {
              player1 = new YT.Player('divPlayer1', {
                  height: '450',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else if ($(window).width() < 992) {
              player1 = new YT.Player('divPlayer1', {
                  height: '350',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          } else {
              player1 = new YT.Player('divPlayer1', {
                  height: '450',
                  width: '100%',
                  videoId: 'd8Oc90QevaI',
              });
          }

      }

      function play1(event) {
          $('.video-wrapper, .video > .container').hide();
          $('#divPlayer1').show();
          $('.video-under').show();
          $('iframe').css('display', 'block');
          player1.playVideo();
      }
  </script>
<?php require_once '_end.php';?>
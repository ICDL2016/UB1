<?php require_once '_header.php'; ?>

  <div class="login container">
    <div class="login-img text-center">
      <img src="img/login/remind.png" alt="remind">
    </div>

    <div class="login-form text-center">
      <img src="img/login/login-border.png" alt="border" class="login-border">

      <div class="login-title__wrapper">
        <h3 class="login-title login-title__remind">Восстановление пароля</h3>
      </div>

      <form action="" class="login-form__form">
        <p class="login-remind__text">Если вы забыли пароль, введите ваш E-Mail:</p>
        <input class="form-input__email login-form__email" type="email" name="email" placeholder="Email*">
        <div class="form-input__span form-input__span-email">Поле "Email" обязательно для заполнения и должно содержать
          правильный электронный адрес (например, example@mail.ru)
        </div>
        <input class="form-checkbox" type="checkbox" name="checkbox" id="ch1" checked required>
        <label class="form-label" for="ch1">Я принимаю <a href="#">Условия Конфиденциальности</a></label>
        <button class="button login-button">Восстановить пароль</button>
      </form>
    </div>

    <a href="login.php" class="login-remind">Вход в личный кабинет</a>
  </div>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>

  <script>
      // псевдовалидация

      $('.login-form__email').on('click', function () {
          if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
              $(this).parent().children('.form-input__span-email').show();
          }
      }).on('input', function () {
          $(this).parent().children('.form-input__span-email').hide();
          $(this).parent().children('.login-form__email').removeClass('border-red');
      });

      $('.login-button').on('click', function () {
          event.preventDefault();
          let send = true;

          if ($(this).parent().children('.login-form__email').val().length === 0 || $(this).parent().children('.login-form__email').val().indexOf('@') === -1) {
              $(this).parent().children('.form-input__span-email').show();
              $(this).parent().children('.login-form__email').addClass('border-red');
              send = false;
          }

          if (send === true) {
              $(this).parent().submit();
          }
      });
  </script>
<?php require_once '_end.php'; ?>
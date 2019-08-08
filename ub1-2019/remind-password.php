<?php $title = "Восстановление пароля" ?>
<?php require_once '_header.php'?>

<div class="about-line"></div>

<div class="study-maintitle contacts-maintitle">
    <strong>Восстановление пароля</strong>
</div>

<section class="form-wrap">
    <div class="container">
        <div class="login-forgot remind-hint">
            Если вы забыли пароль, введите ваш E-Mail:
        </div>
        <form action="#" class="form">
            <div class="form-body">
                <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
            </div>

            <div class="remind-submit">
                <span class="form-bottom__top contacts-submit">Восстановить пароль</span>
            </div>

            <div class="login-forgot">
                <a href="login.php">Вход в Личный кабинет</a>
            </div>
        </form>
    </div>
</section>

<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_footer.php'?>

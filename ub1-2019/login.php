<?php $title = "Вход в личный кабинет" ?>
<?php require_once '_header.php'?>

<div class="about-line"></div>

<div class="study-maintitle contacts-maintitle">
    <strong>Авторизация</strong>
</div>

<section class="form-wrap">
    <div class="container">
        <form action="#" class="form">
            <div class="form-body">
                <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
                <input class="form-input form-input__password" type="password" placeholder="Пароль*" name="password">
                <span class="form-input__span form-input__span-password">Поле "Пароль" обязательно к заполнению</span>
            </div>

            <div class="login-submit">
                <span class="form-bottom__top contacts-submit">Вход</span>
            </div>

            <div class="login-forgot">
                <a href="remind-password.php">Забыли пароль?</a>
            </div>
        </form>
    </div>
</section>

<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_footer.php'?>

<?php
/**
 * @var string $title
 * @var bool $personal
 */
//$personal = strpos($_SERVER['REQUEST_URI'], 'personal');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UB1 | <?=$title ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <link rel="stylesheet" href="sass/style.css?v=14">
</head>
<body>

<header class="header">
    <div class="header-left">
        <div class="header-logo">
            <a href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
        </div>
    </div>
    <div class="header-hat">
        <a href="login.php" title="Личный кабинет">
            <i class="fa fa-graduation-cap"></i>
        </a>
<!--        --><?php //if($personal): ?><!--<i class="fa fa-bars personal-burger" aria-hidden="true"></i>--><?// endif;?>
    </div>
</header>

<?php //if($personal): ?>
<!--    <div class="personal-menu">-->
<!--        <ul>-->
<!--            <li><a href="#">Все курсы</a></li>-->
<!--            <li><a href="#">Языковые курсы</a></li>-->
<!--            <li><a href="#">Маркетинг и реклама</a></li>-->
<!--            <li><a href="#">Экономика</a></li>-->
<!--            <li><a href="#">Дизайн</a></li>-->
<!--            <li><a href="#">Мода</a></li>-->
<!--            <li><a href="#">Психология</a></li>-->
<!--            <li><a href="#">Ресторанный бизнес</a></li>-->
<!--            <li><a href="#">Гостиничный бизнес</a></li>-->
<!--            <li><a href="#">Журналистика и массовые коммуникации</a></li>-->
<!--            <li><a href="#">AMONAG ACADEMY</a></li>-->
<!--            <li><a href="#">Блог</a></li>-->
<!--            <li><a href="#">Вопросы и ответы</a></li>-->
<!--            <li><a href="#">Контакты</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<?// endif;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="SHORTCUT ICON" href="../icon/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/market_phones.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <title>DJ Dealer</title>
</head>
<body>
    <header id="header" class="header animate__animated animate__fadeIn">
        <div class="container">
            <div class="nav animate__animated animate__fadeInLeft animate__delay-1s">
                <img src="../icon/logo.png" alt="DJ Dealer" class="logo">
                <ul class="menu">
                    <li class="menu_item">
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="../php/onEnter.php">
                            Магазин
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="contacts.php">
                            Контакты
                        </a>
                    </li>
                </ul>
                <a href="tel:+79967035241" class="tel">
                    <img src="../icon/phone.svg" class="menu_img" alt="">
                    +7 996 703 52 41
                </a>
                <?php if ($_COOKIE['user'] == ''):?>
                    <a href="authorisation.php" class="enter">
                    <img src="../icon/user.svg" class="menu_img" alt="">
                        Войти
                    </a>
                <?php else:?>
                    <a href="../php/exit.php" class="enter">
                    <img src="../icon/user.svg" class="menu_img" alt="">
                        Выйти
                    </a>
                <?php endif;?>
            </div>
        </div>
    </header>
    <section id="about" class="about">
        <div class="container">
            <div class="about_block">
                <div class="text_block animate__animated animate__fadeInLeft animate__delay-1s">
                    <h1>Наушники</h1>
                    <div class="products-wrapper">
                        <div class="product">
                                <img src="../images/ph1.jpg" alt="" class="table_icon">
                                    <p>AIAIAI TMA-2 DJ Preset</p>
                                    <p1 class="p1">
                                        30 000 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/ph4.jpg" alt="" class="table_icon">
                                    <p>Technics EAH-DJ1200</p>
                                    <p1 class="p1">
                                        15 580 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/ph3.jpg" alt="" class="table_icon">
                                    <p>AIAIAI TMA-2 Studio XE</p>
                                    <p1 class="p1">
                                        27 000 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/ph5.jpg" alt="" class="table_icon">
                                    <p>Pioneer HDJ-CUE1 Dark</p>
                                    <p1 class="p1">
                                        7 788 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/ph2.jpg" alt="" class="table_icon">
                                    <p>Denon SC6000M Prime</p>
                                    <p1 class="p1">
                                        312 630 Р/шт

                                    </p1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer animate__animated animate__fadeIn">
        <div class="container">
            <div class="nav_footer animate__animated animate__fadeInLeft animate__delay-1s">
                <ul class="menu">
                    <li class="menu_item_footer">
                        <p class="footer_text">DJ Dealer 2022</p>
                    </li>
                    <li class="menu_item_footer">
                        <div class="media_icons_footer">
                            <a href="https://vk.com/saygoodbyye"><img src="../icon/vk.png" alt="" class="media_icon"></a>
                            <a href="https://www.instagram.com/saygoodbyye/"><img src="../icon/instagram.png" alt="" class="media_icon_two"></a>
                            <a href="https://www.youtube.com/"><img src="../icon/youtube.png" alt=""class="media_icon_three"></a>
                        </div>
                    </li>
                    <li class="menu_item_footer">
                        <p class="footer_text_right">Designed by Egor Chindyaskin</p>
                    </li>

            </div>
        </div>
    </footer>
</body>
</html>
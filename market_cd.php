<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="SHORTCUT ICON" href="../icon/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/market_cd.css">
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
                    <h1>CD / USB проигрыватели</h1>
                    <div class="products-wrapper">
                        <div class="product">
                                <img src="../images/cd.jpg" alt="" class="table_icon">
                                <p>Denon SC6000 Prime</p>
                                <p1 class="p1">
                                    329 400 Р/шт
                                </p1>
                        </div>
                        <div class="product">
                            <img src="../images/cd1.jpg" alt="" class="table_icon">
                                    <p>Pioneer CDJ-3000 </p>
                                    <p1 class="p1">
                                        287 385 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/cd2.jpg" alt="" class="table_icon">
                                    <p>Pioneer XDJ-1000</p>
                                    <p1 class="p1">
                                        160 885 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/cd4.jpg" alt="" class="table_icon">
                                    <p>Pioneer CDJ-2000 NXS2</p>
                                    <p1 class="p1">
                                        190 000 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/cd3.jpg" alt="" class="table_icon">
                                    <p>Denon SC6000M Prime</p>
                                    <p1 class="p1">
                                        312 630 Р/шт

                                    </p1>
                        </div>
                        <div class="product">
                            <img src="../images/cd5.jpg" alt="" class="table_icon">
                                    <p>PIONEER XDJ-700 USB</p>
                                    <p1 class="p1">
                                        89 988 Р/шт

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
                            <a href="https://vk.com/saygoodbyye"><img src="../icon/vk.svg" alt="" class="media_icon"></a>
                            <a href="https://www.instagram.com/saygoodbyye/"><img src="../icon/inst.svg" alt="" class="media_icon_two"></a>
                            <a href="https://t.me/saygoodbyye"><img src="../icon/teleg.svg" alt=""class="media_icon_three"></a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="SHORTCUT ICON" href="../icon/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/market_menu.css">
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
                        <a href="#">
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
                    <table class="table">
                        <tr>
                            <th>
                                <a href="market_cd.php" class="menu_str">
                                    <img src="../icon/vynil1.png" alt="" class="table_icon">
                                    CD / USB проигрыватели
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_phones.php" class="menu_str">
                                    <img src="../icon/phones.png" alt="" class="table_icon">
                                    Наушники
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_vynil.php" class="menu_str">
                                    <img src="../icon/vynil2.png" alt="" class="table_icon">
                                    Виниловые проигрыватели
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_controller.php" class="menu_str">
                                    <img src="../icon/contoller.png" alt="" class="table_icon">
                                    DJ контроллеры
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_empty.php" class="menu_str">
                                    <img src="../icon/mixer.png" alt="" class="table_icon">
                                    Микшеры
                                </a>
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="text_block animate__animated animate__fadeInLeft animate__delay-1s">
                    <table>
                        <tr>
                            <th>
                                <a href="market_empty.php" class="menu_str">
                                    <img src="../icon/micro.png" alt="" class="table_icon">
                                    Микрофоны
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_empty.php" class="menu_str">
                                    <img src="../icon/sound.png" alt="" class="table_icon">
                                    Студийные мониторы
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_empty.php" class="menu_str">
                                    <img src="../icon/midi.png" alt="" class="table_icon">
                                    MIDI контроллеры
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="market_empty.php" class="menu_str">
                                    <img src="../icon/vynilbuy.png" alt="" class="table_icon">
                                    Виниловые пластинки
                                </a>
                            </th>
                        </tr>
                    </table>
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
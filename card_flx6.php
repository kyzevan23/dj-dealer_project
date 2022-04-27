<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="SHORTCUT ICON" href="../icon/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/market_item_card.css">
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
                        <a href="main_page.php">
                            Главная
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="market_menu.php">
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
    <section>
    	<div class="container">
            <div class="about_block animate__animated animate__fadeIn animate__delay-2s">
                <img src="../images/flx6.jpg" alt="" class="img_about">
                <div class="text_block">
                    <h1 class="text_about">Pioneer DDJ-FLX6</h1>
                    <p class="subtext_about">Pioneer DDJ-FLX6 - 4-канальный диджейcкий контроллер для rekordbox и Serato DJ Pro. Совершенно новый Merge FX позволяет смешивать разные музыкальные стили. Невзирая на то, каково число ударов в минуту или тональность следующей музыкальной композиции, вы можете создавать впечатляющий переход всякий раз, когда пожелаете. </p><br>
                    <div class="cost_btn">
                    	<p class="cost">84 990 Р/шт</p>
                    	<a href="tel:+79967035241" class="btn">Позвонить</a>
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
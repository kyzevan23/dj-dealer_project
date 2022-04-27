<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="SHORTCUT ICON" href="../icon/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <title>DJ Dealer</title>
</head>

<body>
    <div class="progress"></div>
    <header id="header" class="header animate__animated animate__fadeIn">
        <div class="container">
            <div class="nav animate__animated animate__fadeInLeft animate__delay-1s">
                <img src="../icon/logo.png" alt="DJ Dealer" class="logo">
                <ul class="menu">
                    <li class="menu_item">
                        <a href="#">
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
                <?php if ($_COOKIE['user'] == '') : ?>
                    <a href="authorisation.php" class="enter">
                        <img src="../icon/user.svg" class="menu_img" alt="">
                        Войти
                    </a>
                <?php else : ?>
                    <a href="../php/exit.php" class="enter">
                        <img src="../icon/user.svg" class="menu_img" alt="">
                        Выйти
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <section>
        <div class="header_menu">
            <div class="offer animate__animated animate__fadeInLeft animate__delay-2s">
                <h1>Покори мир музыки прямо сейчас!</h1>
                <p>Онлайн-магазин оборудования для DJ</p>
                <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                <div class="sub_block">
                    <p1 class="subscribe">Подписывайтесь в соцсетях</p1>
                    <div class="media_icons">
                        <a href="https://vk.com/saygoodbyye"><img src="../icon/vk.svg" alt="" class="media_icon"></a>
                        <a href="https://www.instagram.com/saygoodbyye/"><img src="../icon/inst.svg" alt="" class="media_icon_two"></a>
                        <a href="https://t.me/saygoodbyye"><img src="../icon/teleg.svg" alt="" class="media_icon_three"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="about_block" data-aos="fade-right" data-aos-delay="150">
                <img src="../img/firstp.jpg" alt="" class="img_about">
                <div class="text_block ">
                    <h1 class="text_about">Глубоко погрузись в комьюнити настоящих DJ</h1>
                    <p class="subtext_about">Стань частью огромной культуры</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
            </div>
            <div class="about_block" data-aos="fade-left" data-aos-delay="200">
                <div class="text_block ">
                    <h1 class="text_about">Открой в себе новые возможности и таланты</h1>
                    <p class="subtext_about">Расскрой в себе огромный потенциал</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
                <img src="../img/secondp.jpg" alt="" class="img_about">
            </div>
            <div class="about_block" data-aos="fade-right" data-aos-delay="250">
                <img src="../img/thirdp.jpg" alt="" class="img_about">
                <div class="text_block ">
                    <h1 class="text_about">Выбери подходящее оборудование и играй!</h1>
                    <p class="subtext_about">В нашем магазине ты найдешь все!</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
            </div>
            <div class="about_block" data-aos="fade-left" data-aos-delay="300">
                <div class="text_block ">
                    <h1 class="text_about">Наш магазин предлагает огромный ассортимент</h1>
                    <p class="subtext_about">От наушников до микрофонов</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
                <img src="../img/fourthp.jpg" alt="" class="img_about">
            </div>
            <div class="about_block" data-aos="fade-right" data-aos-delay="350">
                <img src="../img/fifthp.jpg" alt="" class="img_about">
                <div class="text_block ">
                    <h1 class="text_about">Обрети новые знакомства</h1>
                    <p class="subtext_about">Найди по-настоящему крутую компанию</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
            </div>
            <div class="about_block" data-aos="fade-left" data-aos-delay="400">
                <div class="text_block">
                    <h1 class="text_about">Мы уважаем клиентов</h1>
                    <p class="subtext_about">Нам доверяют миллионы людей по всему миру</p>
                    <a href="../php/onEnter.php" class="btn">Перейти в магазин</a>
                </div>
                <img src="../img/sixthp.jpg" alt="" class="img_about">
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="review" data-aos="fade-up" data-aos-delay="500">
                <h1>Отзывы</h1>
                <div class="review_block">
                    <h4>Виктор</h4>
                    <p>Сайт пушка! Персонал просто супер. И доставка быстрая! Рекомендую определенно!</p>
                    <h4>Анатолий</h4>
                    <p>Заказывал у вас наушники, просто шикарные. Спасибо, что вы есть. Вы самая лучшая контора</p>
                    <h4>Григорий</h4>
                    <p>Что бы я без вас делал! Вы просто спасли мое выступление! За час до тусы на мой контроллер разлили пиво, а такой заказывать месяц целый! Слава Богу поблизости оказался пункт выдачи вашего магазина. Вы меня спасли! Быстро и просто, респект!</p>
                    <h4>Егор</h4>
                    <p>Да не магаз реально зачет, выще все ровно четко. Прям как мы с батей любим, без лишней суеты и неприятных моментиков, ща на виниле крутим бутырку, ваще отдыхаем, уважуха</p>
                    <h4>Никита</h4>
                    <p>Все круто, спасибо! Качест - ВО!</p>
                    <h4>Лев</h4>
                    <p>Ох если бы не вы, то я бы никогда не подкатил к той самой девушке, в которую влюблен с 7 класса... Просто ей нравятся диджеи, и теперь она наконец обратила на меня внимание. Спасибо большое!</p>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="nav_footer">
                <ul class="menu">
                    <li class="menu_item_footer">
                        <p class="footer_text">DJ Dealer 2022</p>
                    </li>
                    <li class="menu_item_footer">
                        <div class="media_icons_footer">
                            <a href="https://vk.com/saygoodbyye"><img src="../icon/vk.svg" alt="" class="media_icon"></a>
                            <a href="https://www.instagram.com/saygoodbyye/"><img src="../icon/inst.svg" alt="" class="media_icon_two"></a>
                            <a href="https://t.me/saygoodbyye"><img src="../icon/teleg.svg" alt="" class="media_icon_three"></a>
                        </div>
                    </li>
                    <li class="menu_item_footer">
                        <p class="footer_text_right">Designed by Egor Chindyaskin</p>
                    </li>
            </div>
        </div>
    </footer>
    <script>
        const progress = document.querySelector('.progress');

        window.addEventListener('scroll', progressBar);

        function progressBar(e) {
            let windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let per = windowScroll / windowHeight * 100;

            progress.style.width = per + '%';
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
        });
    </script>
</body>

</html>
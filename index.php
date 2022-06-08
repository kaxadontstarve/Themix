<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="wrapper" id="header">
        <div class="paralax">
            <div class="paralax__body">
                <div class="paralax__item"></div>
            </div>
        </div>
        <header class="header">
            <div class="header_body">
                <a href="/" class="header__logo">
                    <img src="imgs/header/logo.png" alt="" >
                </a>
                <div class="header__select">
                    <select class="header__select-body">
                    <option>Суми</option>
                    <option>Київ</option>
                    <option>Харків</option>
                    <option>Чернігів</option>
                    </select>
                </div>
                <div class="header__burger"><span></span></div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li>
                            <a href="#furniture" class="header__link">Меблі</a>
                        </li>
                        <li>
                            <a href="#offer" class="header__link">Цікаві пропозиції</a>
                        </li>
                        <li>
                            <a href="#construct" class="header__link">Контструювання</a>
                        </li>
                        <li>
                            <a href="#about" class="header__link">Про нас</a>
                        </li>
                    </ul>
                </nav>
            </div>
    </header>
        <div class="content">
            <div class="container">
                <div class="furniture" id="furniture">
                    <div class="furniture__body">
                        <div class="furniture__title title">Товари</div>
                        <div class="furniture__row">
                            <div class="furniture__filter">
                                <form action="">
                                    <label for="filter">Фільтри</label>
                                    <input name="filter" type="checkbox">

                                </form>
                            </div>
                        </div>
                            <?php for ($i=0; $i < 3; $i++) { ?><div class="furniture__row">
                            <?php for ($k=0; $k < 4; $k++) { ?><div class="furniture__item item">
                            <a href="/">
                                <img src="/imgs/furniture/Product-1.jpg" alt="">
                            </a>
                            <a href="/" class="furniture__name">Назва товару</a>
                            <a href="/" class="furniture__buy">Купити</a>
                        </div><?php }?></div> <?php }?>
                    
                </div>
            
                <div class="offer" id="offer">
                    <div class="offer__body">
                        <div class="offer__title title">Цікаві пропозиції</div>
                            <div class="offer__subtitle subtitle">Топ продажів</div>
                            <?php for ($i=0; $i < 1; $i++) { ?><div class="offer__row">
                            <?php for ($k=0; $k < 3; $k++) { ?><div class="offer__item item">
                            <a href="/">
                                <img src="/imgs/furniture/Product-1.jpg" alt="">
                            </a>
                            <a href="/" class="offer__name name">Назва товару</a>
                            <a href="/" class="offer__buy buy">Купити</a>
                        </div><?php }?></div> <?php }?>

                            <div class="offer__subtitle subtitle">Акції</div>
                            <?php for ($i=0; $i < 1; $i++) { ?><div class="offer__row">
                            <?php for ($k=0; $k < 3; $k++) { ?><div class="offer__item item">
                            <a href="/">
                                <img src="/imgs/furniture/Product-1.jpg" alt="">
                            </a>
                            <a href="/" class="offer__name name">Назва товару</a>
                            <a href="/" class="offer__buy buy">Купити</a>
                        </div><?php }?></div> <?php }?>
                            <div class="offer__subtitle subtitle">Знижки </div>
                            <?php for ($i=0; $i < 1; $i++) { ?><div class="offer__row">
                            <?php for ($k=0; $k < 3; $k++) { ?><div class="offer__item item">
                            <a href="/">
                                <img src="/imgs/furniture/Product-1.jpg" alt="">
                            </a>
                            <a href="/" class="offer__name name">Назва товару</a>
                            <a href="/" class="offer__buy buy">Купити</a>
                        </div><?php }?></div> <?php }?>
                    </div>
                </div>
                <div class="construct" id="construct">
                    <div class="construct__title title">Конструктор</div>
                    <div class="construct__body">Creating</div>
                </div>
                <div class="about" id="about">
                    <div class="about__body">
                        <div class="about__title title">Про нас</div>
                        <div class="about__text">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quae, blanditiis consectetur voluptatum quos delectus beatae, ducimus repellat quis voluptatibus tenetur praesentium qui eveniet ut provident itaque illum, hic omnis officiis in dolorum minima. Voluptates obcaecati, impedit, tempora quod et iure magnam, atque ratione quos similique facere illum consequatur voluptas. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores temporibus doloremque dolorem quisquam, inventore aperiam corrupti distinctio iste necessitatibus eaque non eum nemo cupiditate, unde debitis a nam quis fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis facere voluptate. Quae velit id voluptatum voluptate totam quam sed architecto non nam aliquam, iste doloremque voluptates temporibus quas, quasi at culpa tempore mollitia excepturi? Sint hic laudantium aperiam, voluptate quam nesciunt molestiae minus corrupti dolore quia numquam sit voluptatum.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quae, blanditiis consectetur voluptatum quos delectus beatae, ducimus repellat quis voluptatibus tenetur praesentium qui eveniet ut provident itaque illum, hic omnis officiis in dolorum minima. Voluptates obcaecati, impedit, tempora quod et iure magnam, atque ratione quos similique facere illum consequatur voluptas. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores temporibus doloremque dolorem quisquam, inventore aperiam corrupti distinctio iste necessitatibus eaque non eum nemo cupiditate, unde debitis a nam quis fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis facere voluptate. Quae velit id voluptatum voluptate totam quam sed architecto non nam aliquam, iste doloremque voluptates temporibus quas, quasi at culpa tempore mollitia excepturi? Sint hic laudantium aperiam, voluptate quam nesciunt molestiae minus corrupti dolore quia numquam sit voluptatum.</p>
                        </div>
                        <div class="about__img">
                            <img src="" alt="">
                            <img src="" alt="">
                            <img src="" alt="">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="swipe">
                <div class="swipe__body">
                    <a href="#header" class="swipe__item"><img src="imgs/swipe/swipe.png" alt=""></a>
                </div>
            </div>
        <footer class="footer">
            <div class="footer__body">
                <div class="footer__item item-1">FEBLE.COM 2022</div>
                <div class="footer__item item-2"></div>
                <div class="footer__item item-3">
                    <div>Гаряча лінія:  +38-095-65-878</div>
                    <div>Email:  FeBLe__market@gmail.com</div>
                </div>
                <div class="footer__item item-4">
                    <a href="/"><img src="imgs/footer/instagram.png" alt="">instagram</a>
                    <a href="/"><img src="imgs/footer/telegram.png" alt="">telegram</a>
                    <a href="/"><img src="imgs/footer/facebook.png" alt="">facebook</a>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/main.min.css">
    <script src="js/index.js"></script>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <a href="index.php" class="logo">LogoType</a>
                <nav class="nav">
                    <a href="index.php" class="link link--def">Главная</a>
                    <a href="service.php" class="link link--def">Услуги</a>
                    <a href="price.php" class="link link--def">Прайс</a>
                </nav>
                <div class="buttons">
                    <a href="" class="btn btn--nodef">Регистрация</a>
                    <a href="" class="btn btn--def">Войти</a>
                    <div class="bar" onclick="menu()">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section" id="items">
        <div class="container">
            <div class="section__inner">
                <div class="content">
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i1" onclick="viewAfter(this)">
                            <label for="i1">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i2" onclick="viewAfter(this)">
                            <label for="i2">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i3" onclick="viewAfter(this)">
                            <label for="i3">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i4" onclick="viewAfter(this)">
                            <label for="i4">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i5" onclick="viewAfter(this)">
                            <label for="i5">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                    <a class="item">
                        <div class="img">
                            <img src="images/items/1.jpg" alt="">
                            <img src="images/items/2.jpg" alt="">
                        </div>
                        <div class="result">
                            <input type="checkbox" name="" id="i6" onclick="viewAfter(this)">
                            <label for="i6">
                                <span class="before">До</span>
                                <span class="after">После</span>
                            </label>
                        </div>
                        <h4 class="name">Название 1</h4>
                    </a>
                </div>
                <div class="items__nav">
                    <div class="inp"><input type="text" name="" id="" class="input-text" placeholder="поиск"></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="section__inner"></div>
        </div>
    </footer>
</body>
</html>
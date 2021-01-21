<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компьютерный мастер в Хабаровске</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <header class="main-header">
        <nav class="menu-nav">
            <div class="nav-logo">
                <p class="logo-text">Ремонт компьютеров</p>
                <p class="logo-text logo-text--black">в Хабаровске</p>
            </div>
            <ul class="nav-list">
                <li class="nav-item"><a href="#">Преимущества</a> </li>
                <li class="nav-item"><a href="#">Услуги</a> </li>
                <li class="nav-item"><a href="#">Обо мне</a></li>
                <li class="nav-item"><a href="#">Контакты</a></li>
            </ul>
            <ul class="nav-contacts">
                <a href="tel:+79841710608" class="contacts-phone">+7(984)-171‑06‑08</a>
            </ul>
        </nav>
    </header>
    <main class="main-page">
        <div class="form-bg">
            <section class="main-form">
                <div class="form-wrapper">
                    <h1 class="form-title">Частный компьютерный мастер Иван</h1>
                    <div class="order-form">
                        <h2 class="order-title">Оставьте вашу заявку и я свяжусь с вами в ближайшее время</h2>
                        <form action="POST">
                            <div class="order-form__item">
                                <label for="order-name" class="order-field">
                                    Ваше имя
                                </label>
                                <input id="order-name" type="text" placeholder="Александр" required>
                            </div>
                            <div class="order-form__item">
                                <label for="order-phone" class="order-field">
                                    Ваш телефон
                                </label>
                                <input type="tel" id="order-phone" placeholder="+7-123-456-789" required>
                            </div>
                            <div class="order-form__item">
                                <label for="order-message">
                                    Опишите вашу проблему
                                </label>
                                <textarea name="order-message" id="order-message" rows="5" placeholder="Опишите вашу проблему"></textarea>
                            </div>
                            <button type="submit" class="button">Отправить</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="wrapper">
            <section class="services">
                <h2 class="title">Какие услуги я предоставляю</h2>
                <ul class="services-list">
                    <li class="service-item">Установка ОС Windows</li>
                    <li class="service-item">Установка драйверов</li>
                    <li class="service-item service-item--dark">Установка офисных программ</li>
                    <li class="service-item service-item--dark">Удаление вируса</li>
                    <li class="service-item">Установка антивируса</li>
                    <li class="service-item">Настройка интернета</li>
                    <li class="service-item service-item--dark">Чистка компьютера от пыли</li>
                    <li class="service-item service-item--dark">Сборка компьютера</li>
                </ul>
                <p class="services-mark">Также оказываю и другие услуги. Все подробности при личном разговоре, включая цену.</p>
            </section>
        </div> 

            <section class="about-us">
                <div class="wrapper">
                    <h2 class="title">Коротко обо мне</h2>
                    <p class="about-us__description">Меня зовут Иван. Занимаюсь профессиональным ремонтом компьютерной техники в Хабаровске с 2016 года. За всё время работы ни разу не 
                        сталкивался с задачей, которую в итоге я бы не смог решить.
                    </p>
                    <h3 class="about-us__subtitle">Почему вам следует обратиться ко мне?</h3>
                    <ul class="about-us__list">
                        <li class="about-us__item about-us__item--coin">
                            <h4>Честная цена</h4>
                            <p>Беру за свою работу справедливо. Я не собираюсь брать с вас баснословные суммы. </p>
                        </li>
                        <li class="about-us__item about-us__item--like">
                            <h4>Никакого обмана</h4>
                            <p>Я не занимаюсь какой-либо продажей своих услуг, я занимаюсь именно ремонтом компьютерной техники</p>
                        </li>
                        <li class="about-us__item about-us__item--timer">
                            <h4>Работа в короткие сроки</h4>
                            <p>После вашего обращения готов помочь вам в удобное для вас время</p>
                        </li>
                        <li class="about-us__item about-us__item--verified ">
                            <h4>Даю гарантии</h4>
                            <p>Свою работу я выполняю добросовестно и гарантирую высокое качество</p>
                        </li>
                    </ul>
                    <a class="button about-us__button">Оставить заявку</a>
                </div> 
            </section>
            
            <section class="photo">
                <div class="wrapper">
                    <h2 class="title">Фотогалерея</h2>
                    <ul class="photo-list">
                        <li class="photo-item"><img src="img/about-photo-1.jpg" alt="" width="300" height="250"></li>
                        <li class="photo-item"><img src="img/about-photo-8.jpg" alt="" width="300" height="250"></li>
                        <li class="photo-item"><img src="img/about-photo-3.jpg" alt="" width="300" height="250"></li>
                        <li class="photo-item"><img src="img/about-photo-4.jpg" alt="" width="300" height="250"></li>
                        <li class="photo-item"><img src="img/about-photo-5.jpg" alt="" width="300" height="250"></li>
                        <li class="photo-item"><img src="img/about-photo-6.jpg" alt="" width="300" height="250"></li>
                    </ul>
                </div>
            </section>    
        
        <section class="contacts">
            <div class="wrapper contacts__wrapper">
                <div class="contacts__left-column">
                    <h2 class="title">Контакты</h2>
                    <p class="contacts__number">
                        Мой номер телефона:
                    </p>
                    <a href="tel:+79841710608" class="contacts-phone contacts__phone-number">+7(984)-171‑06‑08</a>
                    <p class="contacts-adress">
                        Работаю по всему Хабаровску
                    </p>
                    <h3 class="contacts__time-title">Время работы</h3>
                    <p class="contacts__time">
                        Работаю с 9:00 до 21:00 <br>
                        Могут быть исключения <br>
                        Без выходных
                    </p>
                </div>
                <div class="contacts__map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/76/khabarovsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Хабаровск</a><a href="https://yandex.ru/maps/76/khabarovsk/?ll=135.120755%2C48.481249&utm_medium=mapframe&utm_source=maps&z=11.66" style="color:#eee;font-size:12px;position:absolute;top:14px;">Хабаровск — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUIBJdgxA" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </section>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>О нас</title>
  <meta name="description" content="Услуги по веб-разработке, технологиях, дизайне и маркетинге">
  
  <!-- Open Graph / Social Media -->
  <meta property="og:title" content="Услуги по веб-разработке">
  <meta property="og:description" content="Услуги по веб-разработке, технологиях, дизайне и маркетинге">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_EN">
  
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
  
  <!-- CSS -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="./css/about-us.css?v=<?= time(); ?>">
  <!-- Google Fonts: Manrope, Golos Text, Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text&family=Inter&family=Manrope&display=swap" rel="stylesheet">

  <!-- Fontshare: NT Somic -->
  <link href="https://api.fontshare.com/v2/css?f[]=nt-somic@400&display=swap" rel="stylesheet">
  
</head>

<body>

    <section class="main-block">
        <div class="main-content">
            <div class="banner">
                <video autoplay muted loop playsinline class="background-video">
                    <source src="./images/0_Optic_Pattern_1280x720.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                </video>
                <h1>Мы — команда, которая делает сайты, приносящие результат.</h1>
                
                <div class="num-blocks num-block1">
                    <div class="num-block">
                        <div class="num-block-header">100+</div>
                        <p>клиентов</p>
                    </div>
                    
                    <div class="num-block num-block2">
                        <div class="num-block-header">150+</div>
                        <p>успешно реализованных проектов</p>
                    </div>
                    
                    <div class="num-block num-block3">
                        <div class="num-block-header">5 лет</div>
                        <p>помогаем клиентам быть заметнее в интернете</p>
                    </div>
                </div>
            </div>
            
            <section class="content-block">
                <div class="swiper team-swiper team">
                    <div class="team-header">
                        <div class="our-team-header">Наша команда</div>
                        <div class="arrows">
                            <div class="arrow-left btn-next">
                                <img src="./images/icons/arrow-left.png" width="10px" alt="arrow-left"/>
                            </div>
                            <div class="arrow-right btn-prev">
                                <img src="./images/icons/arrow-right.png" width="10px" alt="arrow-right"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-wrapper">
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member2.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Иван Иванов</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member1.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Юлия Фёдоровна</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member2.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Иван Иванов</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member1.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Юлия Фёдоровна</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member2.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Иван Иванов</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        <figure class="swiper-slide member">
                            <div class="img-container">
                                <img src="../../images/test/member1.jpg" alt="member1"/>
                            </div>
                            <figcaption>
                                <div class="member-name">Юлия Фёдоровна</div>
                                <div class="member-position">Арт-директор</div>
                            </figcaption>
                        </figure>
                        
                    </div>
                </div>
            </section>    
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./js/about-us.js?v=<?= time(); ?>"></script>
</html>

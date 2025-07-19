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
                <div class="services">
                  <div class="service-card">
                    <div class="service-price">От 30 000 ₽</div>
                      <a href="#" class="icon-container">
                        <img src="./images/icons/arrow.svg" alt="SEO Icon" />
                      </a>
                    <div class="service-card-header">SEO</div>
                    <p>Продвижение сайтов в поисковых системах</p>
                    <div class="service-details">
                      <strong>Комплексная работа, направленная на:</strong>
                      <ul>
                        <li>увеличение количества визитов на сайт из поисковых систем Google, Яндекс, Bing;</li>
                        <li>увеличение видимости сайта по ключевым запросам.</li>
                      </ul>
                    </div>
                  </div>
                
                  <div class="service-card">
                    <div class="service-price">От 50 000 ₽</div>
                    <a href="#" class="icon-container">
                        <img src="./images/icons/arrow.svg" alt="SEO Icon" />
                      </a>
                    <div class="service-card-header">UX/UI DESIGN</div>
                    <p>Делаем интерфейсы удобными и понятными</p>
                    <div class="service-details">
                      <strong>Разрабатываем продуманный дизайн, который:</strong>
                      <ul>
                        <li>упрощает взаимодействие с сайтом;</li>
                        <li>удерживает пользователей;</li>
                        <li>влияет на конверсию.</li>
                      </ul>
                    </div>
                  </div>
                
                  <div class="service-card">
                    <div class="service-price">От 80 000 ₽</div>
                    <a href="#" class="icon-container">
                        <img src="./images/icons/arrow.svg" alt="SEO Icon" />
                      </a>
                    <div class="service-card-header">DEVELOPMENT</div>
                    <p>Создаём сайты под любые задачи</p>
                    <div class="service-details">
                      <strong>Выполняем работы по созданию сайтов, включая:</strong>
                      <ul>
                        <li>создание сайтов под ключ;</li>
                        <li>вёрстку сайтов по готовому шаблону;</li>
                        <li>работу с любыми CMS (WordPress, Bitrix, Tilda, Web-Flow и др.).</li>
                      </ul>
                    </div>
                  </div>
                </div>
            </section>    
        </div>
    </section>
</body>


</html>

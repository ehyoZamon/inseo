<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>
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
  <link rel="stylesheet" href="./css/contacts.css?v=<?= time(); ?>">
  <!-- Google Fonts: Manrope, Golos Text, Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text&family=Inter&family=Manrope&display=swap" rel="stylesheet">

  <!-- Fontshare: NT Somic -->
  <link href="https://api.fontshare.com/v2/css?f[]=nt-somic@400&display=swap" rel="stylesheet">
  
  <!-- PHONE INPUT -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css"/>
  
</head>

<body>

    <section class="main-block">
        <div class="main-content">
            <section class="content-block">
                <h1>Контакты</h1>
                <div class="contacts-container">
                    <div class="contacts">
                        <div class="email-container contact-container">
                            <div class="contact-content">
                                <div class="tiny-header">Email</div>
                                <div class="email-links">
                                    <a href="mailto: rabotaseoge@gmail.com" target="_blank">rabotaseoge@gmail.com</a><br>
                                    <a href="mailto: rabotaseoge@yandex.ru" target="_blank" class="second-link">rabotaseoge@yandex.ru</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="messengers-container contact-container">
                            <div class="contact-content">
                                <div class="tiny-header">Мессенджеры</div>
                                <div class="messenger-links">
                                    <a href="#" target="_blank" class="img-link"><img src="./images/icons/whatsapp.svg" alt="whatsapp icon" class="whatsapp-img"/></a>
                                    <a href="#" target="_blank" class="img-link"><img src="./images/icons/telegram.svg" alt="telegram icon" class="telegram-img"/></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="phone-container contact-container">
                            <div class="contact-content">
                                <div class="tiny-header">Телефон</div>
                                <div class="phone-links">
                                    <a href="tel:+995551287944">+995 55128 79 44</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="address-container contact-container">
                            <div class="address-content contact-content">
                                <div class="tiny-header">Адрес</div>
                                <div class="address-links">
                                    <p>
                                        Georgia, City Batumi, Zhiuli Shartava Avenue, N 32, Apartment N87, Floor 6
                                    </p>
                                </div>
                            </div>
                            <div class="map-content">
                                <img src="./images/technologies/tech3.webp" alt="map" class="map-img"/>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-container">
                        <form "method="POST" action="#" class="contact-form">
                            <div class="part1">
                                <div class="form-header">
                                    Остались вопросы?
                                </div>
                                <p class="form-description">Напишите нам и мы ответим в ближайшее время!</p>
                                <input type="text" name="user-name" class="user-name" placeholder="Ваше имя"/>
                                <input id="phone" type="tel" name="user-phone" class="user-phone phone-input" placeholder="___ ___ __ __" />
                                <textarea class="user-question" placeholder="Ваш вопрос"></textarea>
                            </div>
                            <div class="part2">
                                <input type="submit" class="submit-button" value="Задать вопрос"/>
                                <p class="privacy-policy">Заполняя эту форму, Вы соглашаетесь с правилами <a href="#" target="_blank">Политики Конфиденциальности</a></p>
                            </div>
                        </form>
                    </div>
                <div>
            </section>    
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script>
const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function (callback) {
    fetch('https://ipapi.co/json')
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback('us'));
  },
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
});
</script>

</html>

<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-M4J2632');</script>
  <!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Мы предоставляем возможность нашим Партнерам увеличить объемы продаж или обеспечить более высокий уровень оплат платежным картами через Интернет">
	<title>iPay.ua - Решения для интернет-эквайринга</title>
  <link rel="icon" type="image/png" href="img/favicon.png">
	<!-- <link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css"> -->

  <?php if (is_user_logged_in()):?>
    <style>
      .navbar-wr { margin-top: 32px;}
      body>section.top {padding-top: 32px;}
      @media (max-width: 800px) { body>section.top { margin-top: 0px;}}
    </style>
  <?php endif?>

  <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4J2632"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="navbar-wr">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <span class="logo-descr">Интернет эквайринг</span>
          <img src="./img/logo.png" alt="" class="d-hidden">
          <img src="./img/logo-xs.png" alt="" class="d-visible">
        </a>
        
        <div class="navbar-mob-wr">
          <ul class="nav-lang-phone navbar-nav visible-mob">
            <li class="nav-item pnone">
              <a class="nav-link" href="tel:+380445025075"><i class="fa fa-phone"></i> +38 044 502 50 75</a>
            </li>
          </ul>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="about.html">О компании</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Продукты
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="internet-acquiring.html">интернет-эквайринг</a>
                <a class="dropdown-item" href="masterpass.html">masterpass</a>
                <a class="dropdown-item" href="visa-checkout.html">visa checkout</a>
                <a class="dropdown-item" href="applepay.html">Apple pay</a>
                <a class="dropdown-item" href="googlepay.html">Google pay</a>
                <a class="dropdown-item" href="p2p.html">витрина p2p</a>
                <a class="dropdown-item" href="requisites.html">Платеж по реквизитам</a>
                <a class="dropdown-item" href="payments.html">Прием платежей</a>
                <a class="dropdown-item" href="monego.html">MONEGO</a>
                <a class="dropdown-item" href="cashlesstips.html">Cashless Tips</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Клиенты
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="banks.html">Банки</a>
                <a class="dropdown-item" href="financial-companies.html">Финансовые компании</a>
                <a class="dropdown-item" href="commercial.html">торгово-сервисные предприятия</a>
                <a class="dropdown-item" href="utilities.html">Коммунальные предприятия</a>
                <a class="dropdown-item" href="internet.html">Интернет провайдеры</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Услуги
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="design.html">Дизайн и верстка</a>
                <a class="dropdown-item" href="development.html">Разработка и поддержка</a>
                <a class="dropdown-item" href="support.html">служба клиентской поддержки</a>
                <a class="dropdown-item" href="finance.html">финансовые расчеты</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Отзывы</a>
            </li>       
          </ul>
        </div>
        <ul class="nav-lang-phone navbar-nav hidden-mob">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ru
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="ua/index.html">ua</a>
              <!--<a class="dropdown-item" href="en/index.html">en</a>-->
            </div>
          </li>
          <!-- <li class="nav-item">
            <select class="custom-select" id="inputGroupSelect01">
              <option value="1" selected>ru</option>
              <option value="2">ua</option>
              <option value="3">en</option>
            </select>
          </li>  -->
          <li class="nav-item pnone">
            <a class="nav-link" href="tel:+380445025075"><i class="fa fa-phone"></i> +38 044 502 50 75</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section> 
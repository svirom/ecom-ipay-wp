<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png">
	
  <?php if (is_user_logged_in()):?>
    <style>
      .navbar-wr { margin-top: 32px;}
      body>section.top {padding-top: 32px;}
      @media (max-width: 800px) { body>section.top { margin-top: 0px;}}
    </style>
  <?php endif?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="navbar-wr">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <span class="logo-descr">Интернет эквайринг</span>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="" class="d-hidden">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-xs.png" alt="" class="d-visible">
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
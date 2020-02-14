<?php
/*
Template Name: Home page
*/ ?>

<?php get_header(); ?>

<section class="top-section top">
  <div class="container">
    <div class="row"> 
      <div class="col-12">  
        <h1>интернет эквайринг <br><span>от iPay.ua</span></h1>
        <p class="top-descr">Инновационные платежные инструменты для вашего бизнеса</p>
      </div>
    </div>
    <div class="row header-icons">
      <div class="col-12 d-visible header-icons-mob">
        <div class="hesder-icons-img-wr">
          <img src="./img/payment-method.png" alt="">
        </div>
        <div class="hesder-icons-img-wr">
          <img src="./img/credit-card.png" alt="">
        </div>
        <div class="hesder-icons-img-wr">
          <img src="./img/buy.png" alt="">
        </div>
        <div class="hesder-icons-img-wr">
          <img src="./img/laptop.png" alt="">
        </div>
      </div>
    </div>
  </div>  
</section>

<section>
  <div class="container">
    <div class="row section-title-wr">  
      <div class="col-lg-3 col-12"> 
        <h4 class="section-title">продукты</h4>
      </div>
      <div class="col-lg-9 col-12"> 
        <p>Мы предоставляем широкий спектр инструментов для организации приема платежей на сайте или мобильном приложении. Данные инструменты позволяют расширить границы Вашего бизнеса!</p>    
      </div>
    </div>
    <div class="row products-links">
      <div class="col-md-8 col-12">
        <div class="products-links-wr">
          <a href="internet-acquiring.html" class="acquaring">
            <h5>Интернет- <br>эквайринг</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="products-links-wr">
          <a href="p2p.html" class="р2р">
            <h5>Витрина р2р</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="products-links-wr">
          <a href="masterpass.html" class="masterpass">
            <h5>Masterpass</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="products-links-wr">
          <a href="visa-checkout.html" class="visa-checkout">
            <h5>Visa Checkout</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="products-links-wr">
          <a href="requisites.html" class="requisites">
            <h5>Платеж по <br>реквизитам</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="products-links-wr">
          <a href="monego.html" class="monego">
            <h5>MONEGO</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
      <div class="col-md-8 col-12">
        <div class="products-links-wr">
          <a href="payments.html" class="payments">
            <h5>Прием платежей</h5>
            <span class="more-link">подробнее <i></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>  
</section>

<section>
  <div class="container">
    <div class="row"> 
      <div class="col-12">  
        <h4 class="section-title">Наши клиенты</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-12">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <div class="nav-link-img-wr">
                <img src="./img/bank-tab.png" alt="">
              </div>
              <p>Банки и финансовые компании</p>
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <div class="nav-link-img-wr">
                <img src="./img/commercial-tab.png" alt="">
              </div>
              <p>Торгово-сервисные предприятия</p>
            </a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
              <div class="nav-link-img-wr">
                <img src="./img/utilities-tab.png" alt="">
              </div>
              <p>Коммунальные предприятия</p>
            </a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
              <div class="nav-link-img-wr">
                <img src="./img/internet-tab.png" alt="">
              </div>
              <p>Интернет провайдеры</p>
            </a>
          </div>
      </div>
      <div class="col-md-8 col-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row">
                <div class="col-lg-6">
                  <h6>Сферы бизнеса</h6>
                  <h5>Банки и финансовые компании</h5>
                  <p>Мы обеспечиваем технологическую поддержку платежных сервисов на сайтах и в Интернет-банкинге ведущих банков Украины.</p>
                  <p>Среди самых популярных продуктов для банков являются витрины переводов с карты на карту на сайте банка, оплата любого платежа по реквизитам, интеграция коммунальных и других платежей с системой интернет-банкинга в рамках единого окна.</p>
                  <a href="banks.html" class="more-link">подробнее<i></i></a>
                </div>
                <div class="col-lg-6">
                  <img src="./img/bank-tab-large.png" alt="">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                    <div class="col-lg-6">
                      <h6>Сферы бизнеса</h6>
                      <h5>Торгово-сервисные предприятия</h5>
                      <p>Каждая компания рано или поздно сталкивается с задачей приема оплаты за товары или услуги на собственном сайте.</p>
                      <p>Платежные решения от iPay.ua позволяют это сделать максимально быстро и безопасно. Имея огромный опыт в реализации, мы предоставляем клиентам очень гибкие и разнообразные инструменты, которые позволяют решить задачу клиента максимально подходящим способом.</p>
                      <a href="commercial.html" class="more-link">подробнее<i></i></a>
                    </div>
                    <div class="col-lg-6">
                      <img src="./img/commercial-tab-large.png" alt="">
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                    <div class="col-lg-6">
                      <h6>Сферы бизнеса</h6>
                      <h5>Коммунальные предприятия</h5>
                      <p>Основной задачей коммунального предприятия при сборе платежей является уровень своевременных оплат. </p>
                      <p>Решение от iPay.ua позволяет повысить уровень своевременных оплат, благодаря организации приема к оплате платежных карт на сайтах коммунальных предприятий, что обеспечивает доступность канала приема платежей в режиме 24/7.</p>
                      <a href="utilities.html" class="more-link">подробнее<i></i></a>
                    </div>
                    <div class="col-lg-6">
                      <img src="./img/utilities-tab-large.png" alt="">
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="row">
                    <div class="col-lg-6">
                      <h6>Сферы бизнеса</h6>
                      <h5>Интернет провайдеры</h5>
                      <p>Интернет-провайдеры являются одними из наших приоритетных Партнеров. На сегодняшний день мы обеспечиваем поддержку электронных оплат в пользу более, чем 100 интернет-провайдеров. Именно поэтому, в нашей компании есть выделенные account-менеджеры, которые досконально знакомы со спецификой рынка провайдеров телекоммуникационных услуг. </p>
                      <a href="internet.html" class="more-link">подробнее<i></i></a>
                    </div>
                    <div class="col-lg-6">
                      <img src="./img/internet-tab-large.png" alt="">
                    </div>
                  </div>
            </div>
          </div>  
      </div>
    </div>

  </div>
</section>

<section class="services">
  <div class="container">
      <div class="row"> 
        <div class="col-12">  
          <h4 class="section-title">Наши Услуги</h4>
        </div>
      </div>
      <ul class="nav nav-tabs services-icons" id="myTab" role="tablist">
        <li class="nav-item services-icons">
          <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true">
            <img src="./img/design.png" alt="">
            <p class="services-descr">Дизайн и верстка</p>
            <span class="circle"></span>
          </a>
        </li>
        <li class="nav-item services-icons">
          <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false">
            <img src="./img/development.png" alt="">
            <p class="services-descr">Разработка и техподдержка</p>
            <span class="circle"></span>
          </a>
        </li>
        <li class="nav-item services-icons">
          <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false">
            <img src="./img/support.png" alt="">
            <p class="services-descr">Служба клиентской поддержки</p>
            <span class="circle"></span>
          </a>
        </li>
        <li class="nav-item services-icons">
          <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">
            <img src="./img/planning.png" alt="">
            <p class="services-descr">Финансовые расчеты</p>
            <span class="circle"></span>
          </a>
        </li>
        <div class="line-bg"></div>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
          <p>Отличительной чертой компании является возможность обеспечения штатными сотрудниками всего производственного цикла продукта. Одним из самых важных элементов разработки является дизайн и верстка страницы. Именно грамотно реализованный интерфейс пользователя (дизайн) позволяет максимизировать конверсию (продажу) на сайте нашего партнера. С этой целью очень важно профессионально разработать понятный для клиента и функциональный дизайн платежной страницы или даже целого раздела сайта.</p>
          <div class="text-center">
            <a href="design.html" class="more-link"><span>подробнее <i></i></span></a>
          </div>
        </div>
        <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
          <p>Разработка платежных решений iPay.ua является уникальной собственной разработкой. Это позволяет нам первыми на рынке реализовывать сложные, а самое главное, успешные инновационные проекты. Быть технологически гибкими и максимально оперативно вносить изменения по запросам наших клиентов.</p>
          <div class="text-center">
            <a href="development.html" class="more-link"><span>подробнее <i></i></span></a>
          </div>
        </div>
        <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
          <p>В штате компании, в виде отдельной структурной единицы, есть Служба клиентской поддержки В контакт-центре работает 15 человек с посменным режимом работы.</p>
          <div class="text-center">
            <a href="support.html" class="more-link"><span>подробнее <i></i></span></a>
          </div>
        </div>
        <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
          <p>Компания iPay.ua предоставляет полный комплекс услуг, связанных с приемом платежных карт онлайн. В том числе проведение финансовых расчетов по принятым платежам. Для этого компания имеет финансовую лицензию и зарегистрирована Национальным банком Украины, как оператор платежных услуг.</p>
          <div class="text-center">
            <a href="finance.html" class="more-link"><span>подробнее <i></i></span></a>
          </div>
        </div>
      </div>
  </div>  
</section>

<section class="security">
  <div class="container">
    <div class="row"> 
      <div class="col-12 d-visible">
        <h4 class="section-title">Безопасность</h4>
      </div>
      <div class="col-md-6 col-12 left">  
          <img src="./img/security.png" alt="">
      </div>
      <div class="col-md-6 col-12">
          <h4 class="section-title d-hidden">Безопасность</h4>
          <p>Сервис iPay.ua - ведущий платежный сервис Украины. <br>Нашим партнерами являются более 1000 компаний. <br>Ежемесячно через сервис iPay.ua совершается более 1 млн. платежей.<br>При совершении платежа используются данные платежной карты, поэтому вопросы безопасности и защищенности информации наших клиентов и клиентов наших Партнеров стоят на первом месте.</p>
          <div class="row security-bottom">
            <div class="col-lg-4 col-12">
              <a href="security-page.html" class="more-link">подробнее<i></i></a>
            </div>
            <div class="col-lg-8 col-12 security-bottom-img">
              <img src="./img/pci.png" alt=""><img src="./img/cyber.png" alt="" class="cyber">
            </div>
          </div>
      </div>
    </div>
  </div>  
</section>


<section class="examples">
  <div class="container">
    <div class="row"> 
      <div class="col-12">
          <h4 class="section-title">примеры наших решений</h4>
      </div>
      <div class="col-12">  
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/examples/wogpay.png" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="img-wr">
                    <img src="./img/wog-sm.png" alt="">
                  </div>
                  <p>Реализация оплаты в один клик в мобильном приложении WOG</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/examples/wogstore.png" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="img-wr">
                    <img src="./img/wog-sm.png" alt="">
                  </div>
                  <p>Реализация онлайн-магазина для компании WOG wogstore.ipay.ua</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/examples/ukrbilling.png" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="img-wr">
                    <img src="./img/ukrbilling1.png" alt="">
                  </div>
                  <p>Организация оплат за комунальные услуги на сайте Ukrbilling кошельком Masterpass</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/examples/dtek.png" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="img-wr">
                    <img src="./img/d-tec-min.png" alt="">
                  </div>
                  <p>Организация приема коммунальных платежей на сайте ДТЭК. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/examples/maximum.png" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="img-wr">
                    <img src="./img/maximum_min.png" alt="">
                  </div>
                  <p>Организация автоматической регулярной оплаты для интернет-провайдера Maximum.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>        
      </div>
    </div>
  </div>  
</section>

<section>
  <div class="container">
    <div class="row"> 
      <div class="col-12">  
          <h4 class="section-title">Партнеры</h4>
      </div>
    </div>
    <div class="row partners-icons">
      <div class="partners-img-wr"><img src="./img/partners/1.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/2.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/3.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/4.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/5.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/6.png" alt=""></div>
    </div>
    <div class="row partners-icons">
      <div class="partners-img-wr"><img src="./img/partners/7.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/8.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/9.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/10.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/11.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/12.png" alt=""></div>
    </div>
    <div class="row partners-icons">
      <div class="partners-img-wr"><img src="./img/partners/13.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/14.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/15.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/16.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/17.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/18.png" alt=""></div>
      <div class="partners-img-wr"><img src="./img/partners/21.png" alt=""></div>
    </div>

  </div>  
</section>


<section class="team main">
  <div class="container">
    <div class="row"> 
      <div class="col-12">
          <h4 class="section-title">Команда</h4>
      </div>
      <div class="col-md-3">
        <img src="./img/velikanov.png" alt="" class="d-hidden">
        <img src="./img/velikanov.png" alt="" class="d-visible">
        <h6>Великанов Евгений</h6>
        <p class="team-descr">Директор</p>
      </div>
      <div class="col-md-3">
        <img src="./img/anton.png" alt="" class="d-hidden">
        <img src="./img/anton-xs.png" alt="" class="d-visible">
        <h6>Антон Косторниченко</h6>
        <p class="team-descr">Коммерческий директор</p>
      </div>
      <div class="col-md-3">  
        <img src="./img/kushnerov.png" alt="" class="d-hidden">
        <img src="./img/kushnerov.png" alt="" class="d-visible">
        <h6>Кушнеров Александр</h6>
        <p class="team-descr">ИТ Директор</p>
      </div>
      <div class="col-md-3">
        <img src="./img/prilipko.png" alt="" class="d-hidden">
        <img src="./img/prilipko.png" alt="" class="d-visible">
        <h6>Татьяна Прилипко</h6>
        <p class="team-descr">Финансовый директор</p>
      </div>
    </div>
  </div>
  <div class="team-bootom">
    <div class="container">
      <div class="row">
        <div class="col-md-3 pr-0 d-hidden">
          <img src="./img/anton.png" alt="">
        </div>
        <div class="col-md-9 right">
          <div class="team-bootom-img-wr">
            <img src="./img/anton.png" alt="" class="d-visible">
            <div class="">
              <h6>Антон Косторниченко</h6>
              <p class="team-descr">Коммерческий директор</p>
            </div>
          </div>
          <p>Опыт работы в финансовой сфере с 2005 года. 
            Много лет возглавлял направление розничного бизнеса крупного коммерческого банка. 
            <br> К команде iPay.ua присоединился в августе 2015 года. </p>
          <p class="quote">“Моей самой главной целью в работе является услышать и понять потребности клиента. Это позволяет нашей компании предложить продукт и сервис, которые помогают развивать нашим Партнерам свой бизнес с минимальными усилиями с их стороны”.</p>
        </div>
      </div>
    </div>  
  </div>
</section>

<section class="reviews" id="reviews">
  <div class="container">
    <div class="row"> 
      <div class="col-12 d-visible">
        <h4 class="section-title">Отзывы</h4>
      </div>
      <div class="col-12">  
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="10"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="11"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="12"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="13"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/bessubov.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Александр Беззубов</h5>
                      <p class="review-name-descr">Директор по развитию электронной коммерции, Альфа банк</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Александр Беззубов</h5>
                      <p class="review-name-descr">Директор по развитию электронной коммерции, Альфа банк</p>
                    </div>
                    <p class="review">iPay – один из самых активных партнеров Альфа-Банка, постоянно следящий за тенденциями на рынке услуг электронной коммерции, денежных переводов и новинок в сфере онлайн платежей, с нескончаемым потоком идей по реализации новых услуг и сервисов для клиентов. Совместно с iPay, Альфа-Банк запустил ряд инновационных сервисов, которые заняли лидирующие позиции на рынке электронной коммерции. Во многом, данные результаты достигнуты благодаря оперативному взаимодействию и грамотному построению процессов сотрудничества Партнера с Банком. Клиентоориентированность, организованность, способность находить гибкие решения, позволяющие быстро реагировать на изменения рынка - далеко не весь перечень качеств нашего Партнера. iPay всегда предоставляет обратную связь по всем реализованным сервисам Банка с предложениями по улучшению, не давая расслабиться ни на минуту. Спасибо Вам, что помогаете нам быть лучше!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/Alexandr-Gaponov.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Александр Гапонов</h5>
                      <p class="review-name-descr">Эльдорадо</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Александр Гапонов</h5>
                      <p class="review-name-descr">Эльдорадо</p>
                    </div>
                    <p class="review">В лице компании iPay.ua мы нашли надежного платежного партнера. Для нас очень важно то, что iPay.ua комплексно закрывает вопросы, связанные с приемом платежей на сайте. Начиная от технической интеграции и заканчивая поддержкой клиентом, оперативным урегулированием финансовых взаиморасчетов и уникальной системой противодействия мошенничеству.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/elena_dmitrieva.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Елена Дмитриева</h5>
                      <p class="review-name-descr">член Наблюдательного Совета Банка "Глобус"</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Елена Дмитриева</h5>
                      <p class="review-name-descr">член Наблюдательного Совета Банка "Глобус"</p>
                    </div>
                    <p class="review">Вне сомнения, сегодня Компания iPay является законодателем мод в Интернет - пространстве Украины: все новые, самые инновационные сервисы можно найти на сайтах iPay и ее партнеров. Для Банка «Глобус» сотрудничество с iPay является стратегически важным, так как классический банковский бизнес уходит в прошлое, а будущее - за синергией технологических решений и банковских услуг. Спасибо команде iPay за наше быстрое погружение в мир Интернет - платежей, и мы уверены, что с Вами нас и наших клиентов ждет много нового и интересного!

                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/istomin.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Иван Истомин</h5>
                      <p class="review-name-descr">CEO, PayForce.ua </p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Иван Истомин</h5>
                      <p class="review-name-descr">CEO, PayForce.ua </p>
                    </div>
                    <p class="review">Ключевые преимущества нашего сотрудничества с iPay.ua: готовность и открытость совместно искать и развивать новые направления платёжного бизнеса, выходить за рамки общепринятого и традиционного, повышать эффективность текущего взаимодействия" </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/klimenko.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Олег Клименко</h5>
                      <p class="review-name-descr">Директор департамента развития розничного бизнеса, ОТП Банк </p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Олег Клименко</h5>
                      <p class="review-name-descr">Директор департамента развития розничного бизнеса, ОТП Банк </p>
                    </div>
                    <p class="review">В текущих рыночных условиях понятие "партнер" приобретает все более широкое значение. В основе всегда были и есть такие категории как: надежность, честность и прозрачность отношений. Рынок заставляет идти дальше и говорить о таких качествах как: креативность, готовность к новым вызовам, оперативность реакции на запросы партнера и готовность подсказывать партнеру идеи, которые помогут ему оптимизировать бизнес процессы и найти новые сферы деятельности. Все указанные качества это - визитная карточка компании iPay и лично - Антона Косторниченко. Сотрудничество всегда: креативное, надежное и оперативное (что важно в транзакционном бизнесе) и результативно для обеих сторон. Из фактов: запущенные сервисы: сервис денежных переводов MONEGO, переводы с карты на карту, оплата счета по реквизитам.
                      Спасибо за то, что Вы умеете быть "Партнером".</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/kushil.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Олег Кушель</h5>
                      <p class="review-name-descr">Директор департамента информационных технологий WOG</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Олег Кушель</h5>
                      <p class="review-name-descr">Директор департамента информационных технологий WOG</p>
                    </div>
                    <p class="review">Выбирая платежного партнера мы прежде всего ориентировались на желание и способность компании принимать активное участие в развитии наших услуг. За 2 года совместной работы мы поняли, что не ошиблись, когда заключили контракт с IPay.ua. Специалисты компании оперативно реагируют на новые требования и активно помогают при обращении конечных потребителей. Высокая компетенция iPay.ua в платежных технологиях позволяют нам в сжатые сроки внедрять новые и качественные сервисы для своих клиентов.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/stanislav-moshkin1.png" alt="">
                  </div>
                  <div class="review-person d-visible">
                      <h5 class="review-name">Станислав Мошкин</h5>
                      <p class="review-name-descr">директор MoneyBoom, Pozichka</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Станислав Мошкин</h5>
                      <p class="review-name-descr">директор MoneyBoom, Pozichka</p>
                    </div>
                    <p class="review">Самое главное качество, которое мы увидели в компании iPay.ua – это клиентоориентированность. Мы уверены в том, что всегда получим поддержку в решении любой проблемной ситуации. А стабильность работы iPay.ua и наличие службы мониторинга позволяют нашим сервисам быть всегда доступными в режиме 24/7 для клиентов, что является критически важным для нас.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/lanet.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Дмитрий Ганзенко</h5>
                    <p class="review-name-descr">заместитель директора Сети Ланет</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Дмитрий Ганзенко</h5>
                      <p class="review-name-descr">заместитель директора Сети Ланет</p>
                    </div>
                    <p class="review">"IPay - это глоток свежего предпринимательского духа на консервативном банковском рынке Украины. Даже сейчас, в эпоху fintech-стартапов
                      большинство компаний платежных систем работает по принципу: сделаем сайт и
                      будем принимать коммунальные платежи и пополнение мобильного. В сравнении
                      с этим, что делает iPay - это просто космос. Когда я несколько лет
                      назад, узнал об их проекте запуска "" бесконтактной "" заправки на WOG - у
                      меня челюсть упала. Затем похожая штука на ОККО, потом продвижения системы
                      Masterpass - это и есть настоящий "" Врыв "" на рынок.
                      Ну и, конечно, customer friendly система работы с партнерами, техническая
                      поддержка с человеческим лицом и т.п. Все как мы любим.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/maximumnet.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Вадим Алимов</h5>
                    <p class="review-name-descr">SEO</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Вадим Алимов</h5>
                      <p class="review-name-descr">SEO</p>
                    </div>
                    <p class="review">Компания iPay.ua является одним из наших основных партнёров по приему платежей уже несколько лет. У нас есть как обычный эквайринг, так и masterpass с регулярными отплатами. Мы ценим то как ребята оперативно и качественно реагируют на наши обращения, пожелания и запросы, это наверное и есть клиентоориентированность.В iPay.ua мы видим надёжного финансового партнёра и нам нравится ,благодаря партнёрству,  внедрять первыми все новинки рынка.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/triolan.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Максим Кравчук</h5>
                    <p class="review-name-descr">Руководитель направления телевидения</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Максим Кравчук</h5>
                      <p class="review-name-descr">Руководитель направления телевидения</p>
                    </div>
                    <p class="review">Когда мы вводили абонплату за телевидение стала необходимость наладить приём абонплаты за короткий срок. С Ipay.ua мы сразу заключили договор, в контакте с менеджером согласовали все вопросы по договору и приступили. Персональный менеджер ускоряет решение любых новых задач, взаимодействие между подразделениями и обращений от абонентов. Приятно работать с компанией, желающей делать эффективней и креативней не только свой бизнес, но и наш, потому мы планируем развивать сотрудничество и партнёрство. В сотрудничестве узнал много нового для себя, и хочу отметить высокий технический уровень компании и много возможностей развития услуг и коммуникаций
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/information-tehnology.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Владимир Коновалов</h5>
                    <p class="review-name-descr">Руководитель контакт-центра</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Владимир Коновалов</h5>
                      <p class="review-name-descr">Руководитель контакт-центра</p>
                    </div>
                    <p class="review">Компания ООО" Информационные технологии", в моем лице, выражает огромную благодарность за сотрудничество одному из партнёров в сфере онлайн платежей, сервису IPay. Несмотря на длительную интеграцию, наше сотрудничество продолжается уже около 3-х лет. Хотелось бы подчеркнуть всестороннюю комплексную проработку оказываемых услуг и их грамотное оформление, высокая квалификация и компетентность сотрудников, позволяет решать возникающие трудности, оперативно и качественно. ООО" Информационные технологии" считает возможным рекомендовать сервис IPay в качестве квалифицированого сервиса онлайн платежей.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/ohmylook.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Женя Максименко</h5>
                    <p class="review-name-descr">СОО сервисов Oh my Look, Oh my book и G bar.</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Женя Максименко</h5>
                      <p class="review-name-descr">СОО сервисов Oh my Look, Oh my book и G bar.</p>
                    </div>
                    <p class="review">"Одна из самых больших ценностей в нашем партнёрстве, это возможность поддержки 24/7.
                      Наш аккаунт-менеджер всегда на связи.И это дорогого стоит!
                      В iPay.ua работают настоящие профессионалы и это касается ИТ, бухгалтерии и менеджеров."
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/VRtualit.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Никита Жилкин</h5>
                    <p class="review-name-descr">Основатель VRtualiti Park</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Никита Жилкин</h5>
                      <p class="review-name-descr">Основатель VRtualiti Park</p>
                    </div>
                    <p class="review">iPay.ua крутые и признанные эксперты в сфере fintech! Пришел по рекомендации и был приятно удивлен их качественным сервисом и современным подходом. Выбирая себе партнёра по онлайн оплатам мы выбрали лучших на рынке и явно не ошиблись! Очень рады сотрудничеству.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-3 col-12 bg-dark pr-0 carousel-item-top">
                  <div class="review-foto">
                    <img src="./img/reviews/vodokanal.jpg" alt="">
                  </div>
                  <div class="review-person d-visible">
                    <h5 class="review-name">Клименко Ернест Петрович</h5>
                    <p class="review-name-descr">Директор департаменту інформаційного забезпечення і зв’язку</p>
                  </div>
                </div>
                <div class="col-md-9 col-12">
                  <div class="review-wr">
                    <h4 class="section-title d-hidden">Отзывы</h4>
                    <div class="review-person d-hidden">
                      <h5 class="review-name">Клименко Ернест Петрович</h5>
                      <p class="review-name-descr">Директор департамента информационного обеспечения и связи</p>
                    </div>
                    <p class="review">Возможность предоставить абонентам современные и удобные способы оплаты это путь к сокращению задолженности. На этом пути нам помог партнер, компания iPay.ua, которая разработала удобную форму оплаты для сайта а также выполнила интеграцию в личный кабинет, и позволила проводить оплаты в один клик сканированием QR кода с квитанции. Все решения поддерживаются на качественном уровне, поэтому мы уверены, что абоненты не испытывают никаких трудностей при оплате.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>        
      </div>
    </div>
  </div>  
</section>

<?php get_footer(); ?>
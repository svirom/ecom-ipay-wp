<?php ?>

<section class="footer">
  <div class="container">
    <div class="row footer-items-wr"> 
      <div class="footer-item">
        <a class="brand" href="#">
          <span class="logo-descr">Интернет эквайринг</span>
          <img src="./img/logo-footer.png" alt="">
        </a>
      </div>
      <div class="footer-item">
        <p>Подключение платежных решений для обеспечения онлайн оплат и регулярных платежей</p>
      </div>
      <div class="footer-item footer-links">
        <a href="tel:+380445025075"><i class="fa fa-phone foot-icon_and_text"></i> +38 044 502 50 75</a>
        <a href="mailto:sales@ipay.ua"><i class="fa fa-envelope-o foot-icon_and_text"></i>sales@ipay.ua</a>
      </div>
      <div class="footer-item contacts">
        <p><i class="fa fa-map-marker foot-icon_and_text"></i>г. Киев, ул. Нижнеюрковская, 45 а</p>
        <p><i class="fa fa-clock-o foot-icon_and_text"></i>пн-пт 09:00 - 18:00</p>
      </div>
    </div>
  </div>  
  <div class="footer-bottom">
    <div class="col-12 text-center">
        <p>© іPay.ua Общество с ограниченной ответственностью «Универсальные платежные решения» </p>
    </div>
  </div>
</section>

<!-- scripts -------------------------- -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<script>
      $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('.navbar-wr').addClass('bg-dark');
        } else {
            $('.navbar-wr').removeClass('bg-dark');
        }
      });

      $('.navbar-toggler').click(function() {
          var wid = $(window).width();

          if(wid < 992 && $(window).scrollTop() === 0) {
            
            if ($('.navbar-wr').hasClass('bg-dark')) {
              setTimeout(function() {
                $('.navbar-wr').removeClass('bg-dark');
              }, 300);
            } else {
              $('.navbar-wr').addClass('bg-dark')
            }

          }
      });
  </script> 

  <?php wp_footer(); ?>
</body>
</html> 

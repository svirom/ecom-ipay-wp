(function($) {
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
})(jQuery);
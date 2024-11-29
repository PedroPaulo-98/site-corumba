!(function($) {
    "use strict";

     // Preloader
     $(window).on('load', function() {
        if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow', function() {
            $(this).remove();
        });
        }
    });
  
    // PT-BR: Navegação móvel
    if ($('.nav-menu').length) {
      var $mobile_nav = $('.nav-menu').clone().prop({
        class: 'mobile-nav d-lg-none'
      });
      $('body').append($mobile_nav);
      $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
      $('body').append('<div class="mobile-nav-overly"></div>');
  
      $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        $('.mobile-nav-overly').toggle();
      });
  
      $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
      });
  
      $(document).click(function(e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            $('.mobile-nav-overly').fadeOut();
          }
        }
      });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
      $(".mobile-nav, .mobile-nav-toggle").hide();
    }
  
    // PT-BR: Ação do botão de voltar ao topo
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
  
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  
    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({delay: 10, time: 1000});

    // Init AOS
    function aos_init() {AOS.init({duration: 1000, once: true});}
    $(window).on('load', function() {aos_init();});
    
    function pageData() {
        $.post(window.location.origin + '/.callback/website/loadOnlineWorkship.php', {}, 
        function(callback){
            if (callback){
                $('#date_register').html(callback[0].date);
                $('#description').html('<h2>Culto online</h2>' + callback[0].description);
                if (callback[0].video != '' && callback[0].video != null) {
                    $('#video').html('<iframe width="100%" height="450" src="https://www.youtube.com/embed/' + callback[0].video + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
                }              
            }    
        });
    }    
    pageData();

  })(jQuery);
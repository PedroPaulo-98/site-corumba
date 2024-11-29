!(function($) {
    "use strict";
  
    // PT-BR: Estrutura path do domíno.
    var pathname = window.location.pathname.split('/');
  
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
        $.post(window.location.origin + '/.callback/website/loadMinistry.php', {code:pathname[2]}, 
        function(callback){
            if (callback){
                $('#date_register').html(callback[0].date);
                $('#ministry_image').html('<img src="' + window.location.origin + '/storage/image/ministry/' + callback[0].image + '" class="img-fluid w-100" alt="CAPA" /> ');
                $('#ministry_description').html('<h2>' + callback[0].title + '</h2>' + callback[0].description);
                if (callback[0].video != '' && callback[0].video != null) {
                    $('#ministry_video').html('<iframe width="100%" height="450" src="https://www.youtube.com/embed/' + callback[0].video + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
                }              
            }    
        });
    }    
    pageData();
  
    function recentministry() {
        $.post(window.location.origin + '/.callback/website/recentMinistry.php', {code:pathname[2]}, 
        function(callback){
            if (callback.length) {
                let ministry = '';
                for (let i = 0; i < callback.length; i++) {
                  ministry += '<div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">';
                  ministry += '<div class="card">';
                  ministry += '<img src="'+ window.location.origin + '/storage/image/ministry/' + callback[i].image + '" class="card-img-top" alt="CAPA">';
                  ministry += '<div class="card-body">';
                  ministry += '<h5 class="card-title">' + callback[i].title + '</h5>';
                  ministry += '<p class="card-text">';
                  ministry += '<small>' + callback[i].description + '...</small><br><br>';
                  ministry += '<a href="' + window.location.origin + '/ministerio/' + callback[i].code + '"><button type="button" class="btn btn-outline-info btn-sm mt-3">Conhecer mais</button></a>';
                  ministry += '</p>';
                  ministry += '</div>';
                  ministry += '</div>';
                  ministry += '</div>';
                }
                document.getElementById('list_ministry').innerHTML += ministry;
            }  
        });
    }    
    recentministry(); 
  
  })(jQuery);
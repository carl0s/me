      function calcSize() {
        var heightScreen = $(window).outerHeight();
        var widthScreen = $(window).outerWidth();
        $("#hero").css({ "height": heightScreen });
        $("#hero").css({ "width": widthScreen });
        $(".sliding").css({ "width": widthScreen });
        $(".off-canvas").css({ "height": heightScreen });

      }
      $(document).foundation();
      calcSize();
      $(window).resize(function() {
        calcSize();
      });

      $('#further').on('click', function() {
        $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top }, 1000);
        return false;
      });

      $('.hamburger').click(function() {
        $(this).toggleClass('open');
        $('.off-canvas').toggleClass('open').toggleClass('hidden');
        $('#hero').toggleClass('open');
        $('.sliding').toggleClass('open');
        // $('#topics').toggleClass('open');
        return false;
      });

      $('#hero.open').find('.row').click(function() {
        console.log('a');
        $(this).parents('#hero').toggleClass('open');
        $(this).parents('#hero').find('.hamburger').toggleClass('open');
        $('.off-canvas').toggleClass('open').toggleClass('hidden');
        return false;
      });

      $(document).scroll(function() {
        var height_scroll = $("#hero").outerHeight();
        var article_height_scroll = $('.image-wrapper').outerHeight();
        if ($(document).scrollTop() >= (height_scroll/2)) {
          $('#small-hero').addClass("fixed");
        } else {
          $('#small-hero').removeClass("fixed");
        }

        if ($(document).scrollTop() >= (article_height_scroll)) {
          $('#fixed-article-header').addClass("fixed");
        } else {
          $('#fixed-article-header').removeClass("fixed");
        }

      });


      // PRELOAD

  var paceOptions = {
    ajax: false, // disabled
    document: false, // disabled
    eventLag: false, // disabled
    elements: {
      selectors: ['body']
    }
  };

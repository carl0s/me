      function calcSize() {
        var heightScreen = $(window).outerHeight();
        var widthScreen = $(window).outerWidth();
        $("#hero").css({ "min-height": heightScreen });
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

      $('.hamburger').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('.off-canvas').toggleClass('open').toggleClass('hidden');
        $('#hero').toggleClass('open');
        $('.sliding').toggleClass('open');
        // $('#topics').toggleClass('open');
        return false;
      });

      $('#hero.open').find('.row').click(function() {
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
          $('.sliding-share').addClass('appeared');
        } else {
          $('#fixed-article-header').removeClass("fixed");
          $('.sliding-share').removeClass('appeared');

        }

      });

      $(document).ready(function() {
          textToShare = '';
          $(document).mousemove(function(m) {
              generateTooltipPosition();
          });
      });
      $('.icon-search').click(function() {
        $('.search-form').addClass('active');
      });


      $(document).mouseup(function() {
          $(document).mousemove(function(m) {
              generateTooltipPosition()
          });
          var textToShare = getTextToShare();
          var MBLSharetip = document.getElementById("MBLSharetip");
          if (textToShare != '') showMeTooltip();
      });

      $(document).click(function() {
          var textToShare = getTextToShare();
          var tooltipTitle = null;
          var newTooltipTitle = $("#MBLSharetip").attr("title");
          if (newTooltipTitle == "") return;
          if (newTooltipTitle !== tooltipTitle) $('#MBLSharetip').animate({
              opacity: 0
          }, 30);
          if (textToShare != "") showMeTooltip();
      });
      $(window).resize(function() {
          if ($('#MBLSharetip').show()) {
              $('#MBLSharetip').animate({
                  opacity: 0
              }, 30);
          }
      });
      function showMeTooltip() {
          var pageURL = window.location.toString();
          var twitterLink = "https://twitter.com/intent/tweet?text=" + getTextToShare() + "&via=" + twitterAccount + "&url=" + pageURL;
          $('#MBLSharetip').show();
          $('#MBLSharetip').animate({
              opacity: 1
          }, 30);
          $('#sendToTwitter').attr('href', twitterLink);
      }
      function getTextToShare() {
          shareTxt = '';
          if (window.getSelection) {
              shareTxt = window.getSelection();
              generateTooltipPosition();
          } else if (document.getSelection) {
              shareTxt = document.getSelection();
              generateTooltipPosition();
          }
          return shareTxt;
      }
      function generateTooltipPosition() {
          var selection = window.getSelection && window.getSelection();
          if (selection && selection.rangeCount > 0) {
              range = selection.getRangeAt(0);
              pos = $(window).scrollTop();
              selection_text = selection.toString(), rect = range.getBoundingClientRect();
              $('#MBLSharetip').css({
                  top: (rect.top + pos - 60) - 32 + 'px',
                  left: rect.left + (rect.width / 2) + 'px',
              });
          }
      }





      // PRELOAD

  var paceOptions = {
    ajax: false, // disabled
    document: false, // disabled
    eventLag: false, // disabled
    elements: {
      selectors: ['body']
    }
  };

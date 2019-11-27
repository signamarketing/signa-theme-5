(function($) {
  var Scripts = {
    init() {
      this.bindEvents();
      this.startupKit();
      this.stickyHeader();
    },

    bindEvents() {
      var self = this;
      // show mobile nav
      $(document).on("touchstart, click", ".navbar .btn-navbar", function(e) {
        e.preventDefault();
        $('html.nav-visible').find('.nav-collapse').hide();
        $(".navbar").find('.nav-collapse').show();
        $(".navbar").toggleClass('nav-visible');
        $('html').toggleClass('nav-visible');
      });

      // always close mobile nav
      $(document).on("click", ".nav-visible .nav-top li a", function() {
        self._close_nav();
      });
    },

    _close_nav() {
      $('.navbar').removeClass('nav-visible');
      $('html').removeClass('nav-visible');
    },

    _open_nav() {
      $(".navbar").find('.nav-collapse').show();
      $(".navbar").addClass('nav-visible');
      $('html').addClass('nav-visible');
    },

    equalHeight() {
      let target = $(document).find('.equalheight');
      let width = target.width();
      target.height(width);
    },

    startupKit() {
      var self = this;
      $(document).ready(function() {
        setTimeout(function() {
          $('html').addClass('loaded');
        }, 400);
      });
    },

    stickyHeader() {
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 63) {
          $(".site-header").addClass("fixed");
        } else {
          $(".site-header").removeClass("fixed");
        }
      });
    },

  };

  Scripts.init();
})(jQuery);


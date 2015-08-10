;(function($){

  // ==============================================
  // MOBILE HEADER NAVIGATION
  // ==============================================
  //
  // - The mobile nav toggle icon + the menu that slides out from the side

  var MobileHeaderNav = function(){
    
    var _this = this;

    this.$body = $(document.body);
    this.$toggleEl = null;
    this.$nav = null;
    this.$navParentLinks = null;
    this.$navParentLinksULs = null;

    var isOpen = false;

    this._initialize = function(){
      this.$toggleEl = $('.header-nav-mobile-toggle');
      this.$nav = $('.header-nav-mobile');
      this.$close = $('.hnm-close');
      this.$navParentLinks = this.$nav.find('a.has-children').filter(':not(.level0)'); // Womens, Unisex...toggleable links
      this.$navParentLinksULs = this.$navParentLinks.siblings('ul');

      this.$navParentLinksULs.hide();

      this.attachHandlers();

      return this;
    };

    this.attachHandlers = function(){
      this.$toggleEl.on('click', function(){
        isOpen ? _this.closeNav() : _this.openNav();
        return false;
      });

      this.$close.on('click', function(){
        _this.closeNav();
        return false;
      });

      this.$navParentLinks.on('click', function(){
        var $clickedLink = $(this);
        var $clickedLinkUL = $clickedLink.siblings('ul');
        $clickedLinkUL.slideToggle();
        _this.$navParentLinksULs.not($clickedLinkUL).slideUp();
        return false;
      });
    };

    this.closeNav = function(){
      this.$nav.removeClass('show');
      this.$body.removeClass('nav-mobile-open');
      isOpen = false;
      return this;
    };

    this.openNav = function(){
      this.$nav.addClass('show');
      this.$body.addClass('nav-mobile-open');
      isOpen = true;
      return this;
    };

    return this._initialize();

  };

  $(function(){
    
    var mobileHeaderNav     = new MobileHeaderNav();
    
    var footerInstagramFeed = new Instafeed({
      get: 'user',
      userId: 1423636911,
      clientId: 'c98519f417fb49328d7c0c0e2207d167',
      accessToken: '1423636911.c98519f.a9f00f7aba0f48dba092fdccad459e54',
      target: 'footer-gallery-list-insta',
      template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></li>',
      limit: 6,
      resolution: 'low_resolution',
      before: function(){
        $("#footer-gallery-list-insta").empty().html('<div id="instagram-loading" class="text-center">Loading...</div>');
      },
      success: function(){
        $("#instagram-loading").remove();
      },
      error: function(){
        $('.footer-gallery').hide(); // Pretend it never happened
      }
    });

    footerInstagramFeed.run();

  });
 

})(jQuery);
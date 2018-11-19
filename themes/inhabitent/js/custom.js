console.log('hihello');

(function($) {
  $(document).ready(function() {
    $(function() {
      $('.top-navigation').addClass('header-transparent');

      const $homeHero = $('.home-hero');
      const $aboutHeader = $('.page-template-about .entry-header');

      if ($homeHero.length) {
        console.log('Home Hero Exists!');
        checkScroll($homeHero);
      }

      if ($aboutHeader.length) {
        console.log('About Hero Exists!');
        checkScroll($aboutHeader);
      }

      /*
       * Change the nav style on scroll
       */
      function checkScroll(headerElement) {
        $(window).scroll(function() {
          let heroTop = headerElement.height();
          console.log(heroTop);

          if ($(this).scrollTop() >= heroTop) {
            $('.top-navigation').removeClass('header-transparent');
            // console.log('scrollTop >= heroTop');
          } else {
            $('.top-navigation').addClass('header-transparent');
            // console.log('scrollTop is not >= heroTop');
          }
        });
      }

      /*
       * Search Toggle
       */

      $('.toggle-search-icon').on('click', function() {
        $('.search-field').addClass('search-show');
        console.log('search toggle clicked');
      });

      $('.search-field').on('blur', function() {
        $('.search-field').removeClass('search-show');
        console.log('blurred');
      });
    });

    //todo add search form toggle script (use focus and blur)
  }); //doc-ready
})(jQuery);

//IIFE
//imediately invoked function expression
// the last bracket has jquery in it, it just tells the function that hwen it sees $ it means jquery

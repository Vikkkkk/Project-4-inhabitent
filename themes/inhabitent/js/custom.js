console.log('hihello');

(function($) {
  $(document).ready(function() {
    $(function() {
      $(window).scroll(function() {
        let heroTop = $('.home-hero').height();
        if ($(this).scrollTop() >= heroTop) {
          $('.top-navigation').addClass('header-below');
          $('.menu-main-container ').addClass('nav-color');

          console.log('white');
        } else {
          $('.top-navigation').removeClass('header-below');
          $('.menu-main-container').removeClass('nav-color');
          console.log('blk');
        }
      });
    });

    //todo add search form toggle script (use focus and blur)
  }); //doc-ready
})(jQuery);

//IIFE
//imediately invoked function expression
// the last bracket has jquery in it, it just tells the function that hwen it sees $ it means jquery

// ('use strict');
// !(function(t) {
//   t(function() {
//     t('.search-toggle').on('click', function(e) {
//       e.preventDefault();
//       var i = t(this).siblings('label');
//       i.animate({ width: 'toggle' }), i.children('[type="search"]').focus();
//     }),
//       t('.search-field').on('blur', function() {
//         '' === t(this).val() &&
//           t('.header-search label').animate({ width: 'hide' });
//       });
//   });
// })(jQuery);

console.log('hihello');

(function($) {
  $(document).ready(function() {
    //your code here
    console.log('wtf');
    $('body').append('hello');

    //todo add search form toggle script (use focus and blur)
  });
})(jQuery);

//IIFE
//imediately invoked function expression
// the last bracket has jquery in it, it just tells the function that hwen it sees $ it means jquery

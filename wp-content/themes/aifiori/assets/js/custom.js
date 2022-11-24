jQuery(document).ready(function () {
   // jQuery(".vc_images_carousel").swiperight(function () {
   //    jQuery(this).carousel('prev');
   // });
   // jQuery(".vc_images_carousel").swipeleft(function () {
   //    jQuery(this).carousel('next');
   // });
   jQuery('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav'
   });
   jQuery('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: false,
      focusOnSelect: true
   });
});
jQuery(document).ready(function () {
   jQuery('.navbar-toggler').click(function() {
      jQuery('body').toggleClass('openmenu');
      jQuery('#content').toggle();
   });
});
jQuery(document).ready(function($) { 
   jQuery('img').hover(function() { 
       jQuery(this).removeAttr('title');
   }); 
});
// jQuery(document).ready(function() {  

//   //Enable swiping...
//   jQuery(".vc_carousel-inner").swipe( {
//     //Generic swipe handler for all directions
//     swipeLeft:function(event, direction, distance, duration, fingerCount) {
//       jQuery(this).parent().carousel('prev'); 
//     },
//     swipeRight: function() {
//       jQuery(this).parent().carousel('next'); 
//     },
//     //Default is 75px, set to 0 for demo so any distance triggers swipe
//     threshold:0
//   });
// });

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

/*
var $container = $('#team-grid');
// init
$container.isotope({
  // options
  itemSelector: '.employee',
  layoutMode: 'fitRows'
});
*/


$(document).ready(function() {
 
  $("#home-carousel").owlCarousel({
      autoPlay : 10000,
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
      paginationNumbers: true,
      //navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
      navigationText: ["<img class='arrow-left' src='/images/arrow-left.svg'/>","<img class='arrow-right' src='/images/arrow-right.svg'/>"]
  });
  
  $("#project-carousel").owlCarousel({
      autoPlay : 10000,
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
      paginationNumbers: true,
      //navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
      navigationText: ["<img class='arrow-left' src='/images/arrow-left.svg'/>","<img class='arrow-right' src='/images/arrow-right.svg'/>"]
  });
 
  $('#btn-proj-overview').click(function() {
    $('.project-panel').toggle();
    return false;
  });

  $('#btn-close-panel').click(function() {
    $('.project-panel').toggle();
    return false;
  });


});
$(document).ready(function() {

// Animate header
  $('.title').delay(1000).animate({ top: '+=250' }, 1000);
  $('.p1').delay(2000).animate({ top: '+=450' }, 1000);
  $('.p2').delay(3000).animate({ top: '+=450' }, 1000);
  $('.display_none').delay(5000).show(0);
  $('.menu_arrow').delay(5000).animate({ top: '-=100' }, 600, 'easeOutElastic');

// Hoverpulse navbar
  $('.navbar-img').hoverpulse({
    size: 4, 
    speed: 100
  }); 

// Elevate zoom for portfolio
  $("#current_project").elevateZoom({
  zoomType : "inner",
  easing : true,
  responsive : true
  });

// Parallax effect
  $('#header').parallax("center", 526, 0.2, true);
  $('#school').parallax("left", 2300, 0.5, true);
  $('#quote_back').parallax("left", 2800, 0.5, true);
  $('#contact').parallax("center", 5000, 0.2, true);
});

// Navbar fixed top
$(function() {
    $('.under-navbar').height($("#nav").height());  

    $('#nav').affix({
        offset: { top: $('#nav').offset().top }
    });

    
});
// Ready function end

// Navbar scrollto

$('#aboutme').click(function(e) {
  e.preventDefault();
  $.scrollTo("#about", 1000);
});

$('#skills_nav').click(function(e) {
  e.preventDefault();
  $.scrollTo("#skills", 1000);
});

$('#portfolio_nav').click(function(e) {
  e.preventDefault();
  $.scrollTo("#portfolio", 1000);
});

$('#contact_nav').click(function(e) {
  e.preventDefault();
  $.scrollTo("#contact", 1000);
});

// Polaroid start
$('.navbar').waypoint(function(direction) 
{
    $('.polaroid_picture').css("opacity", "1");
    $('.polaroid_picture').animate({ top: '+=270' }, 2000);
},  
{ 
    triggerOnce: true 
});

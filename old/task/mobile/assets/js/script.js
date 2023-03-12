

$(document).ready(function(){

	$(".add-cart-btn").click(function(){
	  $(this).toggleClass("addplus");
	});
	
	$("a.menu").click(function(){
	  $("#app").toggleClass("openbar");
	});
	$("a.cross-icon").click(function(){
	  $("#app").toggleClass("openbar");
	});
	
// declare variable
  var scrollTop = $(".btmtotop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();
  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD
  
  // Caret Icon JS
  
	$('.panel-collapse').on('show.bs.collapse', function () {
	$(this).siblings('.cat-head').addClass('ishow');
	});
	
	$('.panel-collapse').on('hide.bs.collapse', function () {
	$(this).siblings('.cat-head').removeClass('ishow');
	});
	
	 var swiper1 = new Swiper('.s1', {
      slidesPerView: 5,
      spaceBetween: 10,
      freeMode: true      
    });
	
	var swiper2 = new Swiper('.s2', {
      slidesPerView: 3,
      spaceBetween: 5,
      freeMode: true      
    });
	
	var swiper3 = new Swiper('.s3', {
      slidesPerView: 2,
      spaceBetween: 10,
      freeMode: true      
    });
	
});





$(document).ready(function(){
/*Menu Scroll js*/
$(".munenav>li>a").click(function(){
  $(".hamburgermenu").toggleClass("open");
  $(".fullmenu").toggleClass("d-flex");
  $("body").toggleClass("overflow-hide");
});

/*Smooth Scroll js*/
$("a.withhash").on('click', function(event) {    
    if (this.hash !== "") {      
      event.preventDefault();      
      var hash = this.hash;      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
  
/*Menu Icon js*/	
$(".hamburgermenu").click(function(){
  $(this).toggleClass("open");
  $(".fullmenu").toggleClass("d-flex");
  $("body").toggleClass("overflow-hide");
});



});


/*Filter isotop Gallery js*/
$(window).on('load', function () {
	var $container = $('.portfolioContainer');
	$container.isotope({
		filter: '*',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		}
	});

	$('.portfolioFilter a').click(function(){
		$('.portfolioFilter .current').removeClass('current');
		$(this).addClass('current');

		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		});
		return false;
	});
});


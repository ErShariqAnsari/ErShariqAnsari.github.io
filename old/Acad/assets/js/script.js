$(document).ready(function(){

/*******************************
* Number Counting JS
*******************************/
var a = 0;
$(window).scroll(function () {
var oTop = $('#counter').offset().top - window.innerHeight;
if (a==0 && $(window).scrollTop() > oTop) {
$('.count-num').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
a = 1;
}
});

/*******************************
* Carousel 5 items in a Row JS
*******************************/

$('#carouselExample').on('slide.bs.carousel', function (e) {
  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item.proditem').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item.proditem').eq(i).appendTo('.carousel-inner.prodinner');
            }
            else {
                $('.carousel-item.proditem').eq(0).appendTo('.carousel-inner.prodinner');
            }
        }
    }
});

  $('#carouselExample').carousel({ 
                interval: 2000
        });
		
});
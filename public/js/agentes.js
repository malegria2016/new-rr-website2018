

$("#mostrarMenuMovil").click(function(){
    $("#menuMovil").toggle();
});



$(document).ready(function(){
	$('.rooms-gallery').slick({
		slidesToShow: 1,
		dots: true,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		autoplay: true,
		infinite: true
	});
});




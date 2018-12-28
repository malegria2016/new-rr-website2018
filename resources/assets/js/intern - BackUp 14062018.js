/** 
import { print } from "util";
*/
var elements_rooms_gallery = $('.room-gallery');
var elements_areas_gallery = $('.areas-gallery');
var elements_dinning_gallery = $('.dinning-gallery');
var elements_activities_gallery = $('.activities-gallery');

var elements_rooms_gallery_full = $('.room-gallery-full');
var elements_areas_gallery_full = $('.areas-gallery-full');
var elements_dinning_gallery_full = $('.dinning-gallery-full');
var elements_activities_gallery_full = $('.activities-gallery-full');

$(document).ready(function () {
		
	$(".loader").fadeOut("slow");
	$(".btn-resort-foor-plan").on("click", function() {
		if($("#modal-foor-plan").length > 0) {
			$img = $(this).attr("href");
			$("#modal-foor-plan").find("img#floor-image").attr("src", $img);
		}
	});

	$(window).on("resize", function () {
		//createFirstCarrouselGallery();
	});

	//Menu 
	var menues = $("ul.menu-information li");
	var information_menus = $("ul.content-information");
	menues.hover(function () {
		menues.removeClass("active");
		$(this).addClass("active");
		information_menus.removeClass("active");
		var hola = this;
		for (var i = 0; i < menues.length; i++) {
			if (hola == menues[i]) {
				$(information_menus[i]).addClass("active");
			}
		}
	}, function () {});

	//Booking Engine header
	//Booking Engine
	var arrayDate = {
		'orientation': 'bottom',
		'format': "mm/dd/yyyy",
		'todayHighlight': true,
	
		'startDate': 'today',
	};
	$("#check-in").datepicker(arrayDate).on('changeDate', function (e) {
		var date2 = $(this).datepicker('getDate');
		date2.setDate(date2.getDate() + 1);
		$(this).datepicker('hide');
		$('#check-out').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
	});
	$("#check-in-2").datepicker(arrayDate).on('changeDate', function (e) {
		var date2 = $(this).datepicker('getDate');
		date2.setDate(date2.getDate() + 1);
		$(this).datepicker('hide');
		$('#check-out-2').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
	});
	$("#prueba1").datepicker(arrayDate).on('changeDate', function (e) {
		var date3 = $(this).datepicker('getDate');
		date3.setDate(date3.getDate() + 1);
		$(this).datepicker('hide');
		console.log("a");
		$('#prueba2').datepicker('setStartDate', date3).datepicker('setDate', date3).datepicker('show');
		
	});

	$('#check-out').datepicker(arrayDate).on('changeDate', function (e) {
		$(this).datepicker('hide');
	});
	$('#check-out-2').datepicker(arrayDate).on('changeDate', function (e) {
		$(this).datepicker('hide');
	});
	$('#prueba2').datepicker(arrayDate).on('changeDate', function (e) {
		$(this).datepicker('hide');
	});
	//Select 2 Combobox
	var b = $(".combo");

	if (b.length > 0) {
		$('.combo').select2({
			allowClear: true,
			minimumResultsForSearch: Infinity
		});
	}


	// Beach Destination Page
	//Page Destination Intern video Config form Plyr.js
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if (width <= 900) {
		$(".desk-video").remove();
	
		$( "filter-button" ).click(function( event ) {
			event.preventDefault();

		  });
	} else {
		$(".movil-video").remove();
		var a = $("#player");

		if (a.length == 1) {
			var player = new Plyr('#player', {
				autoplay: true,
				muted: true,
				loop: {
					active: true
				},
			});

			player.source = {
				type: 'video',
				sources: [{
					src: 'PAtu5ja1u70',
					provider: 'youtube',
				}, ],
			};
			player.play();
		} else {}
	}

	//Destination intern
	//Carrusel destination

	$('.carousel-destination').slick({
		arrows: false,
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '.content-carousel-destination',
		focusOnSelect: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]
	});

	$('.content-carousel-destination').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.carousel-destination',
	});

	$('.things-to-do').slick({
		slidesToShow: 6,
		slidesToScroll: 6,
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 1
			}
		}]
	});
	//Detination Intern animation Bar Slider
	if ($('#destination-bar').length > 0) {
		var bar = new ProgressBar.Line('#destination-bar', {
			strokeWidth: 4,
			easing: 'easeInOut',
			duration: 10000,
			color: '#00ACED',
			trailColor: '#eee',
			trailWidth: 1,
			svgStyle: {
				width: '100%',
				height: '100%'
			}
		});


		function recBar() {
			bar.animate(1.0, function () {
				$('.content-carousel-destination').slick('slickNext');
				bar.set(0);
				recBar();
			});
		}
		recBar();

		$('.destination-element').on('click', function () {
			bar.set(0);
			recBar();
		});
	}

	// Collapse element Destination

	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if(width<=425){
		
		function filtroSpecials() {
			var x = document.getElementById("specials-destino").value;
			switch (x) {
				case '0':
				var value = "all";
				break;
				case '1':
				var value = "ca";
				break;
				case '2':
				var value = "rm";
				break;
				case '3':
				var value = "pdc";
				break;
				case '4':
				var value = "pm";
				break;
				case '5':
				var value = "sm";
				break;
				case '6':
				var value = "co";
				break;
				case '7':
				var value = "pc";
				break;
				default:
					break;
			}
			if (value == "all") {
				$('.filter').removeClass('hidden');
				$('.filter').show('8000');
			} else {
				// $('.filter[filter-item="'+value+'"]').removeClass('hidden');
				// $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
				$(".filter").not('.' + value).hide('3000');
				$('.filter').filter('.' + value).show('3000');
	
			}
			
			
			
		}
		var des= document.getElementById("specials-destino");
		if(des){
			
			document.getElementById("specials-destino").onchange = function() {filtroSpecials()};
		}
	
	
		
		$('.owl-carousel.tour-intern').owlCarousel({
			loop: true,
			nav: true,
			margin: 2,
			navText: ["<img src='/img/flecha-izquierda-gris.png'>", "<img src='/img/flecha-derecha-gris.png'>"],
			responsive: {
				0: {
					items: 1,
					margin: 2,
					nav:true,
					navText: ["<img src='/img/flecha-izquierda-gris.png'/>", "<img src='/img/flecha-derecha-gris.png'/>"],
				},
				600: {
					items: 2,
					navText: ["<img src='/img/flecha-izquierda-gris.png'/>", "<img src='/img/flecha-derecha-gris.png'/>"],
				},
				1000: {
					items: 3,
	
				},
				1100: {
					items: 4,
	
				}
			}
		});

	
		
	

			//Tour Package Page
	//Section Tour package General
	$('.owl-carousel.specials').owlCarousel({
		loop: false,
		margin: 2,
		navText: ["<img src='/img/specials-arrow-izq.png'>", "<img src='/img/specials-arrow-der.png'>"],
		nav: true,
		responsive: {
			0: {
				items: 1,
			},
			668: {
				items: 2,
			}
			
		}
	});
	}
	if (width <= 767) {
		// Reubicar collpase Destination para movil
		$('#resort-cancun').appendTo('#aqui-cancun');
		$('#resort-carmen').appendTo('#aqui-carmen');
		$('#resort-morelos').appendTo('#aqui-morelos');
		$('#resort-maya').appendTo('#aqui-maya');

		$('#resort-cana').appendTo('#aqui-cana');
		$('#resort-curacao').appendTo('#aqui-curacao');
		$('#resort-marteen').appendTo('#aqui-marteen');

		$(document).on('show', '.accordion', function (e) {

			$(e.target).prev('.accordion-heading').addClass('accordion-opened');
		});

		$(document).on('hide', '.accordion', function (e) {
			$(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
		});

		
		

	} else {
		//Reubicar collpase Destination para Escritorio Tabs Destinations

	
		$('#resort-cancun').collapse('show');

		var destination = 'resort-cancun';

		$('#resort-cancun').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-cancun';
			}
		});

		$('#resort-carmen').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-carmen';
			}
		});

		$('#resort-morelos').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-morelos';
			}
		});

		$('#resort-maya').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-maya';
			}
		});

		$('#resort-cana').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-cana';
			}
		});

		$('#resort-curacao').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-curacao';
			}
		});

		$('#resort-marteen').on('show.bs.collapse', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (width > 767) {
				if (destination != '') {
					$('#' + destination).collapse('hide');
				}
				destination = 'resort-marteen';
			}
		});

		// Cerrar collapse al cambiar de tab
		$('#pills-caribbean-tab, #pills-mexican-tab').on('click', function () {
			var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			var idTab = $(this)[0].id;
			if (width > 767) {
				var seleccionado = document.querySelector('#' + idTab);
				if (seleccionado != 'true') {
					if (destination != '') {
						if(idTab == 'pills-caribbean-tab'){
							$('#resort-cana').collapse('show');
							$('#resort-cana').on('show.bs.collapse', function () {
								var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
								if (width > 767) {
									if (destination != '') {
										$('#' + destination).collapse('hide');
									}
									destination = 'resort-cana';
								}
							});
						}else{
							$('#resort-cancun').collapse('show');
							$('#resort-cancun').on('show.bs.collapse', function () {
								var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
								if (width > 767) {
									if (destination != '') {
										$('#' + destination).collapse('hide');
									}
									destination = 'resort-cancun';
								}
							});
						}
					}
				}
			}
		});

	} //Enf if

	// Resort General Tabs
	$('#pills-resort-all').on('click', function () {

		if ($('#resort-mexican').hasClass('hidden-resort')) {
			$('#resort-mexican').removeClass('hidden-resort');
			$('#resort-mexican').addClass('show-resort');
			$('#resort-mexican').addClass('apear-all');
		}
		if ($('#resort-mexican').hasClass('show-resort')) {
			$('#resort-mexican').removeClass('hidden-resort');
			$('#resort-mexican').addClass('show-resort');
			$('#resort-mexican').removeClass('apear-mexican');
			$('#resort-caribean').removeClass('apear-caribean');
			$('#resort-mexican').addClass('apear-all');
		}
		if ($('#resort-caribean').hasClass('hidden-resort')) {
			$('#resort-caribean').removeClass('hidden-resort');
			$('#resort-caribean').addClass('show-resort');
			$('#resort-mexican').addClass('apear-all');
			$('#resort-caribean').addClass('apear-all');
		}
		if ($('#resort-caribean').hasClass('show-resort')) {
			$('#resort-mexican').removeClass('hidden-resort');
			$('#resort-mexican').addClass('show-resort');
			$('#resort-mexican').removeClass('apear-mexican');
			$('#resort-caribean').removeClass('apear-caribean');
			$('#resort-caribean').addClass('apear-all');
		}
	});
	$('#pills-resort-mexican').on('click', function () {
		if ($('#resort-mexican').hasClass('hidden-resort')) {
			$('#resort-mexican').removeClass('hidden-resort');
			$('#resort-mexican').addClass('show-resort');
			$('#resort-mexican').addClass('apear-mexican');
			$('#resort-caribean').removeClass('apear-caribean');
			$('#resort-mexican').removeClass('apear-all');
		}
		if ($('#resort-caribean').hasClass('show-resort')) {
			$('#resort-caribean').removeClass('show-resort');
			$('#resort-caribean').addClass('hidden-resort');
			$('#resort-mexican').addClass('apear-mexican');
			$('#resort-mexican').removeClass('apear-all');
			$('#resort-caribean').removeClass('apear-all');
		}
	});
	$('#pills-resort-caribean').on('click', function () {
		if ($('#resort-mexican').hasClass('show-resort')) {
			$('#resort-mexican').removeClass('show-resort');
			$('#resort-mexican').addClass('hidden-resort');
			$('#resort-mexican').removeClass('apear-mexican');
			$('#resort-caribean').addClass('apear-caribean');
			$('#resort-mexican').removeClass('apear-all');
			$('#resort-caribean').removeClass('apear-all');
		}
		if ($('#resort-caribean').hasClass('hidden-resort')) {
			$('#resort-caribean').removeClass('hidden-resort');
			$('#resort-caribean').addClass('show-resort');
			$('#resort-caribean').addClass('apear-caribean');
			$('#resort-caribean').removeClass('apear-all');
			$('#resort-mexican').removeClass('apear-all');
		}
	});
	//Resort Interna 

	$('.owl-carousel.resortpromotion').owlCarousel({
		loop: true,
		nav: true,
		margin: 2,
		navText: ["<img src='/img/specials-arrow-izq.png'>", "<img src='/img/specials-arrow-der.png'>"],
		responsive: {
			0: {
				items: 1,
				margin: 10,
				navText: ["<img src='/img/flecha-izquierda.png'>", "<img src='/img/flecha-derecha.png'>"],
			},
			600: {
				items: 2,
				navText: ["<img src='/img/flecha-izquierda.png'>", "<img src='/img/flecha-derecha.png'>"],
			},
			1000: {
				items: 3,

			},
			1100: {
				items: 4,

			}
		}
	});

	$('.owl-carousel.reviews').owlCarousel({
		loop: true,
		nav: false,
		margin: 2,
		autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
		responsive: {
			0: {
				items: 1

			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

	$('.restaurants-tabs').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		asNavFor: '.restaurants-nav'
	});

	$('.restaurants-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.restaurants-tabs',
		dots: false,
		arrows: true,
		centerMode: false,
		focusOnSelect: true,
		responsive: [{
				breakpoint: 767,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}

		]
	});



	//Type of trips Page

	//Carousel types of trips general
	$('.carousel-type-of-trips').slick({
		arrows: true,
		slidesToShow: 7,
		slidesToScroll: 1,
		asNavFor: '.content-carousel-trips',
		focusOnSelect: true,
		responsive: [{
				breakpoint: 767,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '0px',
					slidesToShow: 1
				}
			}

		]
	});

	$('.content-carousel-trips').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.carousel-type-of-trips'
	});

	var arrayColor = ['#fdb319', '#f12525', '#e96b00', '#00aced', '#da005c', '#4ca92b', '#000000'];
	var next = 0;
	var colorBar = arrayColor[next];
	if ($('#trips-bar').length > 0) {
		var barTrips = new ProgressBar.Line('#trips-bar', {
			strokeWidth: 4,
			easing: 'easeInOut',
			duration: 10000,
			color: colorBar,
			trailColor: '#eee',
			trailWidth: 1,
			svgStyle: {
				width: '100%',
				height: '100%'
			}
		});

		function recBarTrips() {
			barTrips.animate(1.0, function () {
				$('.content-carousel-trips').slick('slickNext');
				next++;

				if (next <= arrayColor.length - 1) {
					colorBar = arrayColor[next];
				} else {
					next = 0;
					colorBar = arrayColor[next];
				}
				barTrips.path.setAttribute('stroke', colorBar);
				barTrips.set(0);
				recBarTrips();
			});
		}

		recBarTrips();

		$('.carousel-type-of-trips').on('afterChange', function (event, slick, direction) {
			next = slick.currentSlide - 1;
			switch (slick.currentSlide) {
				case 0:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 1:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 2:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 3:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 4:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 5:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
				case 6:
					barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
					barTrips.set(0);
					recBarTrips();
					break;
			}
		});
	}
	// Carousel payment
	$('.carousel-payment').slick({
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		focusOnSelect: true,

	});

	/* Resorts Slick Carousel */
	var menuResorts= document.getElementById("links-resorts");
	if(menuResorts){
		
		var URLactual = $(".links-menu-gris");
		var arregloUrls=  [
			URLactual[0].childNodes[1].href,
			URLactual[0].childNodes[3].href,
			URLactual[0].childNodes[5].href,
			URLactual[0].childNodes[7].href,
			URLactual[0].childNodes[9].href
		];
		
	
		document.getElementById("links-resorts").onchange = function() {menuResortsMovil()};
		
	}
	function menuResortsMovil() {

		var y = document.getElementById("links-resorts").value;
		
		switch (y) {
			case '0':
			location.href = arregloUrls[0];
			break;
			case '1':
			location.href = arregloUrls[1];
			break;
			case '2':
			location.href = arregloUrls[2];;
			break;
			case '3':
			location.href = arregloUrls[3];;
			break;
			case '4':
			location.href = arregloUrls[4];;
			break;
			default:
			location.href = arregloUrls[0];
			break;
		
		}
	}



	$('.resort-gallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.resort-gallery-nav',
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
			}
		}]
	});

	$('.resort-gallery-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.resort-gallery',
		dots: false,
		arrows: true,
		centerMode: false,
		focusOnSelect: true
	});

	//Carousel rooms

	$('.rooms-gallery').slick({
		slidesToShow: 1,
		dots: true,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		autoplay: true,
		infinite: true,
	});

	//Bar animation and slider type of trips


	/* Type of trips  Individual */

	//Tabs Individual trip

	$('.menu-trip').slick({
		arrows: false,
		slidesToShow: 7,
		autoplay: false,
		slidesToScroll: 1,
		asNavFor: '.content-tabs-trip',
		focusOnSelect: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 1
			}
		}]
	});

	$('.content-tabs-trip').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.menu-trip'
	});

	$('.submenu-trip').slick({
		arrows: false,
		slidesToShow: 8,
		autoplay: false,
		slidesToScroll: 1,
		initialSlide: 1,
		asNavFor: '.subcontent-trip',
		focusOnSelect: true,

	});
	$('.subcontent-trip').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		initialSlide: 1,
		arrows: false,
		autoplay: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.submenu-trip'
	});
	/* End Slick Type of trips Individual */

	// Specials Page


	//Special Intern
	// Carousel Specials

	$('.carousel-specials').slick({
		arrows: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.content-carousel-specials',
		focusOnSelect: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]
	});

	$('.content-carousel-specials').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.carousel-specials',
	});

	$(".filter-button").click(function () {
		var value = $(this).attr('data-filter');
		if (value == "all") {
			$('.filter-a').addClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "ca") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').addClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "rm") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').addClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "pdc") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').addClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "pm") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').addClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "sm") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').addClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "co") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').addClass('botonActivo');
			$('.filter-h').removeClass('botonActivo');
		}
		if (value == "pc") {
			$('.filter-a').removeClass('botonActivo');
			$('.filter-b').removeClass('botonActivo');
			$('.filter-c').removeClass('botonActivo');
			$('.filter-d').removeClass('botonActivo');
			$('.filter-e').removeClass('botonActivo');
			$('.filter-f').removeClass('botonActivo');
			$('.filter-g').removeClass('botonActivo');
			$('.filter-h').addClass('botonActivo');
		}

		if (value == "all") {
			$('.filter').removeClass('hidden');
			$('.filter').show('8000');
		} else {
			// $('.filter[filter-item="'+value+'"]').removeClass('hidden');
			// $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
			$(".filter").not('.' + value).hide('3000');
			$('.filter').filter('.' + value).show('3000');

		}
	});

	if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");

	//Section Specials Intern Slick Info
	// Carousel  Tours

	$('.carousel-tours').slick({
		arrows: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.content-carousel-tours',
		focusOnSelect: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]
	});

	$('.content-carousel-tours').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.carousel-tours'
	});

	if ($('#tours-bar').length > 0) {
		var bar = new ProgressBar.Line('#tours-bar', {
			strokeWidth: 4,
			easing: 'easeInOut',
			duration: 10000,
			color: '#00ACED',
			trailColor: '#eee',
			trailWidth: 1,
			svgStyle: {
				width: '100%',
				height: '100%'
			}
		});

		function recBar() {
			bar.animate(1.0, function () {
				$('.content-carousel-tours').slick('slickNext');
				bar.set(0);
				recBar();
			});
		}
		//recBar();

		$('.tours-element').on('click', function () {
			bar.set(0);
			//recBar();
		});
	}


	$("#booking-btn").on('click', function () {
		$("#booking-interno").toggleClass("show-booking");
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
		var windowTop = $(document).scrollTop();
		if (windowTop > 28) {
			$("#booking-interno").removeClass("show-booking");
			$("#booking-interno").toggleClass("show-booking");
		}
	});

	$("#booking-movil").on('click', function () {
		$("#booking-interno").toggleClass("show-booking");
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
		var windowTop = $(document).scrollTop();
		if (windowTop > 28) {
			$("#booking-interno").removeClass("show-booking");
			$("#booking-interno").toggleClass("show-booking");
		}
	});


	//Page Specials Intern Timer Counter
	if ($('#timer1').length > 0) {
		var ten_days = 1000 * 60 * 60 * 24;
		var end = new Date(new Date().getTime() + ten_days);;
		var timer = Countdown.timer(end, function (timeLeft) {
			var seconds = timeLeft.seconds;
			var minutes = timeLeft.minutes;
			var hours = timeLeft.hours;
			if(String(seconds).length == 1){
				seconds = '0'+ String(seconds);
			}
			if(String(minutes).length == 1){
				minutes = '0'+ String(minutes);
			}
			if(String(hours).length == 1){
				hours = '0'+ String(hours);
			}
			$('#timer1').text(hours + ':' + minutes + ':' + seconds);
			$('#timer2').text(hours + ':' + minutes + ':' + seconds);
			$('#timer3').text(hours + ':' + minutes + ':' + seconds);
			$('#timer4').text(hours + ':' + minutes + ':' + seconds);
		}, function () {
		});
	}



	//Tour Package Intern Special  and Packages blue section
	$('.owl-carousel.tour-package-interna').owlCarousel({
		loop: true,
		nav: true,
		navText: ["<img src='/img/specials-arrow-izq.png'>", "<img src='/img/specials-arrow-der.png'>"],
		margin: 2,
		responsive: {
			0: {
				items: 1,
				navText: ["<img src='/img/flecha-izquierda.png'>", "<img src='/img/flecha-derecha.png'>"],
			},
			600: {
				items: 2,
				navText: ["<img src='/img/flecha-izquierda.png'>", "<img src='/img/flecha-derecha.png'>"],
			},
			1000: {
				items: 3,

			},
			1100: {
				items: 3,

			}
		}
	});

	// Funciones menu movil
	var menu_movil = false;
	$('#mostrar_menu_movil').on('click', function () {
		var menu = document.getElementById("oculto");
		if (menu_movil) {
			menu_movil = false;
			menu.style.left = "-100%";
		} else {
			menu_movil = true;
			menu.style.left = 0;
		}
	});

	var click = 's';
	$("#oculto").on('click', function () {
		var menu = document.getElementById("oculto");
		if (click == 'click') {
			click = 's';
		} else {
			menu_movil = false;
			menu.style.left = "-100%";
			click = 's';
		}
	});

	$(".menu-oculto").on("click", function () {
		click = 'click';
	});


	// Carousel Gallery
	$('.tabs-galeria-slick').slick({
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		focusOnSelect: true,
		asNavFor: '.content-galleria-slick',
	});
	$('.content-galleria-slick').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		touchMove: false,
		swipe: false,
		asNavFor: '.tabs-galeria-slick',
	});

	//Carousel Gallery

	$('.gallery-gallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.gallery-gallery-nav',
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
			}
		}]
	});

	$('.gallery-gallery-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.gallery-gallery',
		dots: false,
		arrows: true,
		centerMode: false,
		focusOnSelect: true
	});

	$('#gallery-buttons button').on('click', function (algo) {
		// Destruimos los slick
		$('.gallery-gallery-nav').slick('unslick');
		$('.gallery-gallery').slick('unslick');
		// Eliminamos la clase active
		$('button').removeClass('active');
		// Agregamos la clase active al boton activo
		$(this).addClass('active');
		switch ($(this).val()) {
			case 'all':
				// Mandamos llamar a la función que tomará todas las imagenes y las unira en un solo string
				all_element([elements_rooms_gallery, elements_areas_gallery, elements_dinning_gallery, elements_dinning_gallery], "gallery-gallery-nav").then(function (success) {
					// Se concatena el String que se retornó en el elemento correspondiente
					$('.gallery-gallery-nav').append(success);
					// Se crea el carousel
					createSecondCarruselGallery(5);
					// Lo mismo pero para el carousel grande
					all_element([elements_rooms_gallery_full, elements_areas_gallery_full, elements_dinning_gallery_full, elements_dinning_gallery_full], "gallery-gallery").then(function (success) {
						// Se concatena el String que se retornó en el elemento correspondiente
						$('.gallery-gallery').append(success);
						// Se crea el carousel
						createFirstCarrouselGallery();
						
						$('.gallery-gallery, .gallery-gallery-nav').slick('slickGoTo', 0);
					});
				});
				break;
			case 'room':
				lista_galeria(elements_rooms_gallery, "gallery-gallery-nav").then(function (success) {
					$('.gallery-gallery-nav').append(success);
					createSecondCarruselGallery(5);
					lista_galeria(elements_rooms_gallery_full, "gallery-gallery").then(function (success) {
						$('.gallery-gallery').append(success);
						createFirstCarrouselGallery();
						$('.gallery-gallery, .gallery-gallery-nav').slick('slickGoTo', 0);
					});
				});
				break;
			case 'areas':
				lista_galeria(elements_areas_gallery, "gallery-gallery-nav").then(function (success) {
					$('.gallery-gallery-nav').append(success);
					createSecondCarruselGallery(5);
					lista_galeria(elements_areas_gallery_full, "gallery-gallery").then(function (success) {
						$('.gallery-gallery').append(success);
						createFirstCarrouselGallery();
						$('.gallery-gallery, .gallery-gallery-nav').slick('slickGoTo', 0);
					});
				});
				break;
			case 'dinning':
				lista_galeria(elements_dinning_gallery, "gallery-gallery-nav").then(function (success) {
					$('.gallery-gallery-nav').append(success);
					createSecondCarruselGallery(5);
					lista_galeria(elements_dinning_gallery_full, "gallery-gallery").then(function (success) {
						$('.gallery-gallery').append(success);
						createFirstCarrouselGallery();
						$('.gallery-gallery, .gallery-gallery-nav').slick('slickGoTo', 0);
					});
				});
				break;
			case 'activities':
				lista_galeria(elements_activities_gallery, "gallery-gallery-nav").then(function (success) {
					$('.gallery-gallery-nav').append(success);
					createSecondCarruselGallery(5);
					lista_galeria(elements_activities_gallery_full, "gallery-gallery").then(function (success) {
						$('.gallery-gallery').append(success);
						createFirstCarrouselGallery();
						$('.gallery-gallery, .gallery-gallery-nav').slick('slickGoTo', 0);
					});
				});
				break;
		}
	});
});

function lista_galeria(galeria, carousel) {
	return new Promise(function (resolve, reject) {
		// variable para concatenar los elementos
		var element = '';
		galeria.map(function (x) {
			// Concatenar todos los elementos del array en un solo String
			element += galeria[x].outerHTML + '';
		});
		// Obtenemos el elemento padre de las imagenes
		var elemento = document.getElementById(carousel);
		while (elemento.firstChild) {
			// eliminamos todos los elementos hijos dentro del elemento padre
			elemento.removeChild(elemento.firstChild);
		}
		resolve(element);
	});
}

function all_element(array, carousel) {
	return new Promise(function (resolve, reject) {
		var element = '';
		$.each(array, function (key, photos_category) {
			$.each(photos_category, function (index, photo) {
				element += photos_category[index].outerHTML + '';
			});
		});
		// Obtenemos el elemento padre de las imagenes
		var elemento = document.getElementById(carousel);
		while (elemento.firstChild) {
			// eliminamos todos los elementos hijos dentro del elemento padre
			elemento.removeChild(elemento.firstChild);
		}
		resolve(element);
	});
}

function createFirstCarrouselGallery() {
	$('.gallery-gallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.gallery-gallery-nav',
		responsive: [{
			breakpoint: 767,
			settings: {
				arrows: true,
			}
		}]
	});
}

function createSecondCarruselGallery(slides) {
	$('.gallery-gallery-nav').slick({
		slidesToShow: slides,
		slidesToScroll: 1,
		asNavFor: '.gallery-gallery',
		dots: false,
		arrows: true,
		centerMode: false,
		focusOnSelect: true
	});
}

//**********Pasando datos al modal Ofertas Individual***** */
$(document).on("click", ".open-Modal", function () {
	var resort = $(this).data('resort');
	var ihotelier = $(this).data('ihotelier');
	var tipo = $(this).data('tipo');
	var rname = $(this).data('rname');
	var roffer = $(this).data('roffer');

	//var disableddates = ["07-01-2018", "07-03-2018", "07-05-2018", "07-07-2018"];

	validaFormEdades(resort);  //oculto casillas de edades, cambio etiquetas de edad.

	$("#hotelid").val(resort);
	$("#resortname").text(rname);
	$("#resortoffer").text(roffer);
	if(tipo==1){
		var capa = document.getElementById("form-modal");
		var input = document.createElement("input");
		input.type='hidden';
		input.name='rateplanid';
		input.id='rateplanid';
		capa.appendChild(input);
		$("#rateplanid").val(ihotelier);
		$("#packageid").remove();
	}else{
		var capa = document.getElementById("form-modal");
		var input = document.createElement("input");
		input.type='hidden';
		input.name='packageid';
		input.id='packageid';
		capa.appendChild(input);
		$("#packageid").val(ihotelier);
		$("#rateplanid").remove();
	}	
});

function validaFormEdades(resort){ //oculto casillas de edades, cambio etiquetas de edad.
  var tag_adult  = $('#tag_adult').val();
  var tag_adult2 = $('#tag_adult2').val();
  var tag_adult3 = $('#tag_adult3').val();
  var tag_teen  = $('#tag_teen').val();
  var tag_children = $('#tag_children').val();
  var tag_children2 = $('#tag_children2').val();

  if (resort=='95939' || resort=='86182' || resort=='86175' || resort=='106514'){
    $("#children2").val(0);
    $('#teenBox').hide();
    $("#spAdults").text(tag_adult2);
    $("#spChildren").text(tag_children);
  }else{
	  if (resort=='86184' || resort=='86169' || resort=='73601' || resort=='86179' || resort=='86180' || resort=='86181'){
	    $('#teenBox').show();
	    $("#spAdults").text(tag_adult);
	    $("#spChildren").text(tag_teen);
	    $("#spTeen").text(tag_children);
	  }else{
	  	  if (resort=='85285' || resort=='86117' || resort=='103541'){
		    $("#children2").val(0);
		    $('#teenBox').hide();
		    $("#spAdults").text(tag_adult3);
		    $("#spChildren").text(tag_children2);
		  } 
	  }
  }
 
}
<?php 
	$path = $_SERVER['REQUEST_URI'];
	$array = str_split($path);
	$bool = false;
	$boolview = false;
	$url='chat-general-en';
	if(count($array) > 3){
		if($array[3] === '/'){
			$bool = true;
			
		}
	}
	if(count($array) > 4){
		$boolview = true;
	}
?>
@if ( isOutdatedBrowser() )
<div class="version-navegador alert-warning m-0">{!! __('general.outdated_browser') !!}</div>
@else @endif

<header class="container-fluid sticky-top">
	<div class="row">

		@if(Agent::isDesktop())
		<div class="w-100 bg-blue">
			<div class="container">
				<nav class="navbar-nav navbar-toggleable-sm bg-blue header-top">
					<li class="nav-item bg-light d-flex justify-content-center align-items-center">
						<a class="nav-link" href="https://www.facebook.com/RoyalReservations" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center">
						<a class="nav-link" href="https://twitter.com/royalRSV" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>

					<li class="nav-item d-flex justify-content-center align-items-center">
						<a class="nav-link" href="https://www.instagram.com/royalreservations/" target="_blank"><img class="pr-1" src="{{asset('img/icon-white-instagram.svg')}}" width="21px"></a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center">
						<a class="nav-link" href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos" target="_blank"><img class="pr-1" src="{{asset('img/icon-white-youtube.svg')}}" width="21px"></a>
					</li>

					<li class="nav-item d-none d-md-block">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#manageReservation">
							<span class="it-item-menu"> 
								<div class="it-pencil"></div>
								<div class="it-content">{{ __('header.top.manage_your_reservation') }}</div>
							</span>
						</a>
					</li>

					<li class="nav-item d-none d-md-block">
						<a class="nav-link" href="{{ lang_url("/".__('routes.webcams')) }}"><img class="pr-1" src="{{asset('img/webcams-icon.svg')}}" width="21px"/><span class="text-icon">{{ __('header.top.webcams') }}</span></a>
					</li>
					<li class="nav-item d-none d-md-block">
						<a class="nav-link" href="#" onclick="window.open('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html','','width=500,height=690');return false;"><img class="pr-1" src="{{asset('img/chat-icon.svg')}}"  width="21px"/><span class="text-icon">{{ __('header.top.chat') }}</span></a>
					</li>
						<li class="nav-item dropdown d-none d-md-block exception">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" width="21px"/>{{ __('header.top.call_us.self') }}
							</a>
							<div id="drop-call" class="dropdown-menu" style="">
								<div class="row no-gutters mx-4" style="">
									<ul class="col-6 menu-information" style="">
										<li class="menu-title pb-1 w-100 active" style=""><b>{{ __('header.top.call_us.for_resorts_in_mexico') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_caribbean') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana2') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana3') }}</b>
											<div></div>
										</li>
									</ul>
									<ul class="col content-information active">
										<li class="w-100"><a href="tel:+5219984254788">Whatsapp +5219984254788</a></li>
										<li class="w-100"><a href="tel:1-888-387-4755">USA {{ __('header.top.call_us.toll_free') }} 1-888-387-4755</a></li>
										<li class="w-100"><a href="tel:01-800-888-7744">MEX {{ __('header.top.call_us.toll_free') }} 01-800-888-7744</a></li>
										<li class="w-100"><a href="tel:0-800-222-4419">ARG {{ __('header.top.call_us.toll_free') }} 0-800-222-4419</a></li>
										<li class="w-100"><a href="tel:01-800-710-2067">COL {{ __('header.top.call_us.toll_free') }} 01-800-710-2067</a></li>
										<li class="w-100"><a href="tel:1-954-736-5841">{{ __('header.top.call_us.international') }} 1-954-736-5841</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-228-7930">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7930</a></li>
										<li class="w-100"><a href="tel:0-805-080751">FRA {{ __('header.top.call_us.toll_free') }} 0-805-080751</a></li>
										<li class="w-100"><a href="tel:0-800-048-8533">GBR {{ __('header.top.call_us.toll_free') }} 0-800-048-8533</a></li>
										<li class="w-100"><a href="tel:0-800-022-2348">NLD {{ __('header.top.call_us.toll_free') }} 0-800-022-2348</a></li>
										<li class="w-100"><a href="tel:1-954-736-5863">{{ __('header.top.call_us.international') }} 1-954-736-5863</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-228-7980">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7980</a></li>
										<li class="w-100"><a href="tel:01-800-021-1199">MEX {{ __('header.top.call_us.toll_free') }} 01-800-021-1199</a></li>
										<li class="w-100"><a href="tel:1-954-736-5824">{{ __('header.top.call_us.international') }} 1-954-736-5824</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-840-1102">USA {{ __('header.top.call_us.toll_free') }} 1-888-840-1102</a></li>
										<li class="w-100"><a href="tel:01-800-020-4806">MEX {{ __('header.top.call_us.toll_free') }} 01-800-020-4806</a></li>
										<li class="w-100"><a href="tel:1-954-368-1180">{{ __('header.top.call_us.international') }} 1-954-368-1180</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-387-4757">USA {{ __('header.top.call_us.toll_free') }} 1-888-387-4757</a></li>
										<li class="w-100"><a href="tel:01-800-020-5130">MEX {{ __('header.top.call_us.toll_free') }} 01-800-020-5130</a></li>
										<li class="w-100"><a href="tel:1-954-368-1182">{{ __('header.top.call_us.international') }} 1-954-368-1182</a></li>
									</ul>
								</div>
								<div class="row px-4 no-gutters">
									<ul class="col-6" style="">
										<li class="menu-title pb-1 w-100" style=""><b>{{ __('header.top.call_us.customer_service') }}</b></li>
									</ul>
									<ul class="col-6">
										<li class="w-100"><a href="tel:1-888-721-4420">USA {{ __('header.top.call_us.toll_free') }} 1-888-721-4420</a></li>
										<li class="w-100"><a href="tel:01-800-020-1761">MEX {{ __('header.top.call_us.toll_free') }} 01-800-020-1761</a></li>
										<li class="w-100"><a href="tel:(+52) 998-848-8226">{{ __('header.top.call_us.international') }} (+52) 998-848-8226</a></li>
									</ul>
								</div>
							</div>
						</li>
						<?php
							$bool = App::getLocale() === "es";
						?> @if($bool)
						<li class="nav-item dropdown exception idiom">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: .7rem !important;">
									{{ __('general.lang.es') }}
								</a>
							<div class="dropdown-menu lenguage bg-blue m-0 b-0" aria-labelledby="navbarDropdownMenuLink" style="">
								<a class="dropdown-item text-right" href="{{ change_lang("en") }}">{{ __('general.lang.en') }}</a>
							</div>
						</li>
						@else
						<li class="nav-item dropdown exception idiom">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: .7rem !important;">
									{{ __('general.lang.en') }}
								</a>
							<div class="dropdown-menu lenguage bg-blue m-0 b-0" aria-labelledby="navbarDropdownMenuLink" style="">
								<a class="dropdown-item text-right" href="{{ lang_url('es/') }}">{{ __('general.lang.es') }}</a>
							</div>
						</li>
						@endif
					</ul>
				</nav>
			</div>
		</div>
		@endif

		<div class="w-100 av-bg-white">
			<div class="row d-block d-md-none no-gutters">
				<?php 
					$path = $_SERVER['REQUEST_URI'];
					$array = str_split($path);
					$array_partes=explode("/",$path);
					$book = false;
					if(count($array) < 5){ 
						$book = true;
					}else{
						$book = false;
					}
					if(in_array('deals',$array_partes) || in_array('ofertas',$array_partes)){
							$book = true;
					}
				?>
				<ul id="white-menu-movil" class="nav nav-pills nav-justified" style="height: 80px;">
					<li class="nav-item d-flex align-items-center justify-content-center ">
						<a href="{{ lang_url("/") }}" class="logo-header"><img class="pr-sm-4 p-md-0 pl-2" src="{{ asset('img/logo-royal.svg') }}" alt="" width="250"></a>
					</li>
					<li class="nav-item d-flex align-items-center justify-content-center">
						<a href="#" class="av-skyblue pl-1" id="mostrar_menu_movil">
							<div class="icono-ham">
								<div class="it-h"></div>
							</div>
						</a>
					</li>
				</ul>
				@if(!$book)
				<button id="booking-movil" class="av-bg-yellow"><i class="fa fa-search pr-1 fa-lg"></i><strong>{{ __('general.booking.btn.book_now') }}</strong> </button>				@endif
			</div>
			<div class="container header-button d-none d-md-block">
				<ul class="nav nav-pills nav-justified menu-principal ">
					<li class="nav-item d-flex align-items-center">
						<a href="{{ lang_url("/") }}" style="cursor: pointer !important;" class="logo-header"><img class="pr-2" id="logo-royal" src="{{ asset('img/logo-royal.svg') }}" alt="" width="300" /></a>
					</li>
					<li class="nav-item dropdown d-flex align-items-center justify-content-center ">
						<a class="nav-link" href="#" data-toggle="pill" aria-selected="true">
							{{ __('header.menu.beach_destinations.self') }}
						</a>
						<div class="dropdown-menu">
							<div class="p-0">
								<ul class="px-4 my-3 w-50 border-right-white" style="">
									<li class="menu-title pb-1"><b>{{ __('header.menu.beach_destinations.mexican_caribbean') }}</b></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/cancun/".__('routes.things_cun')) }}">{{ __('header.menu.beach_destinations.cancun') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/riviera-maya/".__('routes.things_riv')) }}">Riviera Maya</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/playa-del-carmen/".__('routes.things_pla')) }}">Playa del Carmen</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/puerto-morelos/".__('routes.things_pue')) }}">Puerto Morelos</a></li>
								</ul>
								<ul class="px-4 my-3 w-50" style="">
									<li class="menu-title pb-1"><b>{{ __('header.menu.beach_destinations.caribbean_island') }}</b></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/st-maarten/".__('routes.things_stm')) }}">Sint Maarten</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/curacao/".__('routes.things_cur')) }}">Curacao</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/punta-cana/".__('routes.things_pun')) }}">Punta Cana</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.beach_destinations')) }}">{{ __('general.all') }}</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown d-flex align-items-center justify-content-center ">
						<a class="nav-link" href="#" data-toggle="pill" aria-selected="true">
							{{ __('header.menu.resorts') }}
						</a>
						<div id="resort-menu" class="dropdown-menu py-3">
							<div class="row no-gutters mx-4 p-0">
								<ul class="col-5 menu-information">
									<li class="menu-title pb-1 w-100 active">{{ __('header.menu.beach_destinations.cancun') }}
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">Riviera Maya
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">Playa del Carmen
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">Sint Maarten
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">Curacao
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">Punta Cana
										<div></div>
									</li>
									<li class="menu-title pb-1 w-100">
										<a href="{{ lang_url("/".Lang::get('routes.beach_resorts'))}}">{{ __('general.all') }}</a>
									</li>
								</ul>
								<ul class="col-7 content-information active">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sands/the-royal-sands-resort-and-spa-all-inclusive-cancun ") }}">The Royal Sands Resort & Spa All Inclusive</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-islander/the-royal-islander-all-suites-resort-cancun ") }}">The Royal Islander All Suites Resort</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun ") }}">The Royal Caribbean All Suites Resort</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-cancun/the-royal-cancun-all-suites-resort-cancun ") }}">The Royal Cancun All Suites Resort</a></li>
								</ul>
								<ul class="col-7 content-information">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/grand-residences-riviera-cancun/".__('routes.resorts_overview_gr')) }}">Grand Residences Riviera Cancun Resort</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen") }}">The Royal Haciendas All Suites Resort & Spa</a></li>
								</ul>
								<ul class="col-7 content-information">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen") }}">The Royal Haciendas All Suites Resort & Spa</a></li>
								</ul>
								<ul class="col-7 content-information">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-beach-resort-and-marina-st-maarten
										 ") }}">The Villas at Simpson Bay Beach Resort & Marina</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/simpson-bay-resort/simpson-bay-beach-resort-and-marina-st-maarten ") }}">Simpson Bay Beach Resort & Marina</a></li>
								</ul>
								<ul class="col-7 content-information">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sea-aquarium/the-royal-sea-aquarium-resort ") }}">The Royal Sea Aquarium Resort</a></li>
								</ul>
								<ul class="col-7 content-information">
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/casa-de-campo/casa-de-campo-resort-and-villas-punta-cana ") }}">Casa de Campo Resort and Villas Punta Cana</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/ancora/ancora-punta-cana-private-residence-yacht-club") }}">Ancora Punta Cana Private Residence Yacht Club</a></li>
									<li class="w-100"><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/del-mar/del-mar-ocean-front-resort-by-joy-resorts ") }}">Del Mar Ocean Front Resort by Joy Resorts</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown d-flex align-items-center justify-content-center">
						<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.experiences')) }}" data-toggle="pill" aria-selected="true">{{ __('header.menu.type_of_trips.self') }}</a>
						<div class="dropdown-menu">
							<div class="p-0">
								<ul class="px-4 my-3 w-50 border-right-white">
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_family')) }}">{{ __('header.menu.type_of_trips.family_vacations') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_romantic')) }}">{{ __('header.menu.type_of_trips.romantic_getaway') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.adventure')) }}">{{ __('header.menu.type_of_trips.adventure') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_spa')) }}">{{ __('header.menu.type_of_trips.wellness') }}</a></li>	
								</ul>
								<ul class="px-4 py-3 w-50" style="">
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_honeymoon')) }}">{{ __('header.menu.type_of_trips.weddings_honeymoon') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_golf')) }}">{{ __('header.menu.type_of_trips.golf') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_business')) }}">{{ __('header.menu.type_of_trips.business_meetings') }}</a></li>
									<li><a href="{{ lang_url("/".Lang::get('routes.experiences')) }}">{{ __('general.allFem') }}</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="nav-item d-flex align-items-center justify-content-center ">
						<a class="nav-link cursor-pointer" href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}">{{ __('header.menu.specials') }}</a>
					</li>
					@if($boolview)
					<li class="nav-item d-flex align-items-center justify-content-center av-no-flex booking-now">
						<a class="nav-link" href="#" data-toggle="pill" aria-selected="true" id="booking-btn"><i class="fa fa-search pr-1 fa-lg"></i><strong>{{ __('general.booking.btn.book_now') }}</strong></a>
					</li>
					@else @endif

				</ul>
			</div>
		</div>
		<!-- Fin de línea blanca-->

		<div class="w-100" id="oculto">
			<div class="menu-oculto">
				<div class="scroll-movil">
					<div class="mb-2" id="reservation">
						<a href="#" data-toggle="modal" data-target="#manageReservation">
							<span class="it-item-menu"> 
									<div class="it-pencil"></div>
									<div class="it-content">{{ __('header.top.manage_your_reservation') }}</div>
							</span>
						</a>
					</div>
					<div id="accordionMovil">
						<div class="card">
							<div class="" id="headingOneMovil">
								<a class="btn btn-link w-100 text-left" data-toggle="collapse" data-target="#collapseOneMovil" aria-expanded="true" aria-controls="collapseOneMovil">
									{{ __('header.menu.beach_destinations.self') }} 
								</a>
							</div>
							<div id="collapseOneMovil" class="collapse" aria-labelledby="headingOneMovil" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.beach_destinations')."/") }}">{{ __('general.all')}}

										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">{{ __('header.menu.beach_destinations.mexican_caribbean') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/cancun/".__('routes.things_cun')."/") }}">{{ __('header.menu.beach_destinations.cancun') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/riviera-maya/".__('routes.things_riv')) }}">Riviera Maya</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/playa-del-carmen/".__('routes.things_pla')) }}">Playa del Carmen</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/puerto-morelos/".__('routes.things_pue')) }}">Puerto Morelos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="{{ lang_url("/".__('beach_destinations')) }}">{{ __('header.menu.beach_destinations.caribbean_island') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/st-maarten/".__('routes.things_stm')) }}">Sint Maarten</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/curacao/".__('routes.things_cur')) }}">Curacao</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/punta-cana/".__('routes.things_pun')) }}">Punta Cana</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="" id="headingTwoMovil">
								<a class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseTwoMovil" aria-expanded="false"
								 aria-controls="collapseTwoMovil">
									{{ __('header.menu.resorts') }} 
								</a>
							</div>
							<div id="collapseTwoMovil" class="collapse" aria-labelledby="headingTwoMovil" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.beach_resorts')."/") }}">{{ __('general.all') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">{{ __('header.menu.beach_destinations.mexican_caribbean') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-sands/the-royal-sands-resort-and-spa-all-inclusive-cancun
										 ") }}">The Royal Sands Resort & Spa All Inclusive</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-islander/the-royal-islander-all-suites-resort-cancun
										 ") }}">The Royal Islander All Suites Resort</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun
										 ") }}">The Royal Caribbean All Suites Resort</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-cancun/the-royal-cancun-all-suites-resort-cancun
										 ") }}">The Royal Cancun All Suites  Resort</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/grand-residences-riviera-cancun/".__('routes.resorts_overview_gr')) }}">Grand Residences Riviera Cancun Resort</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen
										 ") }}">The Royal Haciendas All Suites Resort & Spa</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">{{ __('header.menu.beach_destinations.caribbean_island') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-beach-resort-and-marina-st-maarten
										 ") }}">The Villas at Simpson Bay Beach Resort & Marina</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/simpson-bay-resort/simpson-bay-beach-resort-and-marina-st-maarten
										 ") }}">Simpson Bay Beach Resort & Marina</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/the-royal-sea-aquarium/the-royal-sea-aquarium-resort
										 ") }}">The Royal Sea Aquarium Resort</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/casa-de-campo/casa-de-campo-resort-and-villas-punta-cana
										 ") }}">Casa de Campo Resort and Villas Punta Cana</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/ancora/ancora-punta-cana-private-residence-yacht-club
										 ") }}">Ancora Punta Cana Private Residence Yacht Club</a>
									</li>
									<li class="nav-item">
										<a class="nav-link av-fontsize-point8" href="{{ lang_url("/".__('routes.beach_resorts')."/del-mar/del-mar-ocean-front-resort-by-joy-resorts-punta-cana
										 ") }}">Del Mar Ocean Front Resort by Joy Resorts</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="" id="headingThreeMovil">
								<a class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseThreeMovil" aria-expanded="false"
								 aria-controls="collapseThreeMovil">
									{{ __('header.menu.type_of_trips.self') }} 
								</a>
							</div>
							<div id="collapseThreeMovil" class="collapse" aria-labelledby="headingThreeMovil" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')) }}">{{ __('general.all') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_family')) }}">{{ __('header.menu.type_of_trips.family_vacations') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_romantic')) }}">{{ __('header.menu.type_of_trips.romantic_getaway') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.adventure')) }}">{{ __('header.menu.type_of_trips.adventure') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_spa')) }}">{{ __('header.menu.type_of_trips.wellness') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_honeymoon')) }}">{{ __('header.menu.type_of_trips.weddings_honeymoon') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_golf')) }}">{{ __('header.menu.type_of_trips.golf') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.experiences')."/".__('routes.experience_business')) }}">{{ __('header.menu.type_of_trips.business_meetings') }}</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="" id="headingFourMovil">
								<a class="btn btn-link w-100 text-left" href="{{ lang_url("/".__('routes.deals')) }}">
									{{ __('header.menu.specials') }}
									</a>
							</div>
							<div id="collapseFourMovil" class="collapse" aria-labelledby="headingFourMovil" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										<a class="nav-link" href="{{ lang_url("/".__('routes.deals')) }}">{{ __('general.all') }}</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div>
								<a class="btn btn-link collapsed w-100 text-left" data-toggle onclick="window.open('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html','','width=500,height=690');return false;">
									<img class="pr-1" src="{{asset('img/chat-icon.svg')}}" width="24px">{{ __('header.top.chat') }}
								</a>
							</div>
						</div>
						<div class="card">
							<div>
								<a class="btn btn-link collapsed w-100 text-left" href="{{ lang_url("/".__('routes.webcams')) }}">
										<img class="pr-1" src="{{asset('img/webcams-icon.svg')}}" width="24px">{{ __('header.top.webcams') }}
									</a>
							</div>
						</div>

						<div class="card">
							<div class="" id="headingLanguage">
								<a class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseLanguage" aria-expanded="false"
								 aria-controls="collapseLanguage">
									@if($bool) {{ __('general.lang.es')}} @else {{ __('general.lang.en')}} @endif
								</a>
							</div>
							<div id="collapseLanguage" class="collapse" aria-labelledby="headingLanguage" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										@if($bool)
										<a class="nav-link" href="{{ change_lang("en") }}">{{ __('general.lang.en')}}</a>
										@else
										<a class="nav-link" href="{{ lang_url("es/") }}">{{ __('general.lang.es')}}</a>
										@endif
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="" id="headingSevenMovil">
								<a class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseSevenMovil" aria-expanded="false"
								 aria-controls="collapseSevenMovil">
									<img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}"  width="24px"/><span class="av-yellow">{{ __('header.top.call_us.self') }}</span>
								</a>
							</div>
							<div id="collapseSevenMovil" class="collapse" aria-labelledby="headingSevenMovil" data-parent="#accordionMovil">
								<ul class="nav flex-column pl-4">
									<li class="nav-item">
										<a class="nav-link disabled">{{ __('header.top.call_us.for_resorts_in_mexico') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:+5219984254788"> Whatsapp +5219984254788</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-888-387-4755"> USA{{ __('header.top.call_us.toll_free') }} 1-888-387-4755</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:0-800-222-4419"> ARG{{ __('header.top.call_us.international') }} 0-800-222-4419</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:01-800-710-2067"> COL{{ __('header.top.call_us.lada_mx') }} 01-800-710-2067</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:01-800-888-7744"> MEX 01-800-888-7744</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-954-736-5841">1-954-736-5841</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">{{ __('header.top.call_us.for_resorts_in_caribbean') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:+5219981156413"> Whatsapp +5219981156413</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-888-228-7930">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7930</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:0-805-080751">FRA {{ __('header.top.call_us.toll_free') }} 0-805-080751</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:0-800-048-8533">GBR {{ __('header.top.call_us.toll_free') }} 0-800-048-8533</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:0-800-022-2348">NLD {{ __('header.top.call_us.toll_free') }} 0-800-022-2348</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-954-736-5863">{{ __('header.top.call_us.toll_free') }} 1-954-736-5863</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">{{ __('header.top.call_us.for_resorts_in_puntacana') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:+5219981156413"> Whatsapp +5219981156413</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-888-228-7980">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7980</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:01-800-021-1199">MEX {{ __('header.top.call_us.toll_free') }} 01-800-021-1199</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-954-736-5824">MEX {{ __('header.top.call_us.toll_free') }} 1-954-736-5824</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">{{ __('header.top.call_us.customer_service') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:1-888-721-4420">USA {{ __('header.top.call_us.toll_free') }} 1-888-721-4420</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:01-800-020-1761">MX {{ __('header.top.call_us.international') }} 01-800-020-1761</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tel:(+52) 998-848-8226">{{ __('header.top.call_us.lada_mx') }} (+52) 998-848-8226</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</header>
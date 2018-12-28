<?php 
	$boolview = false;
?>
<footer>
	@if($boolview)
	<div class="w-100 my-3">
		<div class="container lazy" id="je-newsletter">
			<div class="row no-gutters py-3">
				<div class="col-12 ">
						<p class="text-white">{{ __('footer.newsletter.text') }}</p>
						<form action="" class="form-inline">
							<div class="newsletter">
								<div class="form-group av-input-footer">
									<input type="text" class="form-control mr-3 my-2 mb-4" id="name"  required placeholder="{{ trans_choice('general.person.name', 1) }}" />
									<input type="email" class="form-control mr-3 my-2 mb-4" id="email" required placeholder="{{ __('general.person.email') }}" />
									<button type="submit" class="btn text-uppercase mb-3">{{ __('footer.newsletter.subscribe') }}</button>
								</div>
							</div>
						</form>
					 <small id="emailHelp" class="form-text text-white d-none d-md-block">{{ __('footer.newsletter.notice') }}</small>
					 <small><a href="">{{ __('footer.about_royal.policy_privacy') }}</a></small>
				</div>
			</div>
		</div>
	 </div>
	@endif

	<div class="w-100 je-bg-lgray pt-2- d-none d-md-block" >  
		<div class="container">

			<div class="row no-gutters d-flex justify-content-end">
				<span class="">
					<a id="subir" href="#">
						<img class="lazy" src="https://royalreservations.com/img/icono-flecha-footer.png" alt="Up">
					</a>
				</span>
			</div>

			<div class="row no-gutters pt-5 pb-4" style="border-bottom: solid 1px gray;" >
				<div class="col-md-6">
					<div class="row no-gutters">
						<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer">{{ __('footer.resorts_destination.self') }}</span>
					</div>
					<div class="row no-gutters">
						<div class="col-md-6">
							<span class="text-uppercase bold av-yellow">{{ __('footer.resorts_destination.mexican_caribbean') }}</span>
							<ul>
								<li ><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/cancun/".__('routes.things_cun')) }}">{{ __('header.menu.beach_destinations.cancun') }}</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sands/the-royal-sands-resort-and-spa-all-inclusive-cancun ") }}">The Royal Sands Resort & Spa All Inclusive</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-islander/the-royal-islander-all-suites-resort-cancun ") }}">The Royal Islander All Suites Resort</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun ") }}">The Royal Caribbean All Suites Resort</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-cancun/the-royal-cancun-all-suites-resort-cancun ") }}">The Royal Cancun All Suites Resort</a></li>
							</ul>
							<ul>
								<li><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/riviera-maya/".__('routes.things_riv')) }}">Riviera Maya</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/grand-residences-riviera-cancun/".__('routes.resorts_overview_gr')) }}">Grand Residences Riviera Cancun Resort</a></li>
							</ul>
							<ul>
								<li><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/playa-del-carmen/".__('routes.things_pla')) }}">Playa del Carmen</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen")}}">The Royal Haciendas All Suites Resort & Spa</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<span class="text-uppercase bold av-yellow">{{ __('footer.resorts_destination.caribbean_island') }}</span>
							<ul>
								<li ><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/st-maarten/".__('routes.things_stm')) }}">Sint Maarten</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-beach-resort-and-marina-st-maarten")}}">The Villas at Simpson Bay Beach Resort & Marina</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/simpson-bay-resort/simpson-bay-beach-resort-and-marina-st-maarten ") }}">Simpson Bay Beach Resort & Marina</a></li>
							</ul>
							<ul>
								<li ><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/curacao/".__('routes.things_cur')) }}">Curacao</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sea-aquarium/the-royal-sea-aquarium-resort ") }}">The Royal Sea Aquarium Resort</a></li>
							</ul>
							<ul>
								<li ><a class="bold" href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/punta-cana/".__('routes.things_pun')) }}">Punta Cana</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/casa-de-campo/casa-de-campo-resort-and-villas-punta-cana ") }}">Casa de Campo Resort and Villas Punta Cana</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/ancora/ancora-punta-cana-private-residence-yacht-club") }}">Ancora Punta Cana Private Residence Yacht Club</a></li>
								<li><a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/del-mar/del-mar-ocean-front-resort-by-joy-resorts ") }}">Del Mar Ocean Front Resort by Joy Resorts</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="row no-gutters">
						<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer">{{ __('footer.type_of_trips.self') }}</span>
					</div>
					<ul>
						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_family')) }}"><img src="{{asset('img/icon-footer/family-vacations.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.family_vacations') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_romantic')) }}"><img src="{{asset('img/icon-footer/romantic.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.romantic_getaway') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.adventure')) }}"><img src="{{asset('img/icon-footer/diving-snorkel.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.adventure') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_spa')) }}"><img src="{{asset('img/icon-footer/wellness.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.wellness') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_honeymoon')) }}"><img src="{{asset('img/icon-footer/honeymoon.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.weddings_honeymoon') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_golf')) }}"><img src="{{asset('img/icon-footer/golf.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('header.menu.type_of_trips.golf') }}</a></li>

						<li><a href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_business')) }}"><img src="{{asset('img/icon-footer/bussines.png')}}" class="pr-2 size-img-footer" alt="" style="" >{{ __('footer.type_of_trips.business_meetings') }}</a></li>

					</ul>

					<!--

					<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer" style="" >{{ __('footer.media_gallery.self') }}</span>

					<ul>

						<li><a href="/{{ __('footer.media_gallery.url') }}">{{ __('footer.media_gallery.self') }}</a></li>

					</ul>

				-->

				</div>

				<div class="col-md-3">

					<div class="row no-gutters">
						<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer" style="" >{{ __('footer.follow_us') }}</span>
					</div>
					<div class="redes-sociales red-footer py-2">
							<a href="https://www.facebook.com/RoyalReservations" class="it-red it-facebook-f"> </a>
							<a href="https://twitter.com/royalRSV" class="it-red it-twitter-f"> </a>
							<a href="https://www.instagram.com/royalreservations/" class="it-red it-instagram-f"> </a>
							<a href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos" class="it-red it-youtube-f"> </a>
					</div>

					<!--

					<div class="row no-gutters">

						<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer" style="" >{{ __('footer.news.self') }}</span>

					</div>

					<ul>

						<li><a href="#">{{ __('footer.news.blog') }}</a></li>

					</ul>
				-->

					
					<div class="row no-gutters">
						<span class="text-uppercase pl-2 mb-2 bold av-skyblue av-borderleft-blue-footer" style="" >{{ __('footer.about_royal.self') }}</span>
					</div>

					<ul>
						<li><a href="{{ lang_url("/".Lang::get('routes.about_us')) }}">{{ __('footer.about_royal.who_we_are') }}</a></li>
						<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.why_book')) }}">{{ __('footer.about_royal.why_booking') }}</a></li>
						<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}">{{ __('footer.about_royal.best_deal_guaranteed') }}</a></li>
						<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}">{{ __('footer.about_royal.terms_of_use') }}</a></li>
						<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.privacy_policy')) }}">{{ __('footer.about_royal.policy_privacy') }}</a></li>
					</ul>
					

<!--					

					<button type="submit" class="btn text-uppercase contac-us-new-footer">{{ __('footer.contact_us') }}</button>
-->

					
					
					<!--<span class="pl-4">
						<a id="subir" href="#">
							<img class="lazy" src="{{asset('/img/icono-flecha-footer.png')}}" alt="">
						</a>
					</span>
					-->


				</div>
			</div>
			<div class="row no-gutters py-4">
				<div class="col-md-4">
					<img class="img-fluid pr-2" src="{{ asset('img/logo-royalreservations-min.png') }}" alt="Royal Reservations">
				</div>
				<div class="col-md-8">
					<p style="font-size: 12px; overflow: hidden;" >{{ __('footer.notice', ['year' => date('Y')]) }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="w-100 je-bg-lgray pt-1 d-block d-md-none">  
		<div class="container">
			<div class="row py-2 py-md-5">
				<div class="col-12 col-md-4 pl-3 fs-8">
					<div class="row no-gutters d-flex justify-content-end">
						<span class="" >
							<a id="subir" href="#">
								<img class="lazy" src="{{asset('/img/icono-flecha-footer.png')}}" alt="Up">
							</a>
						</span>
					</div>

					<div class="row py-2 ">

						@desktop
							<div class="col-6 col-md-12 d-flex align-items-center">
								<img src="{{ asset('/img/royal-logo-vert.png') }}" alt="Royal Reservations"  class="d-block d-md-none img-fluid py-4 logo-footer lazy">
							</div>
						@elsedesktop
							<div class="footer-movil">
								<div class="logo">
									<img src="{{ asset('/img/logo-royal.svg') }}" class="w-100"/>
								</div>
								<div class="info">
									<ul>
										<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}">{{ __('footer.best_deal_guaranted') }}</a></li>
										<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.why_book')) }}">{{ __('footer.book_now_pay_later') }}</a></li>
										<li><a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.why_book')) }}">{{ __('footer.permanent_promotions') }}</a></li>
									</ul>
								</div>
							</div>		
						@enddesktop
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="je-bg-gray text-white py-4 " >
		<div class="container copyright">
			<div class="d-none d-md-block" >
				<div class="row no-gutters d-flex justify-content-center ">
					<a  class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
				</div>
			</div>

			<div class="d-block d-md-none" >
				<div class="row ">
					<div class="col-md-4 col-4 text-right">
						<a  class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>		
					</div>
					<div class="col-md-5 col-4 text-center">
						<a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.privacy_policy')) }}" class="text-white ligera">{{ __('footer.about_royal.privacy_cookie') }}</a>
					</div>
					<div class="col-md-3 col-4 text-left">
					<a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}" class="text-white ligera">{{ __('footer.about_royal.terms_and_conditions') }}</a>	
					</div>
				</div>
			</div>


		</div>

	</div>

</footer>




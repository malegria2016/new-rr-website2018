@section('title', __('resorts/'.$resort.'.seo.title'))
@section('metadescription', __('resorts/'.$resort.'.seo.metadescription'))

<section>
	<section class="{{ $class }}">
		<div class="container pt-2 mtop-10">
			<div class="row pt-4">
				<div class="col-12 col-md-9">
					<h1 class="resort-title pt-4 pb-3 pb-md-0">{{__('resorts/'.$resort.'.title')}}</h1>
					<p class="resort-subtitle">{{__('resorts/'.$resort.'.address')}}</p>
					{!!__('resorts/'.$resort.'.description')!!}</p>
					<div class="resort-gallery-container">
						<ul class="resort-gallery">
							@php
								$rgallery = __('resorts/'.$resort.'.gallery');
								if(is_string($rgallery)) $rgallery = [];
								$total = count($rgallery);
							@endphp

							@for($contador=0;$contador<$total;$contador++)
							@php $imagen = __('resorts/'.$resort.'.gallery.'.$contador); @endphp
							<li><img src="{{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/resorts/'.$resort.'/big/'.$imagen.'.jpg':'img/resorts/'.$resort.'/big/'.$imagen.'.jpg')}}" title="{{__('resorts/'.$resort.'.title')}}" alt="{{__('resorts/'.$resort.'.title')}}" width="917" height="475" /></li>
							@endfor
						</ul>
						<ul class="resort-gallery-nav d-none d-md-block">
							@for($contador=0;$contador<$total;$contador++)
							@php $imagen = __('resorts/'.$resort.'.gallery.'.$contador); @endphp
							<li><img src="{{asset('img/resorts/'.$resort.'/small/'.$imagen.'.jpg')}}" title="{{__('resorts/'.$resort.'.title')}}" alt="{{__('resorts/'.$resort.'.title')}}" width="214" height="112" /></li>
							@endfor
						</ul>
					</div>
					<div class="d-flex justify-content-end mb-5">
						<a href="{{ lang_url("/".__('routes.beach_resorts')."/".$resort."/".$gallery) }}" class="btn btn-view-all av-fontsize-point9 av-skyblue">{{__('general.lb_view_gallery')}}</a>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="resort-awards">
						<ul>
							@php
								$rgallery = __('resorts/'.$resort.'.tripadvisor');
								if(is_string($rgallery)) $rgallery = [];
								$total = count($rgallery);
							@endphp

							@for($contador=0;$contador<$total;$contador++)
							@php $imagen = __('resorts/'.$resort.'.tripadvisor.'.$contador); @endphp
							<li><img src="{{asset('img/tripadvisor/'.$imagen.'.jpg')}}" title="{{__('resorts/'.$resort.'.title')}}" alt="{{__('resorts/'.$resort.'.title')}}"/></li>
							@endfor
						</ul>
					</div>

					@php
						$resort_amenities = __('resorts/'.$resort.'.resort_amenities');
						$total = is_string($resort_amenities) ? 0 : count($resort_amenities);
					@endphp

					<div class="resort-amenities">
						<h4>{{__('general.lb_amenities')}}</h4>																
						<ul>
							@for ($i=0;$i<$total;$i++)
							<li class="amenity-{{ __('resorts/'.$resort.'.resort_amenities.'.$i.'.icon')}}">
								<span></span>  {{ __('resorts/'.$resort.'.resort_amenities.'.$i.'.title')}}
							</li>
							@endfor
						</ul>
						<a href="{{ lang_url("/".__('routes.beach_resorts')."/".$resort."/".$amenities) }}" class="btn btn-link btn-ravm text-md-left text-right">{{ __('general.view_allFem')}}</a>
					</div>

					<div class="resort-rate-plans d-flex flex-column justify-content-md-start justify-content-end">
						<h4 class="text-md-left text-right">{{ __('general.rate_plans')}}</h4>
						<ul>
							@if( __('resorts/'.$resort.'.all-inclusiveB') == 'true')
							<li class="rate-plans-all-inclusive text-md-left text-right">{{ __('general.all_inclusive')}}</li>
							@endif
							@if( __('resorts/'.$resort.'.room-onlyB')== 'true')
							<li class="rate-plans-room-only text-md-left text-right">{{ __('general.room_only')}}</li>
							@endif
							@if( __('resorts/'.$resort.'.bed-breakfastB')== 'true')
							<li class="rate-plans-bed-breakfast text-md-left text-right">{{ __('general.bed_breakfast')}}</li>
							@endif							
						</ul>
					</div>

					<div class="resort-map">
						<iframe src="{{ __('resorts/'.$resort.'.map')}}" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
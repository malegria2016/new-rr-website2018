@php
	$title= __('resorts/'.$resort.'/deals.title');
	$contenido=  __('resorts/'.$resort.'/deals.description');
	$total_resort=count(__('specials/setup/setup.'.$resort));
@endphp

@section('title', __('resorts/'.$resort.'/deals.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/deals.seo.metadescription'))

<section id="type-of-trips-section" class="pt-2 mtop-10 subinterna type-of-trips-section">
	<div class="container type-of-t">
		<div class="row no-gutters pt-4 ">
			<div class="col d-none d-md-block"></div>
			<div class="col-12 col-md-10">
				<h1 class="text-left text-uppercase py-4 av-blue font-size-1point5-tablet font-size-1point2-movil">
					 {{ $title }}
				</h1>
				<p class=" text-justify">{!! $contenido !!}</p>
			</div>
			<div class="col d-none d-md-block"></div>
		</div>
	</div>
</section>

<section class="specials-intern">
	<div class="special-cards-section specials-intern mb-5 pb-5 owl-carousel" id="je-specials-section">
		@for($i=0;$i < $total_resort;$i++)
			@php 
				$promo = __('specials/setup/setup.'.$resort.'.'.$i);
				$url = __('specials/'.$promo.'.slug');
				$total_points= count(__('specials/'.$promo.'.main_points'));
				$destino= __('specials/'.$promo.'.destino');
			@endphp
			<div class="card filter ca">
				@if(__('specials/'.$promo.'.label_color')=='1')
					<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
				@endif
				@if(__('specials/'.$promo.'.label_color')=='2')
					<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
				@endif
				@if(__('specials/'.$promo.'.label_color')=='3')
					<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
				@endif
	            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.$destino.'/'.$url) }}">
	                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
	            </a>
				<div class="card-body">
					<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.$destino.'/'.$url) }}">
					{{ __('specials/'.$promo.'.title')}}</a>
					<ul class="card-text">
						@for($j=0;$j<$total_points;$j++)
						<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
						@endfor
					</ul>
					<a href="{{lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.$destino.'/'.$url)}}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
				</div>
			</div>
		@endfor
	</div>
</section>
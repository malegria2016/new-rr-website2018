@php 
	$mb = isset($mb) ? $mb : 4;
	$total_offers=count(__('specials/setup/setup.'.$resort));
	if($total_offers=='1'){
		$a=	__('specials/setup/setup.the-villas-at-simpson-bay-resort.0');
		$specials = [
			__('specials/'.$a),
		];
	}
	if($total_offers=='2'){
		$a=	__('specials/setup/setup.the-villas-at-simpson-bay-resort.0');
		$b=	__('specials/setup/setup.the-villas-at-simpson-bay-resort.1');
		$specials = [
			__('specials/'.$a),
			__('specials/'.$b),
		];
	}
	if($total_offers=='3'){
		$a=	__('specials/setup/setup.'.$resort.'.0');
		$b=	__('specials/setup/setup.'.$resort.'.1');
		$c=	__('specials/setup/setup.'.$resort.'.2');
		$specials = [
			__('specials/'.$a),
			__('specials/'.$b),
			__('specials/'.$c),
		];					
	}
	if($total_offers=='4'){
		$a=	__('specials/setup/setup.'.$resort.'.0');
		$b=	__('specials/setup/setup.'.$resort.'.1');
		$c=	__('specials/setup/setup.'.$resort.'.2');
		$d=	__('specials/setup/setup.'.$resort.'.3');
		$specials = [
			__('specials/'.$a),
			__('specials/'.$b),
			__('specials/'.$c),
			__('specials/'.$d),
		];										
	}
@endphp

<section class="w-100 mb-{{$mb}} je-bg-blue je-border-yellow special-resort" id="je-specials-section">
	<div class="container">
		<div class="row my-5">
			<div class="col-12 text-center mt-5">
				<h3 class="tituloresort bold text-white uppercase">{{ __('resorts/'.$resort.'.resort_offers_title')}}</h3>
			</div>
		</div>

		<div class="row text-white">
			<div class="owl-carousel owl-theme resortpromotion{{$total_offers<=3?$total_offers:''}}">
				@for($i=0;$i<$total_offers;$i++)
					@php $file=__('specials/setup/setup.'.$resort.'.'.$i); @endphp	
					@php $total_points=count( __('specials/'.$file.'.main_points')); @endphp
					<div class="item"> 
						<div class="card">
							@if(__('specials/'.$file.'.label_color')=='1')
								<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$file.'.label_percent_off') }}</b></span></span>
							@endif
							@if(__('specials/'.$file.'.label_color')=='2')
								<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$file.'.label_percent_off') }}</b></span></span>
							@endif
							@if(__('specials/'.$file.'.label_color')=='3')
								<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
							@endif

							<img class="card-img-top" src="{{ __('specials/'.$file.'.thumbnail') }}" title="{{ __('specials/'.$file.'.title') }}" alt="{{ __('specials/'.$file.'.title') }}">
							<div class="card-block je-bg-cream">
								<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}">{{ __('specials/'.$file.'.title') }}</a>
								<ul class="card-text">
									@for($j=0;$j<$total_points;$j++)
										<li>{{__('specials/'.$file.'.main_points.'.$j)}}</li>
									@endfor
								</ul>
								<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}" class="je-btn-book-now"><b>{{ __('general.view_more') }}</b></a>
							</div>
						</div>    
					</div>
				@endfor
			</div> <!-- fin class="owl-carousel owl-theme resortpromotion-->

			<div class="fs-view py-3">
				<a class="text-white btn-view-more ligera" href="{{ __('resorts/'.$resort.'.resort_offers_url')}}">{{ __('general.view_all') }}</a>
			</div>
		</div><!-- row text-white -->		
	</div><!--container -->
</section>

<div class="view-more-special-movil mb-3 fs-view">
	<br/>
	<a class="av-subrayado-yellow medium" href="{{ lang_url("/".__('routes.deals')) }}">{{ __('general.view_all') }}</a>
</div>



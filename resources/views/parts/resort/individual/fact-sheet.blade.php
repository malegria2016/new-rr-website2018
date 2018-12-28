@php
	$total_amenities = count( __('resorts/'.$resort.'/fact-sheet.amenities') );
	$total_policies = count( __('resorts/'.$resort.'/fact-sheet.resort_policies') );
	$total_things = count( __('resorts/'.$resort.'/fact-sheet.things') );
	$total_rates = count( __('resorts/'.$resort.'/fact-sheet.rates') );
	$total_terms = count( __('resorts/'.$resort.'/fact-sheet.terms') );
@endphp

<section class="fact-sheet-section fact-container resort-container">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<h3 class="resort-title mb-2"> {{__('resorts/'.$resort.'/fact-sheet.title')}}</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-7 pb-4">
				<h4 class="fact-title">{{__('resorts/'.$resort.'/fact-sheet.amenities_title')}}</h4>
				<ul class="resorts-amenities">
					@for($i=0;$i<$total_amenities;$i++)
					<li class="amenity-{{ __('resorts/'.$resort.'/fact-sheet.amenities.'.$i.'.icon') }}">{{ __('resorts/'.$resort.'/fact-sheet.amenities.'.$i.'.title') }}</li>
					@endfor
				</ul>
			</div>

			<div class="col-12 col-md-5 px-0 px-md-auto">
				<h4 class="fact-title pl-md-4 pl-3">{{__('resorts/'.$resort.'/fact-sheet.policies_title')}}</h4>
				<ul class="resorts-policies">
					@for($i=0;$i<$total_policies;$i++)
					<li>{{ __('resorts/'.$resort.'/fact-sheet.resort_policies.'.$i) }}</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="rate-plans-section rate-plans-container resort-container">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">{{__('resorts/'.$resort.'/fact-sheet.rate_title')}}</div>
					<div class="card-body">
						<div class="row no-gutters">
							@for($i=0;$i<$total_rates;$i++)
								@if($total_rates==1)
									<div class="rate-plan col-12 col-lg-12 col-md-4">
									<h5><a>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.title') }}</a></h5>
									<p>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.description') }}</p>
									</div>
								@endif
								@if($total_rates==2)
									<div class="rate-plan col-12 col-lg-6 col-md-4">
									<h5><a>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.title') }}</a></h5>
									<p>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.description') }}</p>
									</div>
								@endif
								@if($total_rates==3)
								<div class="rate-plan col-12 col-md-4">
								<h5><a>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.title') }}</a></h5>
								<p>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.description') }}</p>
								</div>
								@endif
							@endfor
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="things-to-do-section things-to-do-container resort-container">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<h3 class="resort-title text-center text-uppercase font-weight-light mb-2">{{__('resorts/'.$resort.'/fact-sheet.near_title')}}</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 pr-0">
				<ul class="things-to-do">
					@for($i=0;$i<$total_things;$i++)
						
						<li class="todo-{{ str_slug( __('resorts/'.$resort.'/fact-sheet.things.'.$i.'.title') ) }}">
						<img src="{{asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/resorts/'.$resort.'/near-by-things-to-do/'.__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.src') :'img/resorts/'.$resort.'/near-by-things-to-do/'.__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.src' ))}}" title="{{__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.alt')}}"
						 alt="{{__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.image.alt')}}" width="210" height="210" /> {{__('resorts/'.$resort.'/fact-sheet.things.'.$i.'.title')}}
						</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>
</section>



<section class="terms-section rate-plans-container resort-container">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="card">

					<div class="card-header">{{__('resorts/'.$resort.'/fact-sheet.terms_title')}}</div>

					<div class="card-body">

						<ul class="terms-and-conditions">

							@for($i=0;$i<$total_terms;$i++)

								<li>- {{ __('resorts/'.$resort.'/fact-sheet.terms.'.$i) }}</li>

							@endfor

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>
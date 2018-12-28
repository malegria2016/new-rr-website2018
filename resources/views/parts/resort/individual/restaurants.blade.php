@php
	$total_restaurants= count( __('resorts/'.$resort.'/restaurants.restaurants') );
	if($total_restaurants>4){ $total_restaurants=4; }
	$long=0;
@endphp

<section class="restaurants-section resort-container">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="resort-title mb-2">{{__('resorts/'.$resort.'/restaurants.title')}}</h3>
				<p>{{__('resorts/'.$resort.'/restaurants.content')}}</p>
			</div>
			<div class="col-12 restaurants-container mt-3">
				<div class="row no-gutters">
					<ul class="restaurants-nav">
						@for($i=0;$i<$total_restaurants;$i++)

						@php 
						$long= __('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.long'); 
						@endphp 
						<li class="resturant-link">
							{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.name')}}
							@if($long=='2') <br><br> @endif
						</li>

						@endfor
					</ul>
					<div class="restaurants-tabs">
						@for($i=0;$i<$total_restaurants;$i++)
						@php
						if(Agent::isMobile() && !Agent::isTablet()){
						$img= asset('img/mobile/resorts/'.$resort.'/dining/'.__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.image'));
						}else{
						$img= asset('img/resorts/'.$resort.'/dining/'.__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.image'));
						}
						@endphp
						<div class="toDo-destination">
							<div class="row no-gutters" style="">
								<div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{$img}});">
								</div>
								<div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="">
									<div class="av-white py-md-3 pt-3 pb-0 px-0 px-md-5">
										<h4 class="">{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.name')}}</h4>
										<p class="text-justify">{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.excerpt')}}</p>
										<p class="restaurant-open mb-0 mb-md-auto">{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.open')}}</p>
									</div>
								</div>
							</div>
						</div>
						@endfor
					</div>
					<div class="d-flex justify-content-end w-100">
						<a href="{{ __('resorts/'.$resort.'/restaurants.all_restaurants') }}" class="btn btn-view-all">{{__('general.view_all')}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
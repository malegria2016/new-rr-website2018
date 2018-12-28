@php
	$total_ca=	count(__('specials/setup/setup.cancun'));
	$total_rm=	count(__('specials/setup/setup.riviera-maya'));
	$total_pdc=	count(__('specials/setup/setup.playa-del-carmen'));
	$total_pm=	count(__('specials/setup/setup.puerto-morelos'));
	$total_sm=	count(__('specials/setup/setup.st-maarten'));
	$total_co=	count(__('specials/setup/setup.curacao'));
	$total_pc=	count(__('specials/setup/setup.punta-cana'));
@endphp





<section class="specials-intern">
	<div class="special-cards-section specials-intern mb-5 pb-5 owl-carousel" id="je-specials-section">
		@for($i=0;$i < 6;$i++)
			@if($total_ca>0 && $i < $total_ca)
			  @php 
				$promo = __('specials/setup/setup.cancun.'.$i);
				$url = __('specials/'.$promo.'.slug');
				$total_points = count(__('specials/'.$promo.'.main_points'));
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
	            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/cancun/'.$url) }}">
	                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
	            </a>
				<div class="card-body">
					<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/cancun/'.$url)  }}">
					{{ __('specials/'.$promo.'.title')}}</a>
					<ul class="card-text">
						@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
						@for($j=0;$j<$total_points;$j++)
						<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
						@endfor
					</ul>
					<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/cancun/'.$url)  }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
				</div>
			</div>
			@endif

			@if($total_rm >0 && $i < $total_rm)
				@php 
					$promo = __('specials/setup/setup.riviera-maya.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp

				<div class="card filter rm">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/riviera-maya/'.$url)  }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/riviera-maya/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/riviera-maya/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
			@endif

				

			@if($total_pdc >0 && $i < $total_pdc)
				@php 
					$promo = __('specials/setup/setup.playa-del-carmen.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp
				<div class="card filter pdc">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/playa-del-carmen/'.$url) }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/playa-del-carmen/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/playa-del-carmen/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
			@endif
						
			@if($total_pm >0 && $i < $total_pm)
				@php 
					$promo = __('specials/setup/setup.puerto-morelos.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp
				<div class="card filter pm">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/puerto-morelos/'.$url) }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/puerto-morelos/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/puerto-morelos/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
			@endif

		
			@if($total_sm >0 && $i < $total_sm)
				@php 
					$promo = __('specials/setup/setup.st-maarten.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp
				<div class="card filter sm">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/st-maarten/'.$url) }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/st-maarten/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/st-maarten/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
			@endif

			@if($total_co >0 && $i < $total_co)
				@php 
					$promo = __('specials/setup/setup.curacao.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp
				<div class="card filter co">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/curacao/'.$url) }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/curacao/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/curacao/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
			@endif
		
			@if($total_pc >0 && $i < $total_pc)
				@php 
					$promo = __('specials/setup/setup.punta-cana.'.$i);
					$url = __('specials/'.$promo.'.slug');
					$total_points = count(__('specials/'.$promo.'.main_points'));
				@endphp
				<div class="card filter pc">
					@if(__('specials/'.$promo.'.label_color')=='1')
						<span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='2')
						<span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$promo.'.label_percent_off')}}</b></span></span>
					@endif
					@if(__('specials/'.$promo.'.label_color')=='3')
						<span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
					@endif
		            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/punta-cana/'.$url) }}">
		                <img class="card-img-top" src="{{ __('specials/'.$promo.'.thumbnail')}}" alt="{{ __('specials/'.$promo.'.title')}}">
		            </a>
					<div class="card-body">
						<a class="card-title bold" href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/punta-cana/'.$url) }}">
						{{ __('specials/'.$promo.'.title')}}</a>
						<ul class="card-text">
							@if(__('specials/'.$promo.'.label_resort') !=''){!! __('specials/'.$promo.'.label_resort')!!} @endif
							@for($j=0;$j<$total_points;$j++)
							<li>{{ __('specials/'.$promo.'.main_points.'.$j)}}</li>
							@endfor
						</ul>
						<a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/punta-cana/'.$url) }}" class="je-btn-book-now"><b>{{ __('general.view_more')}}</b></a>
					</div>
				</div>
				@endif
			@endfor	
	</div>

</section>
@php
$total_reviews = count( __('reviews.reviews') );
$style = isset($style) ? $style : 'boxed';
@endphp

<section class="{{$style === 'full' ? 'container-fluid' : 'container'}} reviews-style-{{$style}}" id="reviews-section">
	<div class="row d-none d-md-block">
		@if($style==='full')
			<div class="container">
				<div class="row">
		@endif
		<div class="col-12">
			<h3{{ $style==='boxed' ? ' class="je-text-blue"' : '' }}>{{__('reviews.title')}}</h3>
			<div class="je-reviews-box py-1 my-4">
				<div class="owl-carousel owl-theme reviews revhome">
				@for($i=0;$i<$total_reviews;$i++)
					<div class="item">
							<div class="row">
								<div class="col-4 je-user-data">
									<img src="{{__('reviews.reviews.'.$i.'.person.profile')}}" alt="{{__('reviews.reviews.'.$i.'.person.name')}}">
									<p class="title-review">{{__('reviews.reviews.'.$i.'.person.name')}}</p>
									<span class="text-white">{{__('reviews.reviews.'.$i.'.date')}}</span>
								</div>
								<div class="col-8 je-user-coment">
									@if($style!=='full')
										<p class="text-muted">
											<span class="text-white">"</span>
											{{__('reviews.reviews.'.$i.'.content')}}
											<span class="text-white">"</span>
										</p>
									@else
										<h4>{{__('reviews.reviews.'.$i.'.title')}}</h4>
										<p>{{__('reviews.reviews.'.$i.'.content')}}</p>
									@endif
								</div>
							</div>
					</div>
				@endfor
				</div>
			</div>
		</div>
		@if($style==='full')
				</div>
				<a href="/reviews" class="reviews-view-more">{{ __('general.view_more') }}</a>
			</div>
		@endif
	</div>
	@if($style!=='full')
		<div class="fs-view w-100 py-1 text-right">
			<!--<a href="#" class="av-subrayado-yellow medium" >{{ __('general.view_more') }}</a> -->
		</div>
	@endif
</section>		

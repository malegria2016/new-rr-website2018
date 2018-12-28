@section('title', __('type-of-trips/'.$trip.'.seo.title'))
@section('metadescription', __('type-of-trips/'.$trip.'.seo.metadescription'))

<div id="type-of-trips-intern" class="pt-2 pb-4">
	<div class="row no-gutters pt-4">
		<div class="col d-none d-md-block"></div>
		<div class="col-12 col-md-10 px-0">
			<h1 class="py-4">{{__('type-of-trips/'.$trip.'.title')}}</h1>
			<h2>{{__('type-of-trips/'.$trip.'.subtitle')}}</h2>
			@if(Agent::isMobile() && !Agent::isTablet())
			{!!__('type-of-trips/'.$trip.'.content_mobile')!!}
			@else
			{!!__('type-of-trips/'.$trip.'.content')!!}
			@endif
		</div>
		<div class="col d-none d-md-block"></div>
	</div>
</div>
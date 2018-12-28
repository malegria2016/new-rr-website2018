@section('title', __('destinations/'.$destino.'.seo.title'))
@section('metadescription', __('destinations/'.$destino.'.seo.metadescription'))

@if(Agent::isMobile() && !Agent::isTablet())
<div class="movil-video">
	<!--<img src="{{ __('destinations/'.$destino.'.video.provider') }}" alt="{{ $destino }}" width="100%" height="100%">-->
</div>
@else
<div class="desk-video">
	<img src="{{__('destinations/'.$destino.'.main_photo')}}" alt="{{ $destino }}" width="100%" height="100%">
</div>
@endif



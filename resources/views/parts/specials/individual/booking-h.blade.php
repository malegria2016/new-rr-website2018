
@php $title = __('special-offer/'.$slug.'.title') 
@endphp

@section('title', __('special-offer/'.$slug.'.title_seo'))
@section('metadescription', __('special-offer/'.$slug.'.metadescription'))

<section>
    <img src="{{ asset((Agent::isMobile() && !Agent::isTablet()) ? 'img/mobile/deals/'.$slug.'.jpg' : 'img/deals/big/'.$slug.'.jpg')}}" alt="{{__('special-offer/'.$slug.'.alt_banner')}}" title="{{__('special-offer/'.$slug.'.alt_banner')}}" class="img-fluid">
</section>
    
@php
	$lang=App::getLocale();
@endphp
<section>
    <img src="{{ asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/deals/deals-hotel-'.$lang.'.jpg':'img/deals/big/deals-hotel-'.$lang.'.jpg')}}" width="100%" height="100%">
</section>

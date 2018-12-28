@extends('/interna')
@section('interna')
    @if($page=="resorts-intern" || $page == "resorts-atrib-allinclusive" || $page == "resorts-atrib")
        @component('parts/extras/booking-resort', ['resort'=>$resort]) @endcomponent
    @endif
    @if($page=="destinations-intern")
        @component('parts/extras/booking-destination', ['destino'=>$destino]) @endcomponent
    @endif
    
    @if( ($page=="destinos-de-playa" || $page=="beach-destinations" ) && $page != 'undefined')
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('/parts/destination/general-destination') @endcomponent   
    @elseif($page=="destinations-offers")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino,'subinterna'=>$subinterna])@endcomponent
        @component('/parts/destination/offer-destination',['destino'=>$destino])
        @endcomponent
    @elseif($page=="destinations-resorts")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino,'subinterna'=>$subinterna])@endcomponent
        @component('/parts/destination/resort-destination',['destino'=>$destino]) @endcomponent        
    @elseif($page=="destinations-intern")
        <section>
            @component('/parts/destination/individual/foto-destination', ['destino'=>$destino])@endcomponent
        </section>
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino, 'subinterna'=>$subinterna])@endcomponent
        @component('/parts/destination/individual/content-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/map-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/thingsToDo-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/food-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/resort-destination', ['destino'=>$destino]) @endcomponent
    @elseif($page=="beach-resorts" || $page=="hoteles-de-playa")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('parts/resort/general-resorts') @endcomponent
    @elseif($page=="resorts-intern")
        @component('parts/resort/individual/links',['resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$resort,'subinterna'=>$interna])@endcomponent
        @component('parts/resort/individual/all-inclusive-details', ['class' =>'resort-container','resort'=>$resort,'interna'=>$interna,'gallery'=>$gallery,'amenities'=>$amenities]) @endcomponent
        @component('parts/resort/individual/rooms-and-suites', ['class' => 'resort-container','resort'=>$resort,'interna'=>$interna]) @endcomponent
        @component('parts/resort/individual/resort-promotions', ['mb' => 0, 'resort'=>$resort]) @endcomponent
        @component('parts/resort/individual/restaurants', ['resort'=>$resort,'interna'=>$interna])@endcomponent
        @component('parts/resort/individual/fact-sheet', ['resort'=>$resort])@endcomponent
        @component('parts/resort/schema', ['resort'=>$resort])@endcomponent

    @elseif($page=="resorts-atrib-allinclusive")
        @if($atribs == 'rate-plans')
            @component('parts/resort/individual/links',['resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
            @component('parts/resort/individual/rateplans/banner-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
            @component('parts/resort/individual/rateplans/content-subInterna-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
            @component('parts/resort/individual/rateplans/list-subInterna-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
        @endif
	@elseif($page == "resorts-atrib")
		@component('parts/resort/individual/links', ['resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
        @component('parts/extras/breadcrum-level-4', ['page'=>'beach-resorts','resort'=>$resort,'interna'=>$interna,'subinterna'=>$atribs,'rhome'=>$rhome]) @endcomponent 
		@if($atribs=="restaurantes")
			@component('parts/resort/individual/restaurantes/content', ['resort'=>$resort]) @endcomponent	
			@component('parts/resort/individual/restaurantes/grid', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "actividades")
			@component('parts/resort/individual/actividades/content', ['resort'=>$resort]) @endcomponent	
			@component('parts/resort/individual/actividades/grid', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "habitaciones")
            @component('parts/resort/individual/rooms/content-rooms', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/rooms/carousel-rooms', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == 'galeria')
            @component('parts/resort/individual/galeria/content-galeria', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/galeria/tabs-galeria', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/galeria/images-galeria', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "reviews")
            @component('parts/resort/individual/reviews/title-reviews', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/reviews/item-reviews', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "specials")
            @component('parts/resort/individual/offers/resort-offers', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "policies")
            @component('parts/resort/individual/policies/content', ['resort'=>$resort]) @endcomponent
        @endif

    @elseif($page=="vacation-experiences" || $page=="experiencias-de-viaje")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('/parts/type-of-trips/section-types-of-trips') @endcomponent
        @component('/parts/type-of-trips/carousel-types-of-trips') @endcomponent
    @elseif($page=="vacation-experiences-intern")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-3b', ['page'=>'vacation-experiences','subinterna'=>$trip])@endcomponent
		<section class="container subinterna">
            @component('parts/type-of-trips/golf/info', ['trip'=>$trip]) @endcomponent
            @component('parts/type-of-trips/golf/tabs', ['trip'=>$trip]) @endcomponent
            @component('parts/type-of-trips/golf/grid') @endcomponent
		</section>
    @elseif($page=="deals" || $page=="ofertas")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/specials/bannermain') @endcomponent
        @component('parts/extras/breadcrum-level-2-ext', ['page'=>$page])@endcomponent
        @component('parts/specials/general-specials')@endcomponent
        @component('parts/specials/carrusel-specials')@endcomponent
        @component('parts/specials/oferta-general-specials')@endcomponent
    @elseif($page=="sub-inter-special")
        @component('parts/specials/individual/booking-h', ['slug'=>$slug]) @endcomponent
        @component('parts/extras/new-booking-deals-one-line', ['slug'=>$slug]) @endcomponent
        @component('parts/extras/breadcrum', ['slug'=>$slug])@endcomponent
        @component('parts/specials/individual/offer-template/info', ['slug'=>$slug])@endcomponent
        @component('parts/specials/individual/offer-template/rates', ['slug'=>$slug,'filtro'=>$filtro])@endcomponent
        @component('parts/specials/individual/subIntern/payment')@endcomponent
    @elseif($page=="tour-packages")
        @component('parts/extras/booking-h') @endcomponent
        @component('/parts/tour-packages/general-tour-packages')@endcomponent
        @component('/parts/tour-packages/grid')@endcomponent
	@elseif($page=="tour-packages-intern")
        @component('parts/extras/booking-h') @endcomponent
		@component('parts/tour-packages/individual/banner')@endcomponent   
		@component('parts/tour-packages/individual/content')@endcomponent   
		@component('parts/tour-packages/individual/images-individual-tour-packages')@endcomponent   
		@component('parts/tour-packages/individual/package-details')@endcomponent
		@component('parts/tour-packages/individual/more-tours')@endcomponent
    @elseif($page=="about-us" || $page=="acerca-de-nosotros")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/about-us/links',['page'=>$page]) @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('parts/about-us/content-about-us')@endcomponent
    @elseif($page=="aboutus-intern" && $isvalid==1)
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/about-us/links',['page'=>$page]) @endcomponent
        @component('parts/extras/breadcrum-level-3b', ['page'=>'about-us','subinterna'=>$area])@endcomponent
        @component('parts/about-us/individual/content', ['area'=>$area])@endcomponent
    @elseif($page=="beach-resorts-webcams" || $page=="webcams-de-hoteles-de-playa")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('parts/webcams/general-webcams') @endcomponent
        @component('parts/webcams/images-webcams') @endcomponent
    @elseif($page=="gallery")
        @component('parts/extras/booking-h') @endcomponent
        @component('/parts/gallery/general') @endcomponent
    @elseif($page == "error404")
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/error/error404') @endcomponent
    @else
        @component('parts/extras/booking-h') @endcomponent
        @component('parts/error/error404') @endcomponent
    @endif
@endsection


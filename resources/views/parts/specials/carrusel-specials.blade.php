@php
    $deals=count(__('special-offer/setup/main.deals'));
@endphp
<section class="row centrado carruselofertas">
  <div class="m001land">
    <h2 class="tituloh2 titulocentrado mtop-10">{{ __('specials.subtitle2') }}</h2>
    <div class="owl-carousel owl-theme owlOfertas">

        @for($i=0;$i<$deals;$i++)
        @php
            $slug=__('special-offer/setup/main.deals.'.$i.'.slug');
        @endphp
        <div class="item">
            <div class="card">
                <div>
                    <a href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}"><img class="img-fluid" src="{{ asset('img/deals/'.$slug.'.jpg')}}" alt="{{ __('special-offer/setup/main.deals.'.$i.'.name') }}" title="{{ __('special-offer/setup/main.deals.'.$i.'.name') }}"></a>
                </div>
                <div>
                    <a href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}"><h2 class="titoferta">{{ __('special-offer/setup/main.deals.'.$i.'.name') }}</h2></a>
                </div>
                <div style="display: flex; height: 50px;">
                <img class="icon" style="float: left;" src="{{asset('/img/icon-galeria/icon-offer.png')}}" alt="">
                <h3 class="subtitoferta" style="float: right;">{{__('special-offer/setup/main.deals.'.$i.'.discount')}}</h3>
                </div>
                <p class="txtland padding-left-15">{{__('special-offer/setup/main.deals.'.$i.'.description')}}</p>
                <a class="more" href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}">{{ __('general.view_more')}}</a>
            </div>
        </div>
        @endfor
    </div>
  </div>
</section>

<!-- -->


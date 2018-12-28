<section class="container py-4">
  <div class="row no-gutters">
    <div class="col-12 text-center">
      <h2 class="pb-5 av-blue medium text-uppercase">{{ __('general.lb_things_to_do_titulo') }}</h2>
    </div>

    <div class="carousel-destination row w-100 m-0">
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element">
        <img src="{{ asset('img/icon-diving-snorkel.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.0.title') }}</span>
      </div>
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element" style="">
        <img src="{{ asset('/img/icon-chichenitza.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.1.title') }}</span>
      </div>
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element" style="">
        <img src="{{ asset('/img/icon-city.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.2.title') }}</span>
      </div>
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element" style="">
        <img src="{{ asset('/img/icon-waves.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.3.title') }}</span>
      </div>
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element" style="">
        <img src="{{ asset('/img/icon-tickets.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.4.title') }}</span>
      </div>
      <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center destination-element" style="">
        <img src="{{ asset('/img/icon-nightlife.png')}}" alt="">
        <span style="">{{ __('destinations/'.$destino.'.things_to_do.5.title') }}</span>
      </div>
    </div>

    <div class="w-100 m-0" id="destination-bar"></div>
    @php
      $img_temp_0=__('destinations/'.$destino.'.things_to_do.0.image');
      $img_temp_1=__('destinations/'.$destino.'.things_to_do.1.image');
      $img_temp_2=__('destinations/'.$destino.'.things_to_do.2.image');
      $img_temp_3=__('destinations/'.$destino.'.things_to_do.3.image');
      $img_temp_4=__('destinations/'.$destino.'.things_to_do.4.image');
      $img_temp_5=__('destinations/'.$destino.'.things_to_do.5.image');

      if(Agent::isMobile() && !Agent::isTablet()){
        $img0=asset('img/mobile/'.$destino.'/'.$img_temp_0);
        $img1=asset('img/mobile/'.$destino.'/'.$img_temp_1);
        $img2=asset('img/mobile/'.$destino.'/'.$img_temp_2);
        $img3=asset('img/mobile/'.$destino.'/'.$img_temp_3);
        $img4=asset('img/mobile/'.$destino.'/'.$img_temp_4);
        $img5=asset('img/mobile/'.$destino.'/'.$img_temp_5);
      }else{
        $img0=asset('img/'.$destino.'/'.$img_temp_0);
        $img1=asset('img/'.$destino.'/'.$img_temp_1);
        $img2=asset('img/'.$destino.'/'.$img_temp_2);
        $img3=asset('img/'.$destino.'/'.$img_temp_3);
        $img4=asset('img/'.$destino.'/'.$img_temp_4);
        $img5=asset('img/'.$destino.'/'.$img_temp_5);
      }
    @endphp
    <div class="row w-100 m-0 content-carousel-destination">
      <div class="toDo-destination">
        <div class="row no-gutters">
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img0 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.0.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.0.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="toDo-destination">
        <div class="row no-gutters">
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img1 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.1.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.1.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="toDo-destination">
        <div class="row no-gutters" style="" >
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img2 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.2.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.2.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="toDo-destination">
        <div class="row no-gutters" style="" >
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img3 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.3.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.3.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="toDo-destination">
        <div class="row no-gutters" style="" >
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img4 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.4.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.4.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="toDo-destination">
        <div class="row no-gutters" style="" >
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img5 }});">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center opacity-right" style="" >
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{ __('destinations/'.$destino.'.things_to_do.5.title') }}</h4>
              <p class="text-justify">{!! __('destinations/'.$destino.'.things_to_do.5.descriptions') !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container py-4">
  <div class="row no-gutters">
    <div class="col-12 text-center">
      <h2 class="av-blue medium text-uppercase pb-4">{{ __('general.lb_food') }}</h2>
    </div>
  </div>
  <div class="toDo-destination food">
    <div class="row no-gutters" style="" >
      <div class="w-40 d-flex justify-content-center align-items-center opacity-left" style="" >
        <div class="av-white py-3 px-0 px-md-5">
          <h4 class="">{{ __('destinations/'.$destino.'.food.title') }}</h4>
          <p class="text-justify">{!! __('destinations/'.$destino.'.food.description') !!}</p>
        </div>
      </div>

    @php
      $img_temp_0 = __('destinations/'.$destino.'.food.image');
      if(Agent::isMobile() && !Agent::isTablet()){ $img0=asset('img/mobile/'.$destino.'/'.$img_temp_0);}
      else{ $img0=asset('img/'.$destino.'/'.$img_temp_0);}
    @endphp

      <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url({{ $img0 }});">
      </div>
    </div>
  </div>
</section>
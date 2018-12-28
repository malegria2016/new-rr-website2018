@php
$total_trips = count( __('type-of-trips.trips') ); 
@endphp
<section class="container pt-2 py-2">
  <div class="row no-gutters">
    <div class="carousel-type-of-trips row w-100 m-0">
      @for($i=0;$i<$total_trips;$i++)
      @php 
      	$color = __('type-of-trips.trips.'.$i.'.color'); 
      	$icon = __('type-of-trips.trips.'.$i.'.icon'); 
      @endphp
      <div class="d-flex align-items-center justify-content-center flex-column text-center trips-element av-{{$color}}-trips" >
        <img  src="{{ $icon }}"  width="35" alt="{{ __('type-of-trips.trips.$i.title')}}">
        <span >{{ __('type-of-trips.trips.'.$i.'.tab_name')}}</span>
      </div>
      @endfor
    </div>
  </div>

  <div class="w-100 m-0" id="trips-bar"></div>

  <div class="row w-100 no-gutters m-0 content-carousel-trips px-0 px-md-0">
      @for($i=0;$i<$total_trips;$i++)
      @php 
      	$img1 = (Agent::isMobile() && !Agent::isTablet()) ? 'img/mobile/experiences/'.__('type-of-trips.trips.'.$i.'.img') : 'img/experiences/'.__('type-of-trips.trips.'.$i.'.img'); 
      	$img = asset($img1);
      @endphp
      <div class="toDo-destination">
        <div class="row no-gutters">
          <div class="w-60 toDo-destination-image d-flex justify-content-end" style="background-image: url('{{ $img }}');">
          </div>
          <div class="w-40 d-flex justify-content-center align-items-center blue-right">
            <div class="av-white py-3 px-0 px-md-5">
              <h4 class="">{{__('type-of-trips.trips.'.$i.'.title')}}</h4>
              <p class="text-justify" style="">{{__('type-of-trips.trips.'.$i.'.description')}}</p>
              <div class="boton-amarillo">
                <a href="{{url(__('type-of-trips.trips.'.$i.'.link'))}}" class="text-uppercase text-white">{{__('general.view_more')}}</a>
              </div> 
            </div>
          </div>
        </div>
      </div>
      @endfor
  </div>
</section>
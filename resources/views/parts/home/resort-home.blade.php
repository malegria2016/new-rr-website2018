@php
  $template = [1, 2, 2, 3, 1]; // {1} - Cuadro grande {2} - Cuadro chico {3} - Cuadro mediano
  $resorts = [
    __('resorts/the-royal-sands'),
    __('resorts/the-royal-caribbean'),
    __('resorts/casa-de-campo'),
    __('resorts/the-royal-haciendas'),
    __('resorts/grand-residences-riviera-cancun')
  ];
@endphp

<section class="container resort-movil">
  <div class="row py-3">
    <div class="col-12 p-0">
      <div class="text-center my-5">
        <h2 class="section-title txt-blue txt-light">{{ __('general.lb_beach_resorts') }}</h2>
      </div>
      <div id="resort" class="grid container px-1 px-sm-3 px-md-0 align-items-center flex-column">
        @foreach($resorts as $resort) 
          @if ($loop->index > 5) 
            @break 
          @endif 
          @php $line2 = ""; $all_inclusive = array_get($resort,
          "all-inclusive", false); $room_only = array_get($resort, "room-only", false); $bed = array_get($resort, "bed-breakfast", false); if($all_inclusive) $line2 .= __("general.all_inclusive");
          if($bed) $line2 .= " ".__("general.bed_breakfast"); 

          if(Agent::isMobile() && !Agent::isTablet()){
            $img2='img/mobile/resorts/home/'.array_get($resort, 'thumbnails.196x230').'.jpg';
            $img=asset($img2);
            $opacity='';
          }else{
            $img=array_get($resort, 'thumbnails.741x290');
            $opacity='opacity';
          }
          
          @endphp 
          @switch($template[$loop->index]) 
          @case(1)

        <!-- Cuadro Grande -->

        <div class="grid-item grid-item-width2 grid-item-height4">

          <div class="img-resort movil-size-resort lazy" id="resort-big" style="background-image:url('{{ $img }}')">
            <a href="{{ array_get($resort, 'slug') }}">
              <div class="h-100 w-100 {{$opacity}}"></div>
            </a>
          </div>

          <div class="row no-gutters franja-color w-100">
            <div class="col color-bar">
              <div class="px-md-2 px-3 py-2 text-white h-100">
                <h5 class="bold"><a class="av-white no-decoration hover-blue" href="{{ array_get($resort, "slug") }}">{{ array_get($resort, "title") }}</a></h5>

                <div class="txt-light d-none d-md-block av-paddingtop-12">{{ $line2 }}</div>
                <div class="txt-light av-line-height-12 av-paddingtop-12">{{ array_get($resort, "destination") }}</div>
                <div class="txt-light d-block d-md-none font-size-point8-movil">{{ $line2 }}</div>
              </div>

            </div>

            <div class="mx-3 mx-md-0 estrellas">
              @for($i=1; $i<=array_get($resort, "starts", 5); $i++) <input id="radio{{$i}}" type="radio" name="estrellas"
                value="{{ $i }}">
                <label for="radio{{$i}}">★</label> @endfor
            </div>

            <div class="money-section d-flex d-md-block justify-content-center justify-content-md-start ">
              <div class="yellow-square">
                <div class="px-md-2 px-0 py-md-1">
                  <div class="text-uppercase">
                    {{ __('general.starting_at') }}
                  </div>

                  <div class="h-100 d-flex justify-content-center">
                    <span><strong>{{ array_get($resort, "price.symbol", "$").array_get($resort, "price.amount", "undefined") }}</strong></span>
                  </div>

        				  <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
        					    <input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}">     
                      <input type="hidden" name="adults" id="adults" value="2">
                      @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif
                      <input type="hidden" name="_ga" id="_ga" value="">
                      <div class="text-uppercase d-none d-md-block">
                      <button type="submit" class="btn btn-primary text-uppercase av-btn-rates-home">{{ __('general.view_rates') }}</button>
                      </div>
                  </form>

                  <div class="text-uppercase d-block d-md-none per-night">
                    {{ __('general.per_night') }}
                  </div>
                </div>
              </div>

              <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
              	<input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}">
                <input type="hidden" name="adults" id="adults" value="2">
                @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif   
              	<input type="hidden" name="_ga" id="_ga" value=""> 
              <div class="text-center d-block d-md-none p-0 button-resort">
                <button type="submit" class="btn btn-primary text-uppercase mt-2 av-btn-rates">{{ __('general.view_rates') }}</button>
              </div>
              </form>

            </div>
          </div>
        </div>

        @break @case(2)

        <!-- Cuadro Chico -->
          @php

          if(Agent::isMobile() && !Agent::isTablet()){
            $img2='img/mobile/resorts/home/'.array_get($resort, 'thumbnails.196x230').'.jpg';
            $img=asset($img2);
            $opacity='';
          }else{
            $img=array_get($resort, 'thumbnails.741x290');
            $opacity='opacity';
          }
          
          @endphp 

        <div class="grid-item grid-item-width3 grid-item-height3">

          <div class="img-resort-small movil-size-resort lazy" id="resort-small" style="background-image:url('{{ $img }}')">
            <a href="{{ array_get($resort, "slug") }}">
              <div class="h-100 w-100 {{$opacity}}"></div>
            </a>
          </div>

          <div class="row no-gutters franja-color w-100">
            <div class="col color-bar">
              <div class="px-md-2 px-3 py-2 text-white h-100">
                <h5 class="bold"><a class="av-white no-decoration hover-blue av-fontsize-point75-1199pixels" href="{{ array_get($resort, "slug") }}">{{ array_get($resort, "title") }} - {{ array_get($resort, "destination") }}</a></h5>
                <div class="txt-light d-none d-md-block av-inclusive av-paddingtop-12 av-fontsize-point75-1199pixels">{{$line2}}</div>
                <div class="txt-light d-block d-md-none font-size-point8-movil">{{ $line2 }}</div>
              </div>
            </div>

            <div class="mx-3 mx-md-0 estrellas estrellas-chicas">
              @for($i=1; $i<=array_get($resort, "starts", 5); $i++) 
                <input id="radio{{$i}}" type="radio" name="estrellas" value="{{ $i }}">
                <label for="radio{{$i}}">★</label> 
              @endfor
            </div>

            <div class="money-section d-flex d-md-block justify-content-center justify-content-md-start ">

              <div class="yellow-square">

                <div class="px-md-2 px-0 py-md-1">

                  <div class="text-uppercase">

                    {{ __('general.starting_at') }}

                  </div>

                  <div class="h-100 d-flex justify-content-center">

                    <span><strong>{{ array_get($resort, "price.symbol", "$").array_get($resort, "price.amount", "undefined") }}</strong></span>

                  </div>
				          <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
					          <input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}"> 
                    <input type="hidden" name="adults" id="adults" value="2">
                    @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif    
              	  	<input type="hidden" name="_ga" id="_ga" value=""> 
                  	<div class="text-uppercase d-none d-md-block">
                    	<button type="submit" class="btn btn-primary text-uppercase av-btn-rates-home">{{ __('general.view_rates') }}</button>
                  	</div>
                  </form>
                  <div class="text-uppercase d-block d-md-none per-night">
                    {{ __('general.per_night') }}
                  </div>
                </div>

              </div>

              <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
              	<input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}">
                <input type="hidden" name="adults" id="adults" value="2">
                @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif     
              	<input type="hidden" name="_ga" id="_ga" value=""> 
              <div class="text-center d-block d-md-none p-0 button-resort">
                <button type="submit" class="btn btn-primary text-uppercase mt-2 av-btn-rates">{{ __('general.view_rates') }}</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        @break @case(3)

        <!-- Cuadro Mediano -->
        @php
          if(Agent::isMobile() && !Agent::isTablet()){
            $img2='img/mobile/resorts/home/'.array_get($resort, 'thumbnails.196x230').'.jpg';
            $img=asset($img2);
            $opacity='';
          }else{
            $img=array_get($resort, 'thumbnails.741x290');
            $opacity='opacity';
          }
        @endphp 

        <div class="grid-item grid-item-width3 grid-item-height4">
          <div class="img-resort-medium movil-size-resort lazy" id="resort-medium" style="background-image:url('{{ $img }}')">
            <a href="{{ array_get($resort, "slug") }}">
              <div class="h-100 w-100 {{$opacity}}"></div>
            </a>
          </div>
          <div class="row no-gutters franja-color w-100">
            <div class="col color-bar">
              <div class="px-md-2 px-3 py-2 text-white h-100">
                <h5 class="bold"><a class="av-white no-decoration hover-blue av-fontsize-point75-1199pixels" href="{{ array_get($resort, "slug") }}">{{ array_get($resort, "title") }} - {{ array_get($resort, "destination") }}</a></h5>
                <div class="txt-light d-none d-md-block av-inclusive av-paddingtop-12 av-fontsize-point75-1199pixels">{{ $line2 }}</div>
                <div class="txt-light d-block d-md-none font-size-point8-movil">{{ $line2 }}</div>
              </div>
            </div>

            <div class="mx-3 mx-md-0 estrellas estrellas-chicas">
              @for($i=1; $i<=array_get($resort, "starts", 5); $i++) 
                <input id="radio{{$i}}" type="radio" name="estrellas" value="{{ $i }}">
                <label for="radio{{$i}}">★</label> 
              @endfor
            </div>

            <div class="money-section d-flex d-md-block justify-content-center justify-content-md-start ">
              <div class="yellow-square">
                <div class="px-md-2 px-0 py-md-1">
                  <div class="text-uppercase">
                    {{ __('general.starting_at') }}
                  </div>
                  <div class="h-100 d-flex justify-content-center">
                    <span><strong>{{ array_get($resort, "price.symbol", "$").array_get($resort, "price.amount", "undefined") }}</strong></span>
                  </div>
                  <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
					          <input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}">
                    <input type="hidden" name="adults" id="adults" value="2">
                      @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif   
              	  	<input type="hidden" name="_ga" id="_ga" value=""> 
                  	<div class="text-uppercase d-none d-md-block">
                    	<button type="submit" class="btn btn-primary text-uppercase av-btn-rates-home">{{ __('general.view_rates') }}</button>
                  	</div>
                  </form>
                  <div class="text-uppercase d-block d-md-none per-night">
                    {{ __('general.per_night') }}
                  </div>
                </div>
              </div>

              <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank"> 
              	<input type="hidden" name="hotelid" value="{{ array_get($resort, "resort_id")}}">
                <input type="hidden" name="adults" id="adults" value="2">
                @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif     
              	<input type="hidden" name="_ga" id="_ga" value=""> 
                <div class="text-center d-block d-md-none p-0 button-resort">
                <button type="submit" class="btn btn-primary text-uppercase mt-2 av-btn-rates">{{ __('general.view_rates') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        @break @endswitch @endforeach
      </div>
    </div>
    <div class="col-6 text-left pl-2 pt-5"> <a class="av-subrayado-yellow medium" href="{{ lang_url("/".__('routes.webcams')) }}">{{ __('general.view_webcams') }}</a></div>
    <div class="col-6 text-right pr-2 pt-5"><a class="av-subrayado-yellow medium" href="{{ lang_url("/".Lang::get('routes.beach_resorts'))}}">{{ __('general.view_more') }}</a></div>
  </div>
  <div class="row resort-final-option py-2 pb-5"></div>
</section>
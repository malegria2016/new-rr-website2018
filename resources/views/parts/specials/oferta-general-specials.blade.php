@php
    $resorts=count(__('special-offer/setup/main.resorts'));
@endphp
<section class="m001land pt-2-">
    <h2 class="tituloh2 titulocentrado">{{__('special-offer/setup/main.subtitulo2')}}</h2>

    <div class="row centrado fondoofertas">
        @for($i=0;$i<$resorts;$i++)
        @php 
            $stars = __('special-offer/setup/main.resorts.'.$i.'.stars');
            $destino = __('special-offer/setup/main.resorts.'.$i.'.destination');
            $slug_resort = __('special-offer/setup/main.resorts.'.$i.'.slug');
            $img_small="img/resorts/".$slug_resort."/".$slug_resort."-offer.jpg";
            $lb_destino="";

            switch($destino){
                case 1: $lb_destino="Cancun, Mexico"; break;
                case 2: $lb_destino="Riviera Maya, Mexico"; break;
                case 3: $lb_destino="Playa del Carmen, Mexico"; break;
                case 4: $lb_destino="Sint Maarten Island"; break;
                case 5: $lb_destino="Curacao Island"; break;
                case 6: $lb_destino="Punta Cana, Dominican Republic"; break;
                default;
            }
        @endphp
        
        <div class="offerset">
            <img class="img-fluid" src="{{ asset($img_small)}}" alt="{{__('special-offer/setup/main.resorts.'.$i.'.alt')}}" title="{{__('special-offer/setup/main.resorts.'.$i.'.alt')}}">
            @if(!Agent::isMobile())
            <a href="#" data-toggle="modal" data-target="#picturemodal-{{$i}}"><img class="img-fluid zoom" src="{{asset('img/icon-galeria/zoom-in.png')}}" alt="Zoom"></a>
            @endif
            <div style="min-height: 60px;">
                <a href="{{__('special-offer/setup/main.resorts.'.$i.'.resort_link')}}"><h3 class="titresort">{!!__('special-offer/setup/main.resorts.'.$i.'.name')!!}</h3></a>
                
                <div style="width: 75%; float: left;">
                    <span class="titdestino">{{ $lb_destino }}</span>
                </div>   
                <div class="gpoestrellas" style="width: 25%; float: right;">
                    @for($w=0;$w<$stars;$w++)
                    <label>★</label>
                    @endfor
                </div>
            </div>
            
            <hr>
            <a href="{{__('special-offer/setup/main.resorts.'.$i.'.offer_link')}}"><h3 class="titoferta">{{__('special-offer/setup/main.resorts.'.$i.'.offer_name')}}</h3></a>
            <ul class="inclusiones">{!!__('special-offer/setup/main.resorts.'.$i.'.bullets')!!}</ul>
            <a href="#" class="more" data-toggle="modal" data-target="#masinformacionoferta-{{$i}}">{{__('general.view_more')}}</a>
            <p class="date"><span>Valid until:</span> {{__('special-offer/setup/main.resorts.'.$i.'.booking_end')}}</p>
            <p class="oferta">{{__('special-offer/setup/main.resorts.'.$i.'.discount_label')}}</p>
            <a href="#" data-toggle="modal" data-target="#form-{{$i}}" class="reserva text-uppercase">{{__('general.book')}}</a>

        </div>
    @endfor

    </div>
</section>


@for($a=0;$a<$resorts;$a++)
    @php
        $slug_resort = __('special-offer/setup/main.resorts.'.$a.'.slug');
        $img_big="img/resorts/".$slug_resort."/".$slug_resort."-offer-big.jpg";
        $tipo = __('special-offer/setup/main.resorts.'.$a.'.tipo');
        $code = __('special-offer/setup/main.resorts.'.$a.'.code');
        $resort_id = __('special-offer/setup/main.resorts.'.$a.'.resort_id');
        $ihotelier_id = __('special-offer/setup/main.resorts.'.$a.'.ihotelier_id');
        $lb_rate_plan="";
    @endphp
<!-- Modal information-->
<div class="modal fade" id="masinformacionoferta-{{$a}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title" id="ModalLabel">
            {!!__('special-offer/setup/main.resorts.'.$a.'.name')!!}<br>
            <b>{{__('special-offer/setup/main.resorts.'.$a.'.offer_name')}}</b>
            </span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!!__('special-offer/setup/main.resorts.'.$a.'.view_more')!!}
        </div>
        <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
        </div>-->
        </div>
    </div>
</div>

<!-- Modal pictures-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="picturemodal-{{$a}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabel">
                    <b>{{__('special-offer/setup/main.resorts.'.$a.'.name')}}</b>
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="img-fluid"src="{{ asset($img_big)}}" alt="{{__('special-offer/setup/main.resorts.'.$a.'.alt')}}" title="{{__('special-offer/setup/main.resorts.'.$a.'.alt')}}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
            </div>
        </div>
    </div>
</div>



<!-- Modal booknow-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-{{$a}}">
    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">
        <div class="modal-header">
          <div class="w-100 text-center">
            <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">{{__('special-offer/setup/main.resorts.'.$a.'.offer_name')}}</h5>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <form id="form-modal" action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank" onsubmit="">
        <input type="hidden" name="hotelid" id="hotelidB" value="{{$resort_id}}">
        @if($tipo[0]==1)<input type="hidden" name="RatePlanID" id="RatePlanIDB" value="{{$ihotelier_id}}">@endif
        @if($tipo[0]==2)<input type="hidden" name="packageId" id="packageIdB" value="{{$ihotelier_id}}">@endif
        @if($code!='')<input type="hidden" name="identifier" value="{{$code}}">@endif               
        <div class="modal-body">
          <div class="w-100 text-center">
            <h6 class="text-uppercase" id="resortoffer">{{__('special-offer/setup/main.resorts.'.$a.'.name')}}</h6>
          </div>
          <div class="contenedor-tabs">
            <div class="tab-content">
              <div class="booking-interno-inputs">
                <label style="color: #929090">{{ __('general.booking.label.check_in') }}</label>
                <div class="input-group date" data-provide="datepicker" id="modalDeals{{$a}}">
                  <input type="text" class="form-control" id="dateinB" name="datein" placeholder="Arrival Date">
                  <div class="input-group-addon">
                    <span class="icono-calendario"></span>
                  </div>
                </div>
              </div>
              <div class="booking-interno-inputs">
                <label style="color: #929090">{{ __('general.booking.label.check_out') }}</label>
                  <div class="input-group date" data-provide="datepicker" id="modalDeals{{$a}}">
                  <input type="text" id="dateoutB" name="dateout" class="form-control" placeholder="Arrival Date">
                  <div class="input-group-addon">
                    <span class="icono-calendario"></span>
                  </div>
                </div>
              </div>
              <div class="booking-interno-inputs">
                  <label id="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                  <select class="form-control" name="adults" id="adultsB">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
              </div>

              <div class="booking-interno-inputs">
                  <label id="spChildrenB">{{ __('general.booking.label.children') }}</label>
                  <select class="form-control" name="children" id="childrenB">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
              </div>

              <div class="booking-interno-inputs" id="teenBoxB">
                  <label id="spTeenB">{{ __('general.booking.label.teen') }}</label>
                  <select class="form-control" name="children2" id="children2B">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option> 
                  </select>
              </div>

              <div class="booking-interno-inputs">
                  <label for="room"><br> {{ __('general.booking.label.rooms') }}</label>
                  <select class="form-control" name="rooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
              </div>
            </div>
          </div>
          @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif
          <div class="text-center modal-bottom-text to-button" style="">
          <button type="submit" class="my-4 text-uppercase button-modal-book bold" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
        </div>
      </div>
      </form>
     </div>

    </div>
</div>
@endfor
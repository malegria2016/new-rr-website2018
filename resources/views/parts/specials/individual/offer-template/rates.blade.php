@php
    $resorts=count(__('special-offer/'.$slug.'.resorts'));
    $total_filtros=count(__('special-offer/'.$slug.'.lista_filtros'));
    $total_filtros_rate=count(__('special-offer/'.$slug.'.lista_filtros2'));
    $val= substr($filtro,8);
    $value=""; $color_class=""; $evento="";
    if(!$val){
        
    }else{
       $pieces = explode("-", $val);
       $total= count($pieces);
    }
    if($pieces[0]=='all'){ $evento='1';} //todos los text box checked

@endphp
            @for ($k=0; $k<$total;$k++)
           <!-- {{$pieces[$k]}} / -->
            @endfor
<section class="m001land">

    <div class="col-12 col-md-12 margen01 margen03">
            <div id="destino" class="dropdownFiltro">
                <button class="dropbtn">Filter by Destination:</button>
                <div class="dropdownContent">
                    <div class="form-check">
                      <label class="form-check-label" style="font-size: 1rem;">
                        <input type="checkbox" class="form-check-input check-input-destino" value="all" id="allDestinations" {{$evento==1?'checked':''}}>All
                      </label>
                    </div>
                    @for($b=0;$b<$total_filtros;$b++)
                        @php $value=__('special-offer/'.$slug.'.lista_filtros.'.$b.'.value');@endphp
                        <div class="form-check">
                          <label class="form-check-label" style="font-size: 1rem;">
                            <input type="checkbox" class="form-check-input check-input-destino" value="{{ $value}}" id="{{ $value}}" {{$evento==1?'checked':''}}>{{__('special-offer/'.$slug.'.lista_filtros.'.$b.'.name')}}
                          </label>
                        </div>
                    @endfor
                </div>
            </div>

            <!--
            <div id="ratePlan" class="dropdownFiltro">
                <button class="dropbtn">Filter by Rate Plan:</button>
                <div class="dropdownContent">
                    <div class="form-check">
                      <label class="form-check-label" style="font-size: 1rem;">
                        <input type="checkbox" class="form-check-input check-input-rate" value="all" id="allRates" {{$evento==1?'checked':''}}>All
                      </label>
                    </div>
                    @for($b=0;$b<$total_filtros_rate;$b++)
                        @php $value=__('special-offer/'.$slug.'.lista_filtros2.'.$b.'.value');@endphp
                        <div class="form-check">
                          <label class="form-check-label" style="font-size: 1rem;">
                            <input type="checkbox" class="form-check-input check-input-rate" value="{{ $value}}" id="{{ $value}}" {{$evento==1?'checked':''}}>{{__('special-offer/'.$slug.'.lista_filtros2.'.$b.'.name')}}
                          </label>
                        </div>
                    @endfor
                </div>
            </div>
            -->

        
    </div>

    <div class="row centrado fondoofertas">
    @for($i=0;$i<$resorts;$i++)
        @php 
            $stars = __('special-offer/'.$slug.'.resorts.'.$i.'.stars');
            $rate_plan = __('special-offer/'.$slug.'.resorts.'.$i.'.rate_plan');
            $destino = __('special-offer/'.$slug.'.resorts.'.$i.'.destination');
            $slug_resort = __('special-offer/'.$slug.'.resorts.'.$i.'.slug');
            $img_small="img/resorts/".$slug_resort."/".$slug_resort."-offer.jpg";
            $clasificacion=__('special-offer/'.$slug.'.resorts.'.$i.'.filtros');
            $claseDestino = substr($clasificacion, 0, 3);
            $claseRate = substr($clasificacion, 4, 2);

            $lb_destino="";
            $lb_rate_plan="";
            $clase="";
            $resultado="";

            switch($destino){
                case 1: $lb_destino="Cancun, Mexico"; break;
                case 2: $lb_destino="Riviera Maya, Mexico"; break;
                case 3: $lb_destino="Playa del Carmen, Mexico"; break;
                case 4: $lb_destino="Sint Maarten Island"; break;
                case 5: $lb_destino="Curacao Island"; break;
                case 6: $lb_destino="Punta Cana, Dominican Republic"; break;
                default;
            }
            switch($rate_plan){
                case 1: $lb_rate_plan="All Inclusive"; break;
                case 2: $lb_rate_plan="Room Only"; break;
                case 3: $lb_rate_plan="Bed & Breakfast"; break;
                default;
            }
            for($w=0; $w<$total;$w++){
                $almacen[$w]='';
                $valor=$pieces[$w];
                if($valor=='all'){ break; }
                $resultado = strpos($clasificacion, $valor);

                
                if ($resultado === 0) {$almacen[$w]='1'; $clase="visible"; } 
                if ($resultado === false){
                    if(in_array(1,$almacen)){
                        if($valor=='ai'|| $valor=='ep' || $valor=='bb' ){
                            $clase="oculto";
                        } 
                    }else{ $clase="oculto"; }
                }

                //echo '['.$i.'-'.$w.'- ('.$clasificacion.') -'.$valor.'-'.$resultado.'-'.$clase.']';
            }

        @endphp
        <div class="offerset {{$clasificacion}} {{$claseDestino}} {{$claseRate}} {{$clase}}">
            <img class="img-fluid" src="{{ asset($img_small)}}" alt="{{__('special-offer/'.$slug.'.resorts.'.$i.'.alt')}}" title="{{__('special-offer/'.$slug.'.resorts.'.$i.'.alt')}}">
            @if(!Agent::isMobile())
            <a href="#" data-toggle="modal" data-target="#picturemodal-{{$i}}"><img class="img-fluid zoom" src="{{asset('img/icon-galeria/zoom-in.png')}}" alt="Zoom"></a>
            @endif
            <div style="min-height: 60px;">
                <h3 class="titresort">{!!__('special-offer/'.$slug.'.resorts.'.$i.'.name')!!}</h3>
                
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
            <h3 class="titoferta">{{$lb_rate_plan}}</h3>
            <ul class="inclusiones">{!!__('special-offer/'.$slug.'.resorts.'.$i.'.bullets')!!}</ul>
            
            <p class="date"><span>{{__('general.travel')}}</span> {{__('special-offer/'.$slug.'.resorts.'.$i.'.travel_window')}}</p>

            <div class="margenMore">
                <a href="#" class="moreInterna" data-toggle="modal" data-target="#masinformacionoferta-{{$i}}">{{__('general.view_more')}}</a>
            </div>

            <p class="oferta">{{__('special-offer/'.$slug.'.resorts.'.$i.'.discount_label')}}</p>

            
            
            
            <!--<a href="#" class="reserva" style="text-transform: uppercase;" data-toggle="modal" data-target="#form">{{__('general.booking.btn.book_now')}}</a>-->

            <a href="#" data-toggle="modal" data-target="#form-{{$i}}" class="reserva text-uppercase">{{__('general.book')}}</a>
        </div>
    @endfor

    </div>
</section>

@for($a=0;$a<$resorts;$a++)
    @php
        $slug_resort = __('special-offer/'.$slug.'.resorts.'.$a.'.slug');
        $img_big="img/resorts/".$slug_resort."/".$slug_resort."-offer-big.jpg";
        $rate_plan = __('special-offer/'.$slug.'.resorts.'.$a.'.rate_plan');
        $tipo = __('special-offer/'.$slug.'.resorts.'.$a.'.tipo');
        $code = __('special-offer/'.$slug.'.resorts.'.$a.'.code');
        $resort_id = __('special-offer/'.$slug.'.resorts.'.$a.'.resort_id');
        $ihotelier_id = __('special-offer/'.$slug.'.resorts.'.$a.'.ihotelier_id');
        $lb_rate_plan="";
        switch($rate_plan){
            case 1: $lb_rate_plan="All Inclusive"; break;
            case 2: $lb_rate_plan="Room Only"; break;
            case 3: $lb_rate_plan="Bed & Breakfast"; break;
            default;
        }
    @endphp
<!-- Modal information-->
<div class="modal fade" id="masinformacionoferta-{{$a}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title" id="ModalLabel">
                <b>{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}} - {{$lb_rate_plan}}</b>
            </p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!!__('special-offer/'.$slug.'.resorts.'.$a.'.view_more')!!}
        </div>
        </div>
    </div>
</div>

<!-- Modal pictures-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="picturemodal-{{$a}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabel">
                    <b>{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}}</b>
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="img-fluid"src="{{ asset($img_big)}}" alt="{{__('special-offer/'.$slug.'.resorts.'.$a.'.alt')}}" title="{{__('special-offer/'.$slug.'.resorts.'.$a.'.alt')}}">
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
            <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">{{__('special-offer/'.$slug.'.title')}}</h5>
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
            <h6 class="text-uppercase" id="resortoffer">{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}} - {{$lb_rate_plan}}</h6>
          </div>
          <div class="contenedor-tabs">
            <div class="tab-content">
              <div class="booking-interno-inputs">
                <label>{{ __('general.booking.label.check_in') }}</label>
                <div class="input-group date" data-provide="datepicker" id="modalDeals{{$a}}">
                  <input type="text" class="form-control" id="dateinB" name="datein" placeholder="Arrival Date">
                  <div class="input-group-addon">
                    <span class="icono-calendario"></span>
                  </div>
                </div>
              </div>
              <div class="booking-interno-inputs">
                <label>{{ __('general.booking.label.check_out') }}</label>
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

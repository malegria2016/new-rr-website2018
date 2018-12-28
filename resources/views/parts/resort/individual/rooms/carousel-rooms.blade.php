@php
  $total_rooms = count( __('resorts/'.$resort.'/rooms.rooms') );
  $date = date_create();
  $today =date_format($date, 'n/Y');
@endphp

<section class="container ">
  @for ($i=0; $i<$total_rooms; $i++)
    @php
    $total_amenities = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities') );
    $total_carrusel = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.carrusel') );
    $total_lista = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.lista') );   
    @endphp
    <div class="row no-gutters resort-rooms">
      <div class="col-12 col-lg-7">
        <div class="resort-gallery-container pt-0 ml-2">
          <ul class="rooms-gallery">
            @for ($j=0; $j<$total_carrusel; $j++)
            @php 
            if(Agent::isMobile() && !Agent::isTablet()){
            $img= 'img/mobile/resorts/'.$resort.'/rooms/gallery/'.__('resorts/'.$resort.'/rooms.rooms.'.$i.'.carrusel.'.$j);
            }else{
            $img= 'img/resorts/'.$resort.'/rooms/gallery/'.__('resorts/'.$resort.'/rooms.rooms.'.$i.'.carrusel.'.$j);
            }
            @endphp
            <li>
              <img src="{{ asset($img)}}" title="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.image.alt')}}" alt="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.image.alt')}}" width="900"/>
            </li>
            @endfor
          </ul>
          <div class="label">
            <div>{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.title')}}</div>
            @if(__('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url')!='')
            <a href="#" data-toggle="modal" data-target="#modal-rooms{{$i}}" >
              {{__('general.flor_plan')}}
            </a>
            @endif
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5 right-column-rooms">
        <div class="row no-gutters resort-room">
          <div class="col-12 first-content">
            <span class="bold pt-2 av-skyblue text-uppercase px-3">{{__('general.lb_room_amenities')}}</span>
          </div>
          <div class="row no-gutters list-amenitys-rooms">
            <div class="resort-rate-plans mt-0 px-3">
              <ul class="d-flex flex-wrap" >
                @for ($k=0; $k<$total_amenities; $k++)
                <li class="d-inline-block amenity-{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$k.'.icon') }}">
                  {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$k.'.title') }}
                </li>
                @endfor
              </ul>
            </div>
          </div>
          <div class="row no-gutters w-100 list-rooms mx-3 pb-3">
            <div class="col-12">
              <span class="bold py-2 av-skyblue text-uppercase">{{__('general.lb_room_bullets')}}</span>
            </div>
            <div class="col-12">
              <ul class="pl-0 mb-0" style="">
                @for ($k=0; $k<$total_lista; $k++)
                <li>{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.lista.'.$k) }}</li>
                @endfor
              </ul>
            </div>
          </div>
          <div class="col-12 resort-booking rooms-customizer py-3 px-3 pb-lg-0">
            <div class="row no-gutters">
              <div class="col-12 col-sm-6 pb-3 pb-sm-0">
                <div class="resort-booking-price">
                  <p>{{__('general.starting_at')}} <span>{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.symbol')}}{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.amount')}}{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.currency')}}</span> {{__('general.per_night')}}</p>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                  @if(__('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.amount')!='')  
                    <div class="resort-booking-upgrade">
                      <a class="mr-0">{{__('general.upgrade')}} <span>{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.symbol')}}{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.amount')}} {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.currency')}}</span></a>
                    </div>
                  @endif
                  <a href="#" data-toggle="modal" data-target="#checkAvailabity" class="open-Modal btn btn-room-booking position-inherity" data-resort="{{ __('resorts/'.$resort.'/rooms.resort_id')}}" data-ihotelier="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.room_id')}}" data-tipo="3" data-rname="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.title')}}" data-roffer="Room">{{__('general.availability')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endfor

@for ($i=0; $i<$total_rooms; $i++)
@php $img_flor_plan= __('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url'); @endphp

<div class="modal fade modal-webcams modal-foor-plan" id="modal-rooms{{$i}}" tabindex="-1" role="dialog" aria-labelledby="rooms-modal-title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style="">
			<div class="modal-header" style="">
				<div class="w-100 text-center">
					<h5 class="modal-title av-white" id="rooms-modal-title">{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}</h5>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="">
				<img id="floor-image" class="img-fluid" src="{{ asset($img_flor_plan) }}" alt="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}" />
      </div>
		</div>
	</div>
</div>
@endfor
</section>

<br/><br/>

<form id="form-modal" action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank" onsubmit="">
  <div class="modal fade modal-webcams checkAvailabityModal" id="checkAvailabity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="w-100 text-center">
            <h5 class="modal-title av-white  text-uppercase" id="resortname"> </h5>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <input type="hidden" name="hotelid" id="hotelidB" value="">
        <input type="hidden" name="roomtypeid" id="packageIdB" value="">
        
        <div class="modal-body">
          <div class="contenedor-tabs">
            <div class="tab-content">
              <div class="booking-interno-inputs pbottom-2">
                <div class="combo-box arrow-down-rooms">
                  <label class="gray-font">{{ __('general.booking.label.month') }}</label>
                  <div class="input-group date" data-provide="datepicker" id="startmonth2">
                    <input type="text" class="form-control" id="startmonth" name="startmonth" placeholder="{{$today}}">
                    <div class="input-group-addon">
                      <span class="icono-calendario"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="booking-interno-inputs pbottom-2">
                <div class="combo-box arrow-down-rooms">
                  <label class="gray-font" for="room">{{ __('general.booking.label.rooms') }}</label>
                  <select class="form-control" name="rooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>

              <div class="booking-interno-inputs" style="width:32%;">
                <div class="combo-box arrow-down-rooms">
                  <label id="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                  <select class="form-control" name="adults" id="adultsB">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
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
              </div>

              <div class="booking-interno-inputs" style="width:32%;">
                <div class="combo-box arrow-down-rooms">
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
              </div>

              <div class="booking-interno-inputs" id="teenBoxB" style="width:30%;">
                <div class="combo-box arrow-down-rooms">
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
              </div>

            </div>
          </div>
        </div>

        <input type="hidden" name="_ga" id="_ga" value="">
        @if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif
        <div class="text-center modal-bottom-text to-button" style="">
          <button type="submit" class="my-4 text-uppercase button-modal-book bold" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
        </div>
      </div>
    </div>
  </div>
  </form>

  <input type="hidden" name="tag_adult"     id="tag_adultB"     value="{{ __('general.booking.label.adults') }}">
  <input type="hidden" name="tag_adult2"    id="tag_adult2B"    value="{{ __('general.booking.label.adults1') }}">
  <input type="hidden" name="tag_adult3"    id="tag_adult3B"    value="{{ __('general.booking.label.adults2') }}">
  <input type="hidden" name="tag_teen"      id="tag_teenB"      value="{{ __('general.booking.label.teen') }}">
  <input type="hidden" name="tag_children"  id="tag_childrenB"  value="{{ __('general.booking.label.children') }}">
  <input type="hidden" name="tag_children2" id="tag_children2B" value="{{ __('general.booking.label.children1') }}">
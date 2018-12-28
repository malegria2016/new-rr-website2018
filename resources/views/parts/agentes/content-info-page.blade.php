@section('title', 'Agentes - Royal Resorts')
@section('metadescription', 'Agentes Royal Resorts')

@php 
  if(Agent::isMobile() && !Agent::isTablet()){ $img= 'img/cancun/cancun-beach-resort-a-movil.jpg';}
  else{ $img= 'img/cancun/cancun-beach-resort-a.jpg';}
@endphp


<img class="img-fluid" src="{{asset($img)}}" alt="Agentes Royal Resorts" width="100%">

<section class="container subinterna">
  <div class="container">

    <div class="row pt-32">
      <div class="col-12">
        <h1>LOS MEJORES HOTELES EN CANCÚN Y RIVIERA MAYA</h1>
        <p class="justify av-parrafo pt-3">Conoce dos de los mejores hoteles que la familia Royal Resorts tiene en Cancún y la Riviera Maya. Nuestros hoteles familiares son ideales para que tus clientes pasen unas perfectas vacaciones en familia en las playas de Cancún y la Riviera Maya. Tenemos opciones para todos los gustos y presupuestos; desde un hotel familiar frente a las hermosas playas de Cancún hasta un hotel de lujo en la tranquilidad de las playas de Puerto Morelos. </p>
      </div>
    </div>

    <div class="row py-4 pt-5">
      @desktop
      @elsedesktop
      <div class="col-lg-0 col-md-0 col-md-12 col-sm-12">
        <img class="img-fluid" src="{{asset('img/resorts/grand-residences-riviera-cancun/big-gallery/grand-residences-riviera-cancun-facilities-a.jpg')}}" alt="Agentes Royal Resorts">
      </div>
      @enddesktop

      <div class="col-lg-6 col-md-6 col-md-12 col-sm-12" style="padding-right: 15px;">
        <h3>GRAND RESIDENCES RIVIERA CANCUN</h3>
        <p class="pt-08">Con 201 lujosas suites, y perteneciendo a la más exclusiva colección de hoteles del mundo, The Leading Hotels of the World, este maravilloso hotel familiar en Puerto Morelos, ubicado en una playa protegida a unos 30 minutos de Cancún, ofrece las mejores amenidades y servicio de primera categoría. Lujosos restaurantes que deleitarán hasta al paladar más exigente, programa de actividades para toda la familia, y 3 grandes albercas, son parte de lo que ofrece este lujoso hotel. <br><a href="#grand-residences" class="link-amarillo" role="button">Conoce las habitaciones de Grand Residences Riviera Cancún <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>  

        <a href="{{asset('resources/Grand-Residences-ES.pdf')}}" class="btn yellow-button" role="button" download="Brochure Grand Residences Riviera Cancun"><i class="fa fa-cloud-download" aria-hidden="true"></i> Descarga nuestro Brochure (PDF)</a> <br><br>
        
      </div>
      @desktop
      <div class="col-lg-6 col-md-6 col-md-0 col-sm-0">
        <img class="img-fluid" src="{{asset('img/resorts/grand-residences-riviera-cancun/big-gallery/grand-residences-riviera-cancun-facilities-a.jpg')}}" alt="Agentes Royal Resorts">
      </div>
      @enddesktop


    </div>
    
    <div class="row py-4">
      <div class="col-lg-6 col-md-6 col-md-12 col-sm-12">
        <img class="img-fluid" src="{{asset('img/resorts/the-royal-caribbean/big/the-royal-caribbean-facilities-a.jpg')}}" alt="Agentes Royal Resorts">
      </div>
      <div class="col-lg-6 col-md-6 col-md-12 col-sm-12" style="padding-left: 15px;">
        <h3>THE ROYAL CARIBBEAN ALL SUITES RESORT</h3>
        <p class="pt-08">Frente a las hermosas playas del Mar Caribe, este hotel familiar en Cancún ofrece 200 habitaciones con vista al Mar que le brindarán al huésped una experiencia inigualable. Todas las habitaciones cuentan con WiFi gratuito, balcón o terraza privados, entre otras amenidades estupendas. El hotel cuenta con restaurantes familiares, actividades para niños y adultos, y las mejores instalaciones para disfrutar las mejores vacaciones familiares en Cancún. <br><a href="#the-royal-caribbean" class="link-amarillo" role="button">Conoce las habitaciones de The Royal Caribbean Resort <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

        <a href="{{asset('resources/The-Royal-Caribbean-ES.pdf')}}" class="btn yellow-button" role="button" download="Brochure The Royal Caribbean All Suites Resort"><i class="fa fa-cloud-download" aria-hidden="true"></i> Descarga nuestro Brochure (PDF)</a> <br id="grand-residences">
      </div>
    </div>

  </div>
  <br><br>
  <hr>
  <br><br>
  <div>
  <h2 class="color-sky">GRAND RESIDENCES RIVIERA CANCUN - HABITACIONES</h2>
  <p class="pt-08">Las amplias habitaciones de Grand Residences cuentan con muebles hechos a mano y aparatos electrónicos de última generación, además de amenidades de baño Bvlgari®, Jacuzzi y una amplia terraza privada al aire libre. Todas las habitaciones cuentan con acceso gratuito a internet de alta velocidad, aire acondicionado central, caja de seguridad y Smart Tv de 47" con AppleTV.</p>

@php
  $resort="grand-residences-riviera-cancun";
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

  

  </div><!--Grand Residences-->

  <br id="the-royal-caribbean"><br>
  <hr>
  <br><br>
  
  <h2 class="color-sky">THE ROYAL CARIBBEAN RESORT – HABITACIONES</h2>
  <p class="pt-08">Las habitaciones del hotel The Royal Caribbean están totalmente equipadas para pasar unas perfectas vacaciones familiares; todas con una increíble vista al mar o a las albercas del resort. Hay habitaciones para 2 personas con microondas, cafetera, y frigobar, un balcón privado con las mejores vistas; y habitaciones amplias hasta para 6 huéspedes con cocina completa, sala, comedor y terraza privada con área de estar.</p>


@php
  $resort="the-royal-caribbean";
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
            <a href="#" data-toggle="modal" data-target="#caribbean-modal-rooms{{$i}}" >
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
            
          </div>
        </div>
      </div>
    </div>
  @endfor

@for ($j=0; $j<$total_rooms; $j++)
@php $img_flor_plan= __('resorts/'.$resort.'/rooms.rooms.'.$j.'.flor-plan-url'); @endphp

<div class="modal fade modal-webcams modal-foor-plan" id="caribbean-modal-rooms{{$j}}" tabindex="-1" role="dialog" aria-labelledby="rooms-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="">
      <div class="modal-header" style="">
        <div class="w-100 text-center">
          <h5 class="modal-title av-white" id="rooms-modal-title">{{ __('resorts/'.$resort.'/rooms.rooms.'.$j.'.title') }}</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="">
        <img id="floor-image" class="img-fluid" src="{{ asset($img_flor_plan) }}" alt="{{ __('resorts/'.$resort.'/rooms.rooms.'.$j.'.title') }}" />
      </div>
    </div>
  </div>
</div>
@endfor
</section>

<br/><br/>


  
  
  <!--The Royal Caribbean-->
</section>

<div id="contacto"></div>





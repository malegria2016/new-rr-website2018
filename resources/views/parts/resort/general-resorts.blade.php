@section('title', __('beach-resorts.seo.title'))
@section('metadescription', __('beach-resorts.seo.metadescription'))

<section class="container py-2">
  <div class="row no-gutters subinterna pb-4">
    <div class="col d-none d-md-block"></div>
    <div class="col-12 col-md-10 px-0">
      <h1 class="text-left text-uppercase py-4 av-blue2">{{__('beach-resorts.title')}}</h1>
      <h6 class="text-uppercase bold">{{__('beach-resorts.subtitle')}}</h6>
      {!!__('beach-resorts.description')!!}
    </div>
    <div class="col d-none d-md-block"></div>
  </div>

  <div class="row no-gutters pt-4">
    <ul class="nav nav-pills nav-justified container w-75 av-destination-new-tabs resort-tabs p-0" id="pills-tab" role="tablist">
      <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
        <a class="nav-link text-uppercase bold w-100 active" id="pills-resort-all" data-toggle="pill" href="#pills-mexican" role="tab" aria-controls="pills-mexican" aria-selected="true">
          {{__('beach-resorts.label')}}</h6>
        </a>
      </li>
      <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
        <a class="nav-link text-uppercase bold w-100 " id="pills-resort-mexican" data-toggle="pill" href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">
          {{__('beach-destinations.zones.0.title')}}
        </a>
      </li>
      <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
        <a class="nav-link text-uppercase bold w-100 " id="pills-resort-caribean" data-toggle="pill" href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">
          {{__('beach-destinations.zones.1.title')}}
        </a>
      </li>
    </ul>
  </div>

  <div id="resort-mexican" class="show-resort">
    <div class="row no-gutters subinterna">
      <div class="col d-none d-md-block"></div>
      <div class="col-12 col-md-10 py-5">
        <h6 class="text-uppercase bold">{{__('beach-destinations.zones.0.title')}}</h6>
        {!!__('beach-resorts.ubicacion.mexico.description')!!}
      </div>
      <div class="col d-none d-md-block"></div>
    </div>
    @php 
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.0.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.0.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }
        $total=__('beach-resorts.ubicacion.mexico.resorts.0.stars') 
    @endphp
    <div class="row no-gutters element-royal">
      <div class="col-md-4 col-1md-2 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem" >{{__('beach-resorts.ubicacion.mexico.resorts.0.title')}}</div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.mexico.resorts.0.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.0.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.0.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.0.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.1.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.1.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }
        $total=__('beach-resorts.ubicacion.mexico.resorts.1.stars') 
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem" >{{__('beach-resorts.ubicacion.mexico.resorts.1.title')}}</div>
          <div class="row no-gutters w-100">
            @if(__('beach-resorts.ubicacion.mexico.resorts.1.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.1.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.1.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.1.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>

      @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.2.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.2.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }         
        $total=__('beach-resorts.ubicacion.mexico.resorts.2.stars')
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem" >
            {{__('beach-resorts.ubicacion.mexico.resorts.2.title')}}
          </div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.mexico.resorts.2.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.2.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.2.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.2.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
    </div>

    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.3.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.3.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }

        $total=__('beach-resorts.ubicacion.mexico.resorts.3.stars') 
    @endphp
    <div class="row no-gutters element-royal">
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem" >
            {{__('beach-resorts.ubicacion.mexico.resorts.3.title')}}
          </div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.mexico.resorts.3.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.3.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>

          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.3.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.3.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>

      @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.4.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.4.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }
        $total=__('beach-resorts.ubicacion.mexico.resorts.4.stars') 
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">
            {{__('beach-resorts.ubicacion.mexico.resorts.4.title')}}
          </div>

          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.mexico.resorts.4.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.4.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>

          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.4.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.4.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>

      @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.mexico.resorts.5.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.5.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }       
        $total=__('beach-resorts.ubicacion.mexico.resorts.5.stars') 
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">
            {{__('beach-resorts.ubicacion.mexico.resorts.5.title')}}
          </div>

          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.mexico.resorts.5.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.mexico.resorts.5.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>

          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.mexico.resorts.5.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.mexico.resorts.5.url')}}">{{ __('general.view_more') }}</a>
        </div>
      </div>
    </div>
  </div>

  <div id="resort-caribean" class="show-resort">
    <div class="row no-gutters py-5 subinterna">
      <div class="col d-none d-md-block"></div>
      <div class="col-md-10 col-12">
        <h6 class="text-uppercase bold">{{__('beach-destinations.zones.1.title')}}</h6>
        {!!__('beach-resorts.ubicacion.caribe.description')!!}
        </div>
      <div class="col d-none d-md-block"></div>
    </div>

    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.0.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.0.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        } 

        $total=__('beach-resorts.ubicacion.caribe.resorts.0.stars') 
    @endphp
    <div class="row no-gutters element-royal">
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">
            {{__('beach-resorts.ubicacion.caribe.resorts.0.title')}}
          </div>

          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.0.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.0.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>

          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.caribe.resorts.0.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.0.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>

    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.1.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.1.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }         
        $total=__('beach-resorts.ubicacion.caribe.resorts.1.stars') 
    @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">
            {{__('beach-resorts.ubicacion.caribe.resorts.1.title')}}
          </div>

          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.1.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.1.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify">{{__('beach-resorts.ubicacion.caribe.resorts.1.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.1.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.2.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.2.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }     
        $total=__('beach-resorts.ubicacion.caribe.resorts.2.stars') 
    @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">{{__('beach-resorts.ubicacion.caribe.resorts.2.title')}}</div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.2.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.2.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>

          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.caribe.resorts.2.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.2.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
    </div>

    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.3.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.3.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }      
        $total=__('beach-resorts.ubicacion.caribe.resorts.3.stars') 
    @endphp  
    <div class="row no-gutters element-royal">
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">{{__('beach-resorts.ubicacion.caribe.resorts.3.title')}}</div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.3.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.3.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.caribe.resorts.3.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.3.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
    @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.4.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.4.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }     
        $total=__('beach-resorts.ubicacion.caribe.resorts.4.stars') 
    @endphp

      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">{{__('beach-resorts.ubicacion.caribe.resorts.4.title')}}</div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.4.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.4.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.caribe.resorts.4.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.4.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>

      @php
        if(Agent::isMobile() && !Agent::isTablet()){
          $img1= asset("img/mobile/resorts/".__('beach-resorts.ubicacion.caribe.resorts.5.img').".jpg");
          $img ="background-image: url('".$img1."');";
        }else{
          $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.5.img')."-b.jpg");
          $img ="background-image: url('".$img1."');";
        }      
        $total=__('beach-resorts.ubicacion.caribe.resorts.5.stars') 
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-blue2 av-size-8rem">
            {{__('beach-resorts.ubicacion.caribe.resorts.5.title')}}
          </div>
          <div class="row no-gutters w-100">
          	@if(__('beach-resorts.ubicacion.caribe.resorts.5.label')!='')
            <a class="bold av-white"  href="#">{{__('beach-resorts.ubicacion.caribe.resorts.5.label')}}</a>
            @endif
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('beach-resorts.ubicacion.caribe.resorts.5.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{__('beach-resorts.ubicacion.caribe.resorts.5.url')}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      
    </div>
  </div>

  <!--
  <div class="row no-gutters py-5">
    <div class="row no-gutters subinterna">
      <div class="col d-none d-md-block"></div>
      <div class="col-md-10 col-12">
        <div class="row no-gutters">
          <div class="col-12">
            <h6 class="text-uppercase bold">{{__('beach-resorts.subtitle2')}}</h6>
          </div>
        </div>
        <div class="row no-gutters">
          {!!__('beach-resorts.description2')!!}
        </div>
      </div>
      <div class="col d-none d-md-block"></div>
    </div>
  </div>
-->
</section>
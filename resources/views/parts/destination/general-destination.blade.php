@php
	$can= __('destinations/cancun.block_image');
	$cur= __('destinations/curacao.block_image');
	$pla= __('destinations/playa-del-carmen.block_image');
	$pue= __('destinations/puerto-morelos.block_image');
	$pun= __('destinations/punta-cana.block_image');
	$riv= __('destinations/riviera-maya.block_image');
	$stm= __('destinations/st-maarten.block_image');
@endphp

@section('title', __('beach-destinations.seo.title'))
@section('metadescription', __('beach-destinations.seo.metadescription'))

<section class="pt-2">

  <div class="container subinterna">
    <div class="row no-gutters py-4">
      <div class="col d-none d-md-block"></div>
      <div class="col-12 col-md-10 px-0">
        <h1 class="text-left py-4 av-blue ">{{__('beach-destinations.title')}}</h1>
        {!!__('beach-destinations.content')!!}
      </div>
      <div class="col d-none d-md-block"></div>
    </div>
  </div>

  <div class="row no-gutters">
    <div class="col-12 p-0">
      <div class="row no-gutters">
        <ul class="nav nav-pills nav-justified align-items-center container w-60 av-destination-new-tabs p-0" id="pills-tab" role="tablist">
          <li class="nav-item d-flex align-items-center justify-content-center">
            <a class="nav-link medium w-100 active" id="pills-mexican-tab" data-toggle="pill" href="#pills-mexican" role="tab" aria-controls="pills-mexican" aria-selected="true">
              {{__('beach-destinations.zones.0.title')}}
            </a>
          </li>
          <li class="nav-item d-flex align-items-center justify-content-center">
            <a class="nav-link medium w-100 " id="pills-caribbean-tab" data-toggle="pill" href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">
              {{__('beach-destinations.zones.1.title')}}
            </a>
          </li>
        </ul>
      </div> 

      <div class="tab-content" id="pills-destination-page">
        <div class="tab-pane fade show active" id="pills-mexican" role="tabpanel" aria-labelledby="pills-mexican-tab">
          <div class="row no-gutters py-custom-5">
            <div class="container text-justify">
              <div class="row no-gutters">
                <div class="col d-none d-md-block"></div>
                <div class="col-12 col-md-10 subinterna">
                  <p class="text-justify"> 
                    {{__('beach-destinations.zones.0.description')}}
                  </p>
                </div>
                <div class="col d-none d-md-block"></div>
              </div>
            </div>
          </div>
          <div class="row no-gutters" >
            <div class="col-12 col-md-3 p-0" id="holi" >
              <a class="no-decoration" data-toggle="collapse" href="#resort-cancun" role="button" aria-expanded="false" aria-controls="resort-cancun">
                <div class="img-tabs d-flex align-items-end item" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-cancun.jpg':'img/beach-destination-cancun.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/cancun.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-cancun" ></div>

            <div class="col-12 col-md-3 p-0" >
              <a class="no-decoration" data-toggle="collapse" href="#resort-carmen" role="button" aria-expanded="false" aria-controls="resort-carmen">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-playa-del-carmen.jpg':'img/beach-destination-playa-del-carmen.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/playa-del-carmen.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-carmen" ></div>

            <div class="col-12 col-md-3 p-0" >
              <a class="no-decoration" data-toggle="collapse" href="#resort-morelos" role="button" aria-expanded="false" aria-controls="resort-morelos">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-puerto-morelos.jpg':'img/beach-destination-puerto-morelos.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/puerto-morelos.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-morelos" ></div>

            <div class="col-12 col-md-3 p-0" >
              <a class="no-decoration" data-toggle="collapse" href="#resort-maya" role="button" aria-expanded="false" aria-controls="resort-maya">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-riviera-maya.jpg':'img/beach-destination-riviera-maya.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/riviera-maya.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-maya" ></div>
          </div>
        </div>
        <div class="tab-pane fade " id="pills-caribbean" role="tabpanel" aria-labelledby="pills-caribbean-tab">
          <div class="row no-gutters py-custom-5">
            <div class="container">
              <div class="row no-gutters">
                <div class="col d-none d-md-block"></div>
                <div class="col-12 col-md-10 subinterna">
                  <p class="text-justify">  {{__('beach-destinations.zones.1.description')}}
                  </p>
                </div>
                <div class="col d-none d-md-block"></div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-12 col-md-4 p-0">
              <a class="no-decoration" data-toggle="collapse" href="#resort-cana" role="button" aria-expanded="false" aria-controls="resort-cana">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-punta-cana.jpg':'img/beach-destination-punta-cana.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/punta-cana.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-cana"></div>
            <div class="col-12 col-md-4 p-0">
              <a class="no-decoration" data-toggle="collapse" href="#resort-curacao" role="button" aria-expanded="false" aria-controls="resort-curacao">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-curacao.jpg':'img/beach-destination-curacao.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/curacao.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-curacao"></div>
            <div class="col-12 col-md-4 p-0" >
              <a class="no-decoration" data-toggle="collapse" href="#resort-marteen" role="button" aria-expanded="false" aria-controls="resort-marteen">
                <div class="img-tabs d-flex align-items-end" style="background-image: url({{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-st-maarten.jpg':'img/beach-destination-st-maarten.jpg')}});">
                  <div class="row no-gutters">
                    <div class="w-100 px-4 pt-2">
                      <h5>{{ __('destinations/st-maarten.title') }}</h5>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div id="aqui-marteen"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-cancun" >
    <div class="col-12 px-0 ">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$can}}); ">
        </div>
        <div class="col-12 col-lg-6 ">
          <div class="row no-gutters px-3 py-5 ">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10">
              <h3 class="bold pb-3 av-blue">{{ __('destinations/cancun.title') }}</h3>
              {!! __('destinations/cancun.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/cancun.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/cancun.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/cancun.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-carmen" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$pla}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/playa-del-carmen.title') !!}</h3>
              {!! __('destinations/playa-del-carmen.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/playa-del-carmen.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/playa-del-carmen.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/playa-del-carmen.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-morelos" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$pue}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/puerto-morelos.title') !!}</h3>
              {!! __('destinations/puerto-morelos.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/puerto-morelos.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/puerto-morelos.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/puerto-morelos.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-maya" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$riv}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/riviera-maya.title') !!}</h3>
              {!! __('destinations/riviera-maya.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/riviera-maya.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/riviera-maya.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/riviera-maya.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-cana" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$pun}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/punta-cana.title') !!}</h3>
              {!! __('destinations/punta-cana.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/punta-cana.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/punta-cana.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/punta-cana.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-curacao" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$cur}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/curacao.title') !!}</h3>
              {!! __('destinations/curacao.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/curacao.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/curacao.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/curacao.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row no-gutters collapse" id="resort-marteen" >
    <div class="col-12 px-0">
      <div class="row no-gutters">
        <div class="d-none d-lg-block col-lg-6 av-bg-image-destination" style="background-image: url({{$stm}});">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row no-gutters px-3 py-5">
            <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-10 av-blue">
              <h3 class="bold pb-3">{!! __('destinations/st-maarten.title') !!}</h3>
              {!! __('destinations/st-maarten.description') !!}
            </div>
            <div class="col d-none d-md-block"></div>
            <div class="col-12 d-flex justify-content-center pt-5 buttons-destination">
              <a class="av-btn bg-blue mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/st-maarten.slug')}}" >{!! __('general.view_more')!!}</a>
              <a class="av-btn av-bg-yellow mr-2 mt-2 text-uppercase p-2" href="{{ __('destinations/st-maarten.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
              <a class="av-btn av-bg-skyblue mt-2 text-uppercase p-2" href="{{ __('destinations/st-maarten.url_offers')}}">{!! __('general.lb_special')!!}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
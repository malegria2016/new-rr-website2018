@php 
 $resorts=count(__('destinations/'.$destino.'.resorts'))
@endphp

<section class="container py-4">
  <div class="row no-gutters resort-destination">
    <div class="col-12 text-center">
      <h2 class="pb-4 av-blue medium text-uppercase">Resorts</h2>
    </div>
  </div>

  <div class="row">
    @if($resorts==1)
    @php 
      $img_temp_0 = __('destinations/'.$destino.'.resorts.0.slug');
      if(Agent::isMobile() && !Agent::isTablet()){ $img0=asset('img/mobile/resorts/'.$img_temp_0.'.jpg');}
      else{ $img0=__('destinations/'.$destino.'.resorts.0.img');}
    @endphp

    <div class="col-12 col-md-6 col-lg-12 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
        <div class="row no-gutters w-100 resort-tile-big" style="background-image: url('{{ $img0 }}');">
          <div class="resort-tile-title bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.0.name') }}
          </div>
        </div>
      </a>
    </div>
    @endif

    @if($resorts==2)
    @php 
      $img_temp_0 = __('destinations/'.$destino.'.resorts.0.slug');
      $img_temp_1 = __('destinations/'.$destino.'.resorts.1.slug');
      if(Agent::isMobile() && !Agent::isTablet()){ 
        $img0=asset('img/mobile/resorts/'.$img_temp_0.'.jpg');
        $img1=asset('img/mobile/resorts/'.$img_temp_1.'.jpg');
      }
      else{ 
        $img0=__('destinations/'.$destino.'.resorts.0.img');
        $img1=__('destinations/'.$destino.'.resorts.1.img');
      }
    @endphp
    <div class="col-12 col-md-6 col-lg-6 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
        <div class="row no-gutters w-100 resort-tile-big" style="background-image: url('{{ $img0 }}');">
          <div class="resort-tile-title bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.0.name') }}
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-6 col-lg-6 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
        <div class="row no-gutters w-100 resort-tile-big" style="background-image: url('{{ $img1 }}');">
          <div class="resort-tile-title bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.1.name') }}
          </div>
        </div>
      </a>
    </div>
    @endif

    @if($resorts==3)
    @php 
      $img_temp_0 = __('destinations/'.$destino.'.resorts.0.slug');
      $img_temp_1 = __('destinations/'.$destino.'.resorts.1.slug');
      $img_temp_2 = __('destinations/'.$destino.'.resorts.2.slug');
      if(Agent::isMobile() && !Agent::isTablet()){ 
        $img0=asset('img/mobile/resorts/'.$img_temp_0.'.jpg');
        $img1=asset('img/mobile/resorts/'.$img_temp_1.'.jpg');
        $img2=asset('img/mobile/resorts/'.$img_temp_2.'.jpg');
      }
      else{ 
        $img0=__('destinations/'.$destino.'.resorts.0.img');
        $img1=__('destinations/'.$destino.'.resorts.1.img');
        $img2=__('destinations/'.$destino.'.resorts.2.img');
      }
    @endphp

    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
        <div class="row no-gutters w-100 resort-tile-big" style="background-image: url('{{ $img0 }}');">
          <div class="resort-tile-title bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.0.name') }}
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
        <div class="row no-gutters w-100  resort-tile-big" style="background-image: url('{{ $img1 }}');">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.1.name') }}
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.2.url')) }}">
        <div class="row no-gutters w-100  resort-tile-big" style="background-image: url('{{ $img2 }}');">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.2.name') }}
          </div>
        </div>
      </a>
    </div>
    @endif



    @if($resorts==4)
    @php 
      $img_temp_0 = __('destinations/'.$destino.'.resorts.0.slug');
      $img_temp_1 = __('destinations/'.$destino.'.resorts.1.slug');
      $img_temp_2 = __('destinations/'.$destino.'.resorts.2.slug');
      $img_temp_3 = __('destinations/'.$destino.'.resorts.3.slug');
      if(Agent::isMobile() && !Agent::isTablet()){ 
        $img0=asset('img/mobile/resorts/'.$img_temp_0.'.jpg');
        $img1=asset('img/mobile/resorts/'.$img_temp_1.'.jpg');
        $img2=asset('img/mobile/resorts/'.$img_temp_2.'.jpg');
        $img3=asset('img/mobile/resorts/'.$img_temp_3.'.jpg');
      }
      else{ 
        $img0=__('destinations/'.$destino.'.resorts.0.img');
        $img1=__('destinations/'.$destino.'.resorts.1.img');
        $img2=__('destinations/'.$destino.'.resorts.2.img');
        $img3=__('destinations/'.$destino.'.resorts.3.img');
      }
    @endphp

    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
        <div class="row no-gutters w-100 resort-tile-big" style="background-image: url('{{ $img0 }}');">
          <div class="resort-tile-title bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.0.name') }}
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
        <div class="row no-gutters w-100  resort-tile-big" style="background-image: url('{{ $img1 }}');">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.1.name') }}
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-12 col-lg-4">
      <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.2.url')) }}">
        <div class="row no-gutters d-flex resort-tile-small" style="background-image: url('{{ $img2 }}');">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.2.name') }}
          </div>
        </div>
      </a>
      <a href="{{ lang_url(__('destinations/'.$destino.'.resorts.3.url')) }}">
        <div class="row no-gutters d-flex resort-tile-small" style="background-image: url('{{ $img3 }}');">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{ __('destinations/'.$destino.'.resorts.3.name') }}
          </div>
        </div>
      </a>
    </div>
    @endif
  </div>
</section>
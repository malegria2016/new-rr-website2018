<section class="container-fluid lazy">
  <div class="row">
    <div class="col-12 p-0">
      <div class="text-center mt-5">
        <h2 class="section-title txt-blue txt-light">{{ __('beach-destinations.title') }}</h2>
      </div>
    </div>
    <div class="col-12 px-0">
      @php
        $zones = __('beach-destinations.zones', []);
      @endphp
      <ul class="nav nav-pills nav-justified align-items-center av-style-tabs" id="pills-tab" role="tablist">
        @foreach($zones as $zone)
          @php
            $tid = str_slug( array_get($zone, 'title') );
          @endphp
          <li class="nav-item d-flex align-items-center justify-content-center">
            <a class="nav-link{{ $loop->index == 0 ? ' active' : '' }}" id="{{ $tid }}-tab" data-toggle="pill" href="#{{ $tid }}" role="tab" aria-controls="{{ $tid }}" aria-selected="{{ $loop->index == 0 ? 'true' : 'false' }}">
              <span class="text-uppercase">{{ array_get($zone, 'title') }}</span>
            </a>
          </li>
        @endforeach
      </ul>
      <div class="tab-content" id="pills-destination">
        @foreach($zones as $zone)
          @php
            $tid = str_slug( array_get($zone, 'title') );
            $destinations = array_get($zone, 'destinations', []);
          @endphp
          <div class="tab-pane fade{{ $loop->index == 0 ? ' show active' : '' }}" id="{{ $tid }}" role="tabpanel" aria-labelledby="{{ $tid }}-tab">
            <div class="row no-gutters">
              @foreach($destinations as $destination)
                @php
                  $size = round(12 / $loop->count);
                @endphp
                <div class="col-12 col-md-{{ $size }}">
                  <div class="img-tabs lazy" style="background-image:url('{{ array_get($destination, 'thumbnail') }}')">
                    <div class="animacion-img">
                      <div class="px-4 pt-2">
                        <h5>{{ array_get($destination, 'title') }}</h5>
                        <p class="mb-0 text-justify">
                          {{ array_get($destination, 'excerpt') }}
                        </p>
                        <div class="row espacio">
                          <div class="col-12">&nbsp; </div>
                        </div>
                      </div>
                    </div>
                    <div class="view-more" >
                      <a class="pr-2 text-uppercase text-white" href="{{ array_get($destination, "slug") }}">{{ __('general.view_more') }}</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
      
    <div class="col-12 text-right mt-5 pr-2 pr-lg-5 mb-4">
      <a class="av-subrayado-yellow medium mr-md-1 mr-0" href="{{ lang_url("/".__('routes.beach_destinations')) }}">{{ __('general.view_all') }}</a>
    </div>
    <div class="col-1"></div>
  </div>
</section>
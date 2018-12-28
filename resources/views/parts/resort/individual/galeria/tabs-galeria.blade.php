@php
    $total_photos= count( __('resorts/'.$resort.'/gallery.gallery') );
@endphp
<section class="container galeria-section">
  <!--
  <ul class="tabs-galeria-slick tabs-galeria pl-0 ml-0 mb-1">
    <li class="nav-item d-flex justify-content-center">
      <a class="nav-link" >
        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/icono-galeria.svg')}}" alt="" width="25px" >
        <span class="d-none d-md-inline-block">{{__('general.lb_photos')}}</span>
      </a>
    </li>

    <li class="nav-item d-flex justify-content-center">
      <a class="nav-link" >
        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/icono-video.svg')}}" alt="" width="25px" ><span class="d-none d-md-inline-block">{{__('general.lb_video')}}</span>
      </a>
    </li>

    <li class="nav-item d-flex justify-content-center">
      <a class="nav-link">
        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/tour_virtual.svg')}}" alt="" width="25px" ><span class="d-none d-md-inline-block">{{__('general.lb_virtual_tour')}}</span>
      </a>
    </li>
  </ul>
-->
  <div class="content-galleria-slick" >
    <div>
      <div class="row pt-1 section-gallery-gallery" >
        <div class="col-md-9 col-12 mb-1 pr-md-0" >
          <ul class="gallery-gallery pl-0 mb-0" id="gallery-gallery" >
            @for($i=0;$i<$total_photos;$i++)
             @php 
              $category = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.category');
              $img = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.img');
             @endphp
            <li class="{{$category}}-gallery-full"><!--d-none-->
              <img class="w-100  d-md-block" src="{{asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/resorts/'.$resort.'/big-gallery/'.$img : 'img/resorts/'.$resort.'/big-gallery/'.$img)}}" title="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}" alt="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}" {{(Agent::isMobile() && !Agent::isTablet())? '' :'width=\"917\" height=\"475px\"' }}/>
            </li>
            @endfor
          </ul>
        </div>
        <div class="col-md-3 col-12 pl-md-0">
          <ul id="gallery-buttons">
            <li ><button value="all" class="text-left w-100 active" href="#">{{__('general.all')}}</button></li>
            <li ><button value="room" class="text-left w-100" href="#">{{__('general.booking.label.rooms')}}</button></li>
            <li ><button value="areas" class="text-left w-100" href="#">{{__('general.lb_open_areas')}}</button></li>
            <li ><button value="dinning" class="text-left w-100" href="#">{{__('general.lb_dining')}}</button></li>
            <li ><button value="activities" class="text-left w-100" href="#">{{__('general.lb_activities')}}</button></li>
          </ul>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-12 d-none d-md-block">
          <ul class="gallery-gallery-nav pl-0 mx-3" id="gallery-gallery-nav">
            @for($i=0;$i<$total_photos;$i++)
              @php 
              $category = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.category');
              $img = __('resorts/'.$resort.'/gallery.gallery.'.$i.'.img');
              @endphp
              <li class="{{$category}}-gallery" >
               <img class="w-100" src="{{asset('img/resorts/'.$resort.'/small-gallery/'.$img)}}" title="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}" alt="{{__('resorts/'.$resort.'/gallery.gallery.'.$i.'.alt')}}" width="214" height="112" />
              </li>
            @endfor
          </ul>
        </div>
      </div>
    </div>
    <!--

    <div class="row no-gutters" >

      <iframe width="100%" height="600px" src="https://www.youtube.com/embed/YqyYenoVADU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>

    <div class="row no-gutters" >

      <iframe width="100%" height="600px" src="https://www.youtube.com/embed/YqyYenoVADU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>

  -->

    <div class="row no-gutters" ></div>
    <div class="row no-gutters" ></div>
  </div>
</section>
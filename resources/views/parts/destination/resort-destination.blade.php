@php
	$title= __('destinations/resorts/'.$destino.'.title');
	$contenido= __('destinations/resorts/'.$destino.'.content');
	$total_resorts = count( __('destinations/'.$destino.'.resorts'));
@endphp

@section('title', __('destinations/resorts/'.$destino.'.seo.title'))
@section('metadescription', __('destinations/resorts/'.$destino.'.seo.metadescription'))

<section id="type-of-trips-section" class="pt-2 subinterna type-of-trips-section">
	<div class="container type-of-t">
		<div class="row no-gutters pt-4 ">
			<div class="col d-none d-md-block"></div>
			<div class="col-12 col-md-10">
				<h1 class="text-left text-uppercase py-4 av-blue font-size-1point5-tablet font-size-1point2-movil">
					 {{ $title }}
				</h1>
				<p class=" text-justify">{!! $contenido !!}</p>
			</div>
			<div class="col d-none d-md-block"></div>
		</div>
	</div>
</section>

<section class="container py-2">
<div class="row no-gutters pt-4">
  <div id="resort-mexican" class="show-resort">	
    <div class="row no-gutters element-royal">
      @if($total_resorts>=1)
      @php 
      	 $img_name= __('destinations/'.$destino.'.resorts.0.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.0.stars');
         $url=__('destinations/'.$destino.'.resorts.0.url');
      @endphp
      <div class="col-md-4 col-1md-2 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow">{{__('destinations/'.$destino.'.resorts.0.title')}}</div>
          <div class="row no-gutters w-100">
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.0.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{ url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif

      @if($total_resorts>=2)
      @php 
      	 $img_name= __('destinations/'.$destino.'.resorts.1.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.1.stars');
         $url=__('destinations/'.$destino.'.resorts.1.url');
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow">{{__('destinations/'.$destino.'.resorts.1.title')}}</div>
          <div class="row no-gutters w-100">
            <!--a class="bold av-white"  href="#">All Inclusive Avaliable</a-->
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.1.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif

      @if($total_resorts>=3)
      @php
      	 $img_name= __('destinations/'.$destino.'.resorts.2.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.2.stars');
         $url=__('destinations/'.$destino.'.resorts.2.url');
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow">
            {{__('destinations/'.$destino.'.resorts.2.title')}}
          </div>
          <div class="row no-gutters w-100">
            <!--a class="bold av-white"  href="#">All Inclusive Avaliable</a-->
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.2.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif
    </div>
    <!-- fin linea 1 de 3 elementos-->
    <div class="row no-gutters element-royal">
      @if($total_resorts>=4)
      @php 
      	 $img_name= __('destinations/'.$destino.'.resorts.3.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.3.stars');
         $url=__('destinations/'.$destino.'.resorts.3.url');
      @endphp
      <div class="col-md-4 col-1md-2 col-12 d-flex align-items-end movil-mb-300" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters movil-mb-250">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow" >{{__('destinations/'.$destino.'.resorts.3.title')}}</div>
          <div class="row no-gutters w-100">
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.3.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif

      @if($total_resorts>=5)
      @php 
      	 $img_name= __('destinations/'.$destino.'.resorts.4.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.4.stars');
         $url=__('destinations/'.$destino.'.resorts.4.url');
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow" >{{__('destinations/'.$destino.'.resorts.4.title')}}</div>
          <div class="row no-gutters w-100">
            <!--a class="bold av-white"  href="#">All Inclusive Avaliable</a-->
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.4.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif

      @if($total_resorts>=6)
      @php
      	 $img_name= __('destinations/'.$destino.'.resorts.5.slug')."-b.jpg";
      	 $img_url=asset('img/resorts/'.$img_name);
      	 $img="background-image: url('".$img_url."');"; 
         $total=__('beach-resorts.ubicacion.mexico.resorts.5.stars');
         $url= __('destinations/'.$destino.'.resorts.5.url');
      @endphp
      <div class="col-md-4 col-12 d-flex align-items-end" style="{{$img}} background-repeat: no-repeat;">
        <div class="row no-gutters">
          <div class="bold pl-3 py-2 av-white av-size-8rem shadow">
            {{__('destinations/'.$destino.'.resorts.5.title')}}
          </div>
          <div class="row no-gutters w-100">
            <!--a class="bold av-white"  href="#">All Inclusive Avaliable</a-->
            <div class="pl-3 estrellas-resort">
              @for($i=0;$i<$total;$i++)
              <input id="radio1" type="radio" name="estrellas" value="5">
              <label for="radio1" >★</label>
              @endfor
            </div>
          </div>
          <p class="px-3 av-white av-size-8rem text-justify" >{{__('destinations/'.$destino.'.resorts.5.description')}}</p>
          <a class="w-100 av-white av-btn-yellow av-size-8rem"  href="{{url($url)}}" >{{ __('general.view_more') }}</a>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
</section>
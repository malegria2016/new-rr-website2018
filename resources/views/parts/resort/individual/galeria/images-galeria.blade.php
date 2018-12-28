@php
    $total_resorts= count( __('resorts/'.$resort.'/gallery.resorts') );
@endphp
<section class="container gallery-resorts" >
  <div class="row no-gutters pt-5 pb-2">
    <h2 class="pb-2 av-blue bold text-uppercase" style="font-size: 1.5rem;">
        {{__('resorts/'.$resort.'/gallery.resorts_title')}}
    </h2>
  </div>
  <div class="row no-gutters">
    @for($i=0;$i<$total_resorts;$i++)
     @php
      $img_temp= __('resorts/'.$resort.'/gallery.resorts.'.$i.'.img');
      $img =(Agent::isMobile())? asset('img/mobile/resorts'.$img_temp) : asset('img/resorts'.$img_temp);
     @endphp
    <div class="col-md-4 col-sm-6 col-12">
      <div class="row no-gutters d-flex resort-tile-small gallary-img mx-2 mt-3" style="background-image: url('{{$img}}');">
        <a href="{{ lang_url(__('resorts/'.$resort.'/gallery.resorts.'.$i.'.url')) }}">
          <div class="resort-tile-title  bold bg-blue text-white pl-3">
            {{__('resorts/'.$resort.'/gallery.resorts.'.$i.'.name')}}
          </div>
        </a>
      </div>
    </div>      
    @endfor
  </div>
</section>
<br/><br/>
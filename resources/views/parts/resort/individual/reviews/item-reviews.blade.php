@php
$total_reviews = count( __('resorts/'.$resort.'/reviews.reviews') ); 
@endphp
<!--  'yellow' => true -->
@for($i=0;$i<$total_reviews;$i++)
@php $yellow = $i== 0 ? true : false; @endphp
<section class="review-item {{$class = $yellow  ? 'av-bg-yellow' : '' }}" >
  <div class="container reviews-element">
    <div class="py-4 " >
      <div class="item">
        <div class="row no-gutters">
          <div class="col-md-4 col-12 d-flex align-items-center justify-content-center flex-column">
            <img class="lazy img-reviews" src="{{ asset('/img/user-icon.png')}}" style="" >
            <p class="title-review av-blue bold">{{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.person.name')}}</p>
            <span class="{{$class = $yellow ? 'av-blue' : 'av-skyblue'}}  font-italic">{{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.date')}}</span>
            <span class="av-blue mt-2 tag-reviews" style="" >{{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.label')}}</span>
          </div>
          <div class="col-md-8 col-12 d-flex align-items-center justify-content-center pt-3 pt-md-0 flex-column">
            
            <p class="title-review av-blue bold">{{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.title')}}</p>
            <p class="content-reviews {{$class = $yellow ? 'av-blue' : 'av-text-gray'}} text-justify">
              <span class="av-blue" style="font-size: 2em; line-height: 0;" >"</span>
              {{__('resorts/'.$resort.'/reviews.reviews.'.$i.'.content')}}
              <span class="av-blue" style="font-size: 2em; line-height: 0;" >"</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endfor
<br><br>
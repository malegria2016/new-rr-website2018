@php 
 $resorts=count(__('webcams.resorts'))
@endphp
<section class="container">
  <div class="images-webcams pb-6">    
    <div class="row no-gutters">
      @for($i=0;$i<$resorts;$i++) 
      <div class="col-md-4 col-sm-6 col-12 " data-toggle="modal" data-target="#modalWebcams{{$i}}">
        <div class="w-100 img-web d-flex align-items-end" style="background-image: url({{__('webcams.resorts.'.$i.'.slug')}});"  >
          <div class="row no-gutters w-100 section-blue">
            <div class="col-12 pt-2 px-3 bold " style="" >
              {{__('webcams.resorts.'.$i.'.name')}}
            </div>
          </div>
        </div>
      </div>
      @endfor
    </div>
    <!-- Modal -->
    @for($j=0;$j<$resorts;$j++)
    <div class="modal fade modal-webcams" id="modalWebcams{{$j}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="">
          <div class="modal-header" style="">
            <div class="w-100 text-center">
              <h5 class="modal-title av-white  text-uppercase" id="exampleModalLongTitle">{{__('webcams.resorts.'.$j.'.name')}}</h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="">
            <img class="img-fluid" src="{{__('webcams.resorts.'.$j.'.webcam_url')}}" alt="12">
          </div>
          <div class="pt-2 text-center modal-bottom-text" style="" >
            <!--<a class="text-uppercase bold" href="{{__('webcams.resorts.'.$j.'.offer_url')}}">{{__('webcams.resorts.'.$j.'.offer_name')}}</a>-->
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>
</section>
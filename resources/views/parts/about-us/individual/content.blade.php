@section('title', __('about-us/'.$area.'.seo.title'))
@section('metadescription', __('about-us/'.$area.'.seo.metadescription'))
<section class="container py-2">
  <div class="row no-gutters subinterna pb-4">
    <div class="col d-none d-md-block"></div>
    <div class="col-12 col-md-10 px-0">
      <h1 class="text-left text-uppercase py-4 av-blue2">{{__('about-us/'.$area.'.title')}}</h1>
      {!! __('about-us/'.$area.'.content') !!}
    </div>
    <div class="col d-none d-md-block"></div>
  </div>
</section>
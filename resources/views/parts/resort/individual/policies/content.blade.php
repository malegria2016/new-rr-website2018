@section('title', __('resorts/'.$resort.'/policies.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/policies.seo.metadescription'))

<section class="container py-2">
  <div class="row no-gutters subinterna pb-4">
    <div class="col d-none d-md-block"></div>
    <div class="col-12 col-md-10 px-0">
      <h1 class="text-left text-uppercase py-4 av-blue2">{{ __('resorts/'.$resort.'/policies.title') }}</h1>
      {!! __('resorts/'.$resort.'/policies.content') !!}
    </div>
    <div class="col d-none d-md-block"></div>
  </div>
</section>
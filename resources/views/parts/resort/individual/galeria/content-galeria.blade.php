@section('title', __('resorts/'.$resort.'/gallery.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/gallery.seo.metadescription'))

<section class="container">
  <div class="row py-5 mtop-10">
    <div class="col-12">
      <h1 class="pb-2 av-blue bold text-uppercase" style="font-size: 1.5rem;">{{__('resorts/'.$resort.'/gallery.title')}}</h1>
      <p class="justify av-parrafo">{!!__('resorts/'.$resort.'/gallery.content')!!}</p>
    </div>
  </div>
</section>
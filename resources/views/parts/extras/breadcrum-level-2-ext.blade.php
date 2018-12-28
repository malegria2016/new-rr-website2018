<section class="pt-2-">
  <div class="row col-12 col-md-12 no-gutters">
      <nav aria-label="breadcrumb" id="bread">
        <ol class="breadcrumb m-0 p-0" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{lang_url("/")}}" itemid="{{lang_url("/")}}">
              <span itemprop="name">Royal Reservations</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <span itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ lang_url('/'.$page) }}" itemid="{{ lang_url('/'.$page) }}">
              <span itemprop="name">{{ __('breadcrumbs.'.$page) }}</span>
            </span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </nav>
  </div>
</section>
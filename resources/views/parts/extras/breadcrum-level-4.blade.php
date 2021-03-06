<section class="container pt-2-">
  <div class="row no-gutters">
      <nav aria-label="breadcrumb" id="bread">
        <ol class="breadcrumb m-0 p-0" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{lang_url("/")}}" itemid="{{lang_url("/")}}">
              <span itemprop="name">Royal Reservations</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ lang_url('/'.__('routes.'.$page)) }}" itemid="{{ lang_url('/'.__('routes.'.$page)) }}">
              <span itemprop="name">{{ __('breadcrumbs.'.$page) }}</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ lang_url('/'.__('routes.'.$page).'/'.$resort.'/'.$rhome) }}" itemid="{{ lang_url('/'.__('routes.'.$page).'/'.$resort.'/'.$rhome) }}">
              <span itemprop="name">{{ __('breadcrumbs.'.$resort) }}</span>
            </a>
            <meta itemprop="position" content="3" />
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
            <span itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ lang_url('/'.__('routes.'.$page).'/'.$resort.'/'.$interna) }}" itemid="{{ lang_url('/'.__('routes.'.$page).'/'.$resort.'/'.$interna) }}">
              <span itemprop="name">{{ __('breadcrumbs.'.$subinterna) }}</span>
            </span>
            <meta itemprop="position" content="4" />
          </li>                  
        </ol>
      </nav>
  </div>
</section>
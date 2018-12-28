<section class="{{(!Agent::isMobile())? 'fixed':''}}">
    <div class="resorts-links-filtro d-flex d-sm-flex d-md-none">
        <div class="combo-box arrow-down">
          <select class="form-control" name="links-resorts" id="links-resorts">
              <option value="0">{{__('general.lb_about')}}</option>
              <option value="1">{{__('general.booking.label.rooms')}}</option>
              <option value="2">{{__('general.lb_room_amenities')}}</option>
              <option value="3">{{__('general.lb_dining_option')}}</option>
              <option value="4">{{__('general.lb_deals')}}</option>
              <option value="5">{{__('general.lb_reviews')}}</option>
              <option value="6">{{__('general.lb_gallery')}}</option>
              <option value="-1" selected="">{{__('general.lb_section')}}</option>
          </select>
        </div>
    </div>

  <div class="bg-dark-gray links-resort d-none d-sm-none d-md-block d-lg-block">
    <div class="container">
      <nav class="nav d-flex flex-wrap justify-content-center align-items-center sub-navigation links-menu-gris" id="menu-gris">
        <a class="nav-link active" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rhome) }}">{{__('general.lb_about')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rooms)}}">{{__('general.booking.label.rooms')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$amenities)}}">{{__('general.lb_room_amenities')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$restaurants)}}">{{__('general.lb_dining_option')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$specials)}}">{{__('general.lb_deals')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$reviews)}}">{{__('general.lb_reviews')}}</a>
        <a class="nav-link" href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$gallery)}}">{{__('general.lb_gallery')}}</a>
      </nav>
    </div>
  </div>
</section>
<br><br>
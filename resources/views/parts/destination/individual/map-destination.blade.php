<section class="container map-destination pb-4">
  <div class="row no-gutters">
	<iframe src="{{ __('destinations/'.$destino.'.map')}}" width="1300" height="383" frameborder="0" style="border:0" allowfullscreen></iframe>			
  </div>

  <div class="row no-gutters d-flex justify-content-center">

    <ul class="nav usefull-information-destination">
      <li class="nav-item d-flex justify-content-center align-items-center pr-md-3 mx-auto mx-md-block">
        <a class="nav-link bold">{{ __('destinations/'.$destino.'.about.self') }}</a>
      </li>

      <li class="nav-item d-flex justify-content-center align-items-center">

        <div class="d-flex d-md-block" >

          <img class="pl-md-3 mx-auto mx-0" style="" src="{{asset('img/icon-wallet.png')}}" alt="wallet">

        </div>

        <a class="nav-link" style="">{{ __('destinations/'.$destino.'.about.uselful.money') }}</a>

      </li>

      <li class="nav-item d-flex justify-content-center align-items-center">

        <div class="d-flex d-md-block" >

          <img class="pl-md-3 mx-auto mx-0" style="" src="{{asset('img/icon-spanish.png')}}" alt="spanish">

        </div>

        <a class="nav-link" style="">{{ __('destinations/'.$destino.'.about.uselful.language') }}</a>

      </li>

      <li class="nav-item d-flex justify-content-center align-items-center">

        <div class="d-flex d-md-block" >

          <img class="pl-md-3 mx-auto mx-0" style="" src="{{asset('img/icon-sunny.png')}}" alt="sunny">

        </div>

        <a class="nav-link" style="">{{ __('destinations/'.$destino.'.about.uselful.weather') }}</a>

      </li>

      <li class="nav-item d-flex justify-content-center align-items-center">

        <div class="d-flex d-md-block" >

          <img class="pl-md-3 mx-auto mx-0" src="{{asset('img/icon-power.png')}}" alt="power">

        </div>

        <a class="nav-link" style="">{{ __('destinations/'.$destino.'.about.uselful.power_socket') }}</a>

      </li>

      <li class="nav-item d-flex justify-content-center align-items-center">

        <div class="d-flex d-md-block" >

          <img class="pl-md-3 mx-auto mx-0" style="" src="{{asset('img/icon-cellphoneservice.png')}}" alt="cell">

        </div>

        <a class="nav-link" style="">{{ __('destinations/'.$destino.'.about.uselful.cell-phone-service') }}</a>

      </li>

    </ul>

  </div>

</section>
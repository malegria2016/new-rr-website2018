@php 

	$total_rates = count(__('specials/'.$slug.'.rates'));

	$resort_id[0]=1;

	$resort_ihotelier[0]=1;

	$tipo[0]=1;

	$contador=0;

	$indice=0;

	$minimo = __('specials/'.$slug.'.minimo_noches');

	$code= __('specials/'.$slug.'.code');



	for($m=0;$m<$total_rates;$m++){

		$total_resorts = count(__('specials/'.$slug.'.rates.'.$m.'.resorts'));



		for($n=0;$n<$total_rates;$n++){

			$resort_id[$n+$contador]=__('specials/'.$slug.'.rates.'.$m.'.resorts.'.$n.'.resort_id');

			$resort_ihotelier[$n+$contador]=__('specials/'.$slug.'.rates.'.$m.'.resorts.'.$n.'.ihotelier_id');

			$tipo[$n+$contador]=__('specials/'.$slug.'.rates.'.$m.'.resorts.'.$n.'.tipo');

		}

		$contador=$contador+$total_resorts;

	}



@endphp



  

<div class="espacio-de-booking">

	<section class="container-fluid booking-interno-section" id="booking-interno">

		<div class="row">

			<div class="w-100">

				<div class="container booking-interno-container">

					<ul class="nav nav-tabs" role="tablist">

						<li class="nav-item" style="width: 99%;">

							<a class="nav-link show d-flex pr-0 " id="hotel-tab" data-toggle="pill" href="#je-hotels" role="tab" aria-controls="pills-hotel" aria-selected="false" style="background-color:#fdb319 !important;" ><span class="tabtitulo"> {{ __('general.booking.btn.hotel') }}</span>

								<div class="iconos-booking it-hotel"></div>

							</a>

						</li>

					</ul>

					<div class="contenedor-tabs">

						<div class="tab-content">

							<form class='booking' action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank">

								@if($tipo[0]==1)<input type="hidden" name="RatePlanID" id="RatePlanID" value="">@endif

								@if($tipo[0]==2)<input type="hidden" name="packageId" id="packageId" value="">@endif

								@if($code!='')<input type="hidden" name="identifier" value="{{$code}}">@endif

							<div id="je-hotels" class="tab-pane active">

								<div class="je-tab-content yellow">

									<div class="booking-interno-inputs">

										<p class="center booking-title-movil text-white">{{ __('general.booking.btn.hotel') }}</p>

										<label for="resort">{{ __('general.booking.label.like_to_go') }}</label>

										<select class="form-control combo" name="hotelId" id="hotelId" onchange="changeResort();">

												@if(in_array(86169,$resort_id) || in_array(86182,$resort_id) || in_array(86175,$resort_id) || in_array(73601,$resort_id))

												<optgroup label="{{ __('header.menu.beach_destinations.cancun') }}">

													@if(in_array(86169,$resort_id))

													@php $indice = array_search(86169,$resort_id,false); @endphp

													<option value="86169" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Sands Resort & Spa All Inclusive</option>

													@endif

													@if(in_array(86182,$resort_id))

													@php $indice = array_search(86182,$resort_id,false); @endphp

													<option value="86182" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Islander All Suites Resort</option>

													@endif

													@if(in_array(86175,$resort_id))

													@php $indice = array_search(86175,$resort_id,false); @endphp

													<option value="86175" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Caribbean All Suites Resort</option>

													@endif

													@if(in_array(73601,$resort_id))

													@php $indice = array_search(73601,$resort_id,false); @endphp

													<option value="73601" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Cancun All Suites  Resort</option>

													@endif

												</optgroup>

												@endif

												@if(in_array(95939,$resort_id))

												@php $indice = array_search(95939,$resort_id,false); @endphp

												<optgroup label="Riviera Maya">

													<option value="95939" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">Grand Residences Riviera Cancun Resort</option>

												</optgroup>

												@endif

												@if(in_array(86184,$resort_id))

												@php $indice = array_search(86184,$resort_id,false); @endphp

												<optgroup label="Playa del Carmen">

													<option value="86184" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Haciendas All Suites Resort & Spa</option>

												</optgroup>

												@endif

												@if(in_array(86180,$resort_id) || in_array(86179,$resort_id))

												<optgroup label="Sint Maarten">

													@if(in_array(86180,$resort_id))

													@php $indice = array_search(86180,$resort_id,false); @endphp

													<option value="86180" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Villas at Simpson Bay Beach Resort & Marina</option>

													@endif

													@if(in_array(86179,$resort_id))

													@php $indice = array_search(86179,$resort_id,false); @endphp

													<option value="86179" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">Simpson Bay Beach Resort & Marina</option>

													@endif

												</optgroup>

												@endif

												@if(in_array(86181,$resort_id))

												@php $indice = array_search(86181,$resort_id,false); @endphp

												<optgroup label="Curacao">

													<option value="86181" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">The Royal Sea Aquarium Resort</option>

												</optgroup>

												@endif

												@if(in_array(103541,$resort_id) || in_array(85285,$resort_id) || in_array(86117,$resort_id) || in_array(106514,$resort_id))

												<optgroup label="Punta Cana">

													@if(in_array(85285,$resort_id))

													@php $indice = array_search(85285,$resort_id,false); @endphp

													<option value="85285" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">Ancora Punta Cana Private Residence Yacht Club</option>

													@endif

													@if(in_array(86117,$resort_id))

													@php $indice = array_search(86117,$resort_id,false); @endphp

													<option value="86117" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">Del Mar Ocean Front Resort by Joy Resorts</option>

													@endif

													@if(in_array(106514,$resort_id))

													@php $indice = array_search(106514,$resort_id,false); @endphp

													<option value="106514" id="{{$resort_ihotelier[$indice]}}" name="{{$minimo}}">Casa de Campo Resort and Villas Punta Cana</option>

													@endif

												</optgroup>

												@endif

											

										</select>

									</div>

									<div class="booking-interno-inputs">

										<label>{{ __('general.booking.label.check_in') }}</label>

										<div class="input-group date" data-provide="datepicker" id="deals1">

											<input type="text" class="form-control" id="datein" name="datein" placeholder="{{ __('general.booking.placeholder.arrival_date') }}">

											<div class="input-group-addon">

												<span class="icono-calendario"></span>

											</div>

										</div>

									</div>

									<div class="booking-interno-inputs">

										<label>{{ __('general.booking.label.check_out') }}</label>

										<div class="input-group date" data-provide="datepicker" id="deals2">

											<input type="text" id="dateout" name="dateout" class="form-control" placeholder="{{ __('general.booking.placeholder.departure_date') }}">

											<div class="input-group-addon">

												<span class="icono-calendario"></span>

											</div>

										</div>

									</div>



									<div class="booking-interno-inputs">

										<div class="combo-box arrow-down">

											<label>{{ __('general.booking.label.rooms') }}</label>

											<select class="form-control" name="rooms">

									            <option value="1">1</option>

									            <option value="2">2</option>

									            <option value="3">3</option>

									            <option value="4">4</option>

									            <option value="5">5</option>

									        </select>

										</div>

									</div>									



									<div class="booking-interno-inputs">

										<div class="combo-box arrow-down">

											<label id="spAdults">{{ __('general.booking.label.adults') }}</label>

							                  <select class="form-control" name="adults" id="adults">

							                    <option value="1">1</option>

							                    <option value="2" selected>2</option>

							                    <option value="3">3</option>

							                    <option value="4">4</option>

							                    <option value="5">5</option>

							                    <option value="6">6</option>

							                    <option value="7">7</option>

							                    <option value="8">8</option>

							                    <option value="9">9</option>

							                    <option value="10">10</option>

							                  </select>

										</div>

									</div>

								

									<div class="booking-interno-inputs">

										<div class="combo-box arrow-down">

											<label id="spChildren">{{ __('general.booking.label.children') }}</label>

							                  <select class="form-control" name="children" id="children">

							                    <option value="0">0</option>

							                    <option value="1">1</option>

							                    <option value="2">2</option>

							                    <option value="3">3</option>

							                    <option value="4">4</option>

							                    <option value="5">5</option>

							                  </select>

										</div>

									</div>



									<div class="booking-interno-inputs">

							            <div class="combo-box arrow-down" id="teenBox">

							              <label id="spTeen">{{ __('general.booking.label.teen') }}</label>

							              <select class="form-control" name="children2" id="children2">

							                <option value="0">0</option>

							                <option value="1">1</option>

							                <option value="2">2</option>

							                <option value="3">3</option>

							                <option value="4">4</option>

							                <option value="5">5</option> 

							              </select>

							            </div>

									</div>	



								</div>



							</div>

							

							

						</div><!--tab-content -->


						<input type="hidden" name="_ga" id="_ga" value="">


						@if (App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif



						<div class="boton-booking-now">

							<button type="submit" class="my-4 text-uppercase button-form-book bold fsmall" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>

						</div>

						</form>



					</div><!--contenedor-tabs-->

				</div><!--class="container booking-interno-container"-->

			</div> <!--class="w-100"-->

		</div> <!-- class="row" -->

	</section>

</div>





  <input type="hidden" name="tag_adult"     id="tag_adult"     value="{{ __('general.booking.label.adults') }}">

  <input type="hidden" name="tag_adult2"    id="tag_adult2"    value="{{ __('general.booking.label.adults1') }}">

  <input type="hidden" name="tag_adult3"    id="tag_adult3"    value="{{ __('general.booking.label.adults2') }}">

  <input type="hidden" name="tag_teen"      id="tag_teen"      value="{{ __('general.booking.label.teen') }}">

  <input type="hidden" name="tag_children"  id="tag_children"  value="{{ __('general.booking.label.children') }}">

  <input type="hidden" name="tag_children2" id="tag_children2" value="{{ __('general.booking.label.children1') }}">



<script type="text/javascript">



function changeResort(resort){ //oculto casillas de edades, cambio etiquetas de edad del form principal de landing oferta

  var tag_adult  = $('#tag_adult').val();

  var tag_adult2 = $('#tag_adult2').val();

  var tag_adult3 = $('#tag_adult3').val();

  var tag_teen  = $('#tag_teen').val();

  var tag_children = $('#tag_children').val();

  var tag_children2 = $('#tag_children2').val();



  if(resort==undefined){

    var resort = document.getElementById("hotelId").value;

  }



  var ihotelier = $('select option:selected').attr('id');



  if (resort=='95939' || resort=='86182' || resort=='86175' || resort=='106514'){

    $("#children2").val(0);

    $('#teenBox').hide();

    $("#spAdults").text(tag_adult2);

    $("#spChildren").text(tag_children);

    $("#RatePlanID").val(ihotelier);

    $("#packageId").val(ihotelier);

  }else{

	  if (resort=='86184' || resort=='86169' || resort=='73601' || resort=='86179' || resort=='86180' || resort=='86181'){

	    $('#teenBox').show();

	    $("#spAdults").text(tag_adult);

	    $("#spChildren").text(tag_teen);

	    $("#spTeen").text(tag_children);

	    $("#RatePlanID").val(ihotelier);

    	$("#packageId").val(ihotelier);

	  }else{

	  	  if (resort=='85285' || resort=='86117' || resort=='103541'){

		    $("#children2").val(0);

		    $('#teenBox').hide();

		    $("#spAdults").text(tag_adult3);

		    $("#spChildren").text(tag_children2);

		    $("#RatePlanID").val(ihotelier);

		    $("#packageId").val(ihotelier);		    

		  } 

	  }

  }

 

}



	



</script>
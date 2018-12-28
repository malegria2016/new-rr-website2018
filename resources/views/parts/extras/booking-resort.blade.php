<div class="espacio-de-booking fixed" style="z-index: 3">
	<section class="container-fluid booking-interno-section" id="booking-interno">
		<div class="row">
			<div class="w-100">
				@php
					$destino=__('resorts-booking.'.$resort.'.destination');
					$id=__('resorts-booking.'.$resort.'.ihotelier');
					$rh=__('resorts-booking.'.$resort.'.reservhotel');
					$name=__('resorts-booking.'.$resort.'.name');
					$ad= __('resorts-booking.'.$resort.'.ad');
					$ch= __('resorts-booking.'.$resort.'.ch');
					$te= __('resorts-booking.'.$resort.'.te');
				@endphp
				<div class="container booking-interno-container">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item" style="{{ $rh!=0?'width: 50%':'width: 99%' }};">
							<a class="nav-link show d-flex pr-0" id="hotel-tab" data-toggle="pill" href="#je-hotels" role="tab" aria-controls="pills-hotel" aria-selected="false" style="background-color:#fdb319 !important;"><span class="tabtitulo"> {{ __('general.booking.btn.hotel') }}</span>
								<div class="iconos-booking it-hotel"></div>
							</a>
						</li>
						<li class="nav-item" style="{{ $rh!=0?'width: 49%':'display:none' }};">
							<a class="nav-link pr-0 d-flex" id="hotel-flight-tab" data-toggle="pill" href="#je-hotels-fly" role="tab" aria-controls="pills-hotel-flight" aria-selected="false"><span class="tabtitulo">{{ __('general.booking.btn.hotel_flight') }} </span>
								<div class="iconos-booking it-hotel-fly"></div>
							</a>
						</li>						
					</ul>
					<div class="contenedor-tabs">
						<div class="tab-content">
							<div id="je-hotels" class="tab-pane active">
								<form id="form-modal" action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank">
								<div class="je-tab-content yellow">
									<div class="booking-interno-inputs">
										<p class="center booking-title-movil text-white">{{ __('general.booking.btn.hotel') }}</p>
										<label for="destination">{{ __('general.booking.label.like_to_go') }}</label>
										<select class="form-control combo" name="hotelId" id="hotelId">
											<optgroup label="{{$destino}}">
											<option value="{{$id}}">{{$name}}</option>
											</optgroup>
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
											<input type="text" class="form-control" id="dateout" name="dateout" placeholder="{{ __('general.booking.placeholder.departure_date') }}">
											<div class="input-group-addon">
												<span class="icono-calendario"></span>
											</div>
										</div>
									</div>

									<div class="booking-interno-inputs">
										<div class="combo-box arrow-down">
											<label for="room"> {{ __('general.booking.label.rooms') }}</label>
											<select class="form-control" name="rooms">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
											</select>
										</div>
									</div>

									<div class="booking-interno-inputs">
										<div class="combo-box arrow-down">
											<label id="spAdults">{{ $ad }}</label>
											<select class="form-control" name="adults">
												<option value="1">1</option>
												<option value="2">2</option>
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
											<label id="spChildren">{{ $te }}</label>
											<select class="form-control" name="children">
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
										@if($ch!='-')
										<div class="combo-box arrow-down" id="teenBox">
											<label id="spTeen">{{ $ch }}</label>
											<select class="form-control" name="children2">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										@endif
									</div>
								</div>
								
								@if(App::getLocale() == 'es')<input type="hidden" name="languageid" id="languageid" value="2">@endif
								<input type="hidden" name="_ga" id="_ga" value="">

								<div class="boton-booking-now" style="float: right;">
									<button type="submit" class="my-4 text-uppercase button-form-book bold fsmall" style="font-size: small;" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
								</div>
								</form>
							</div>

							<div id="je-hotels-fly" class="tab-pane fade">
							<form name="booking_engine_form_rh" id="booking_engine_form" action="" onsubmit="return validaForm();" target="_blank">
								<div class="je-tab-content sky-blue">
									<div class="booking-interno-inputs w50">
										<p class="center booking-title-movil text-white">{{ __('general.booking.btn.hotel_flight') }}</p>
										<label for="resort">{{ __('general.booking.label.like_to_go') }}</label>
										<select class="form-control combo" name="hotel" id="hotel" onChange="changeResortFlight($rh);cleanMsg();">
											<optgroup label="{{$destino}}">
											<option value="{{$rh}}" selected>{{$name}}</option>
											</optgroup>
										</select>
									</div>
									<div class="booking-interno-inputs w23">
						                <label for="country">{{ __('general.departure_country') }}:</label>
						                <select id="countries" onChange="javascript:getAirports();" class="form-control combo">
						                    <option value="AI">Anguilla</option>
						                    <option value="AG">Antigua And Barbuda</option>
						                    <option value="AR">Argentina</option>
						                    <option value="AW">Aruba</option>
						                    <option value="AU">Australia</option>
						                    <option value="AT">Austria</option>
						                    <option value="BS">Bahamas</option>
						                    <option value="BB">Barbados</option>
						                    <option value="BE">Belgium</option>
						                    <option value="BZ">Belize</option>
						                    <option value="BM">Bermuda</option>
						                    <option value="BO">Bolivia</option>
						                    <option value="BQ">Bonaire St Eustatius And Saba</option>
						                    <option value="BR">Brazil</option>
						                    <option value="VG">British Virgin Islands</option>
						                    <option value="CA">Canada</option>
						                    <option value="KY">Cayman Islands</option>
						                    <option value="CL">Chile</option>
						                    <option value="CO">Colombia</option>
						                    <option value="CR">Costa Rica</option>
						                    <option value="HR">Croatia</option>
						                    <option value="CW">Curacao</option>
						                    <option value="CZ">Czech Republic</option>
						                    <option value="DK">Denmark</option>
						                    <option value="DM">Dominica</option>
						                    <option value="DO">Dominican Republic</option>
						                    <option value="EC">Ecuador</option>
						                    <option value="EE">Estonia</option>
						                    <option value="FI">Finland</option>
						                    <option value="FR">France</option>
						                    <option value="DE">Germany</option>
						                    <option value="GR">Greece</option>
						                    <option value="HN">Honduras</option>
						                    <option value="HU">Hungary</option>
						                    <option value="IS">Iceland</option>
						                    <option value="ID">Indonesia</option>
						                    <option value="IL">Israel</option>
						                    <option value="IT">Italy</option>
						                    <option value="JM">Jamaica</option>
						                    <option value="JP">Japan</option>
						                    <option value="LI">Liechtenstein</option>
						                    <option value="LU">Luxembourg</option>
						                    <option value="MV">Maldives</option>
						                    <option value="MT">Malta</option>
						                    <option value="MQ">Martinique</option>
						                    <option value="MX">Mexico</option>
						                    <option value="MC">Monaco</option>
						                    <option value="ME">Montenegro</option>
						                    <option value="MS">Montserrat</option>
						                    <option value="NL">Netherlands</option>
						                    <option value="NZ">New Zealand</option>
						                    <option value="NI">Nicaragua</option>
						                    <option value="NO">Norway</option>
						                    <option value="PA">Panama</option>
						                    <option value="PY">Paraguay</option>
						                    <option value="PE">Peru</option>
						                    <option value="PH">Philippines</option>
						                    <option value="PL">Poland</option>
						                    <option value="PT">Portugal</option>
						                    <option value="PR">Puerto Rico</option>
						                    <option value="IE">Republic Of Ireland</option>
						                    <option value="KR">Republic Of Korea</option>
						                    <option value="RO">Romania</option>
						                    <option value="LC">Santa Lucia</option>
						                    <option value="ST">Scotland</option>
						                    <option value="SG">Singapore</option>
						                    <option value="SI">Slovenia</option>
						                    <option value="ZA">South Africa</option>
						                    <option value="ES">Spain</option>
						                    <option value="SX">St Maarten</option>
						                    <option value="KN">St. Kitts And Nevis</option>
						                    <option value="VC">St. Vincent And Grenadines</option>
						                    <option value="SE">Sweden</option>
						                    <option value="CH">Switzerland</option>
						                    <option value="TH">Thailand</option>
						                    <option value="TT">Trinidad And Tobago</option>
						                    <option value="TR">Turkey</option>
						                    <option value="TC">Turks And Caicos Islands</option>
						                    <option value="UM">U.S. Minor Outlying Islands</option>
						                    <option value="AE">United Arab Emirates</option>
						                    <option value="GB">United Kingdom</option>
						                    <option value="US" selected>United States</option>
						                    <option value="UY">Uruguay</option>
						                    <option value="VI">Us Virgin Islands</option>
						                    <option value="VE">Venezuela</option>
						                </select>
						            </div>
						            <div class="booking-interno-inputs w23">
						            	<label for="country">{{ __('general.departure_city') }}:</label>
						            	<div id="airport_list">
						                <select id="airport" name="airport" class="form-control combo" onchange="cleanMsg();">
						                    <option value="" selected>{{ __('general.departure_city') }}</option>
						                    <option value="ALB">Albany, Ny [ALB]</option>
						                    <option value="ABQ">Albuquerque, Nm [ABQ]</option>
						                    <option value="ABE">Allentown, Pa [ABE]</option>
						                    <option value="AMA">Amarillo, Tx [AMA]</option>
						                    <option value="ANC">Anchorage, Ak [ANC]</option>
						                    <option value="AQP">Appleton, Mn [AQP]</option>
						                    <option value="ACV">Arcata, Ca [ACV]</option>
						                    <option value="AVL">Asheville, Nc [AVL]</option>
						                    <option value="ASE">Aspen, Co [ASE]</option>
						                    <option value="ATL">Atlanta, Ga [ATL]</option>
						                    <option value="ACY">Atlantic City, Nj [ACY]</option>
						                    <option value="AUS">Austin, Tx [AUS]</option>
						                    <option value="BWI">Baltimore, Md [BWI]</option>
						                    <option value="BGR">Bangor, Me [BGR]</option>
						                    <option value="BPT">Beaumont, Tx [BPT]</option>
						                    <option value="BET">Bethel, Ak [BET]</option>
						                    <option value="BIL">Billings, Mt [BIL]</option>
						                    <option value="BGM">Binghamton, Ny [BGM]</option>
						                    <option value="BHM">Birmingham, Al [BHM]</option>
						                    <option value="BIS">Bismarck, Nd [BIS]</option>
						                    <option value="BMI">Bloomington, Il [BMI]</option>
						                    <option value="BOI">Boise, Id [BOI]</option>
						                    <option value="BOS">Boston, Ma [BOS]</option>
						                    <option value="BRO">Brownsville, Tx [BRO]</option>
						                    <option value="BQK">Brunswick, Ga [BQK]</option>
						                    <option value="BUF">Buffalo, Ny [BUF]</option>
						                    <option value="BUR">Burbank, Ca [BUR]</option>
						                    <option value="BTV">Burlington, Vt [BTV]</option>
						                    <option value="YYC">Calgary [YYC]</option>
						                    <option value="CID">Cedar Rapids, Ia [CID]</option>
						                    <option value="CHS">Charleston, Sc [CHS]</option>
						                    <option value="CRW">Charleston, Wv [CRW]</option>
						                    <option value="CLT">Charlotte, Nc [CLT]</option>
						                    <option value="CHO">Charlottesville, Va [CHO]</option>
						                    <option value="MDW">Chicago (Midway), Il [MDW]</option>
						                    <option value="ORD">Chicago (O'Hare), Il [ORD]</option>
						                    <option value="CVG">Cincinnati, Oh [CVG]</option>
						                    <option value="CLE">Cleveland, Oh [CLE]</option>
						                    <option value="CLL">College Station, Tx [CLL]</option>
						                    <option value="COS">Colorado Springs, Co [COS]</option>
						                    <option value="COU">Columbia, Mo [COU]</option>
						                    <option value="CAE">Columbia, Sc [CAE]</option>
						                    <option value="CMH">Columbus, Oh [CMH]</option>
						                    <option value="CDV">Cordova, Ak [CDV]</option>
						                    <option value="CRP">Corpus Christi, Tx [CRP]</option>
						                    <option value="DAL">Dallas Love Field, Tx [DAL]</option>
						                    <option value="DFW">Dallas/Fort Worth, Tx [DFW]</option>
						                    <option value="DAY">Dayton, Oh [DAY]</option>
						                    <option value="DEN">Denver, Co [DEN]</option>
						                    <option value="DSM">Des Moines, Ia [DSM]</option>
						                    <option value="DTW">Detroit, Mi [DTW]</option>
						                    <option value="DLH">Duluth, Mn [DLH]</option>
						                    <option value="DRO">Durango, Co [DRO]</option>
						                    <option value="YEG">Edmonton Intntl [YEG]</option>
						                    <option value="CID">Eastern Iowa, Ia [CID]</option>
						                    <option value="ELP">El Paso, Tx [ELP]</option>
						                    <option value="ERI">Erie, Pa [ERI]</option>
						                    <option value="EUG">Eugene, Or [EUG]</option>
						                    <option value="EKA">Eureka, Ca [EKA]</option>
						                    <option value="FAI">Fairbanks, Ak [FAI]</option>
						                    <option value="FAR">Fargo, Nd [FAR]</option>
						                    <option value="FNT">Flint, Mi [FNT]</option>
						                    <option value="FAT">Fresno, Ca [FAT]</option>
						                    <option value="FLL">Ft. Lauderdale, Fl [FLL]</option>
						                    <option value="RSW">Ft. Myers, Fl [RSW]</option>
						                    <option value="VPS">Ft. Walton/Okaloosa [VPS]</option>
						                    <option value="FWA">Ft. Wayne, In [FWA]</option>
						                    <option value="GNV">Gainesville, Fl [GNV]</option>
						                    <option value="GFK">Grand Forks, Nd [GFK]</option>
						                    <option value="GRR">Grand Rapids, Mi [GRR]</option>
						                    <option value="GTF">Great Falls, Mt [GTF]</option>
						                    <option value="GRB">Green Bay, Wi [GRB]</option>
						                    <option value="GSO">Greensboro, Nc [GSO]</option>
						                    <option value="GSP">Greenville, Sc [GSP]</option>
						                    <option value="GPT">Gulfport, Ms [GPT]</option>
						                    <option value="YHZ">Halifax Intntl [YHZ]</option>
						                    <option value="HRL">Harlingen [HRL]</option>
						                    <option value="MDT">Harrisburg, Pa [MDT]</option>
						                    <option value="BDL">Hartford, Ct [BDL]</option>
						                    <option value="HLN">Helena, Mt [HLN]</option>
						                    <option value="ITO">Hilo, Hi [ITO]</option>
						                    <option value="HHH">Hilton Head, Sc [HHH]</option>
						                    <option value="HNL">Honolulu, Hi [HNL]</option>
						                    <option value="HOU">Houston Hobby, Tx [HOU]</option>
						                    <option value="IAH">Houston Busch, Tx [IAH]</option>
						                    <option value="HTS">Huntington, Wv [HTS]</option>
						                    <option value="HSV">Huntsville Intl, Al [HSV]</option>
						                    <option value="IDA">Idaho Falls, Id [IDA]</option>
						                    <option value="IND">Indianapolis, In [IND]</option>
						                    <option value="ISP">Islip, Ny [ISP]</option>
						                    <option value="ITH">Ithaca, Ny [ITH]</option>
						                    <option value="JAC">Jackson Hole, Wy [JAC]</option>
						                    <option value="JAN">Jackson Int'L, Ms [JAN]</option>
						                    <option value="JAX">Jacksonville, Fl [JAX]</option>
						                    <option value="JNU">Juneau, Ak [JNU]</option>
						                    <option value="OGG">Kahului, Hi [OGG]</option>
						                    <option value="MCI">Kansas City, Mo [MCI]</option>
						                    <option value="JHM">Kapalua, Hi [JHM]</option>
						                    <option value="LIH">Kauai, Hi [LIH]</option>
						                    <option value="EYW">Key West, Fl [EYW]</option>
						                    <option value="TYS">Knoxville, Tn [TYS]</option>
						                    <option value="KOA">Kona, Hi [KOA]</option>
						                    <option value="LNY">Lanai, Hi [LNY]</option>
						                    <option value="LAN">Lansing, Mi [LAN]</option>
						                    <option value="LAS">Las Vegas, Nv [LAS]</option>
						                    <option value="LEX">Lexington, Ky [LEX]</option>
						                    <option value="LNK">Lincoln, Ne [LNK]</option>
						                    <option value="LIT">Little Rock, Ar [LIT]</option>
						                    <option value="LGB">Long Beach, Ca [LGB]</option>
						                    <option value="LAX">Los Angeles, Ca [LAX]</option>
						                    <option value="SDF">Louisville, Ky [SDF]</option>
						                    <option value="LBB">Lubbock, Tx [LBB]</option>
						                    <option value="LYH">Lynchburg, Va [LYH]</option>
						                    <option value="YMX">Montreal Mirabel [YMX]</option>
						                    <option value="YUL">Montreal Trudeau [YUL]</option>
						                    <option value="MSN">Madison, Wi [MSN]</option>
						                    <option value="MHT">Manchester, Nh [MHT]</option>
						                    <option value="OGG">Maui, Hi [OGG]</option>
						                    <option value="MFE">Mcallen, Tx [MFE]</option>
						                    <option value="MFR">Medford, Or [MFR]</option>
						                    <option value="MLB">Melbourne, Fl [MLB]</option>
						                    <option value="MEM">Memphis, Tn [MEM]</option>
						                    <option value="MIA">Miami, Fl [MIA]</option>
						                    <option value="MAF">Midland/Odessa, Tx [MAF]</option>
						                    <option value="MKE">Milwaukee, Wi [MKE]</option>
						                    <option value="MSP">Minneapolis/St. Paul [MSP]</option>
						                    <option value="MSO">Missoula, Mt [MSO]</option>
						                    <option value="MOB">Mobile Regional, Al [MOB]</option>
						                    <option value="MKK">Molokai, Hi [MKK]</option>
						                    <option value="MRY">Monterey, Ca [MRY]</option>
						                    <option value="MGM">Montgomery, Al [MGM]</option>
						                    <option value="MYR">Myrtle Beach, Sc [MYR]</option>
						                    <option value="APF">Naples, Fl [APF]</option>
						                    <option value="BNA">Nashville, Tn [BNA]</option>
						                    <option value="BAZ">New Braunfels, Tx [BAZ]</option>
						                    <option value="MSY">New Orleans, La [MSY]</option>
						                    <option value="JFK">New York Kennedy, Ny [JFK]</option>
						                    <option value="LGA">New York Laguardia [LGA]</option>
						                    <option value="EWR">Newark, Nj [EWR]</option>
						                    <option value="ORF">Norfolk, Va [ORF]</option>
						                    <option value="YOW">Ottawa Mcdonald [YOW]</option>
						                    <option value="OAK">Oakland, Ca [OAK]</option>
						                    <option value="OKC">Oklahoma City, Ok [OKC]</option>
						                    <option value="OMA">Omaha, Ne [OMA]</option>
						                    <option value="ONT">Ontario, Ca [ONT]</option>
						                    <option value="SNA">Orange County, Ca [SNA]</option>
						                    <option value="MCO">Orlando, Fl [MCO]</option>
						                    <option value="PSP">Palm Springs, Ca [PSP]</option>
						                    <option value="PFN">Panama City, Fl [PFN]</option>
						                    <option value="PNS">Pensacola, Fl [PNS]</option>
						                    <option value="PIA">Peoria, Il [PIA]</option>
						                    <option value="PHL">Philadelphia, Pa [PHL]</option>
						                    <option value="PHX">Phoenix, Az [PHX]</option>
						                    <option value="PIT">Pittsburgh, Pa [PIT]</option>
						                    <option value="CLM">Port Angeles, Wa [CLM]</option>
						                    <option value="PDX">Portland Intl, Or [PDX]</option>
						                    <option value="PWM">Portland, Me [PWM]</option>
						                    <option value="PVD">Providence, Ri [PVD]</option>
						                    <option value="YQB">Quebec Intntl [YQB]</option>
						                    <option value="RDU">Raleigh/Durham, Nc [RDU]</option>
						                    <option value="RAP">Rapid City, Sd [RAP]</option>
						                    <option value="RDM">Redmond, Or [RDM]</option>
						                    <option value="RNO">Reno, Nv [RNO]</option>
						                    <option value="RIC">Richmond, Va [RIC]</option>
						                    <option value="ROA">Roanoke, Va [ROA]</option>
						                    <option value="ROC">Rochester, Ny [ROC]</option>
						                    <option value="RFD">Rockford, Il [RFD]</option>
						                    <option value="SMF">Sacramento, Ca [SMF]</option>
						                    <option value="MBS">Saginaw, Mi [MBS]</option>
						                    <option value="SLE">Salem, Or [SLE]</option>
						                    <option value="SLC">Salt Lake City, Ut [SLC]</option>
						                    <option value="SAT">San Antonio, Tx [SAT]</option>
						                    <option value="SAN">San Diego, Ca [SAN]</option>
						                    <option value="SFO">San Francisco, Ca [SFO]</option>
						                    <option value="SJC">San Jose, Ca [SJC]</option>
						                    <option value="SBA">Santa Barbara, Ca [SBA]</option>
						                    <option value="STS">Santa Rosa, Ca [STS]</option>
						                    <option value="SRQ">Sarasota/Bradenton [SRQ]</option>
						                    <option value="SAV">Savannah, Ga [SAV]</option>
						                    <option value="SEA">Seattle/Tacoma, Wa [SEA]</option>
						                    <option value="SHV">Shreveport, La [SHV]</option>
						                    <option value="SUX">Sioux City, Ia [SUX]</option>
						                    <option value="FSD">Sioux Falls, Sd [FSD]</option>
						                    <option value="GEG">Spokane, Wa [GEG]</option>
						                    <option value="SPI">Springfield, Il [SPI]</option>
						                    <option value="SGF">Springfield, Mo [SGF]</option>
						                    <option value="STL">St. Louis, Mo [STL]</option>
						                    <option value="PIE">St. Petersburg, Fl [PIE]</option>
						                    <option value="SYR">Syracuse, Ny [SYR]</option>
						                    <option value="YYZ">Toronto Pearson [YYZ]</option>
						                    <option value="TLH">Tallahassee, Fl [TLH]</option>
						                    <option value="TPA">Tampa, Fl [TPA]</option>
						                    <option value="TVC">Traverse City, Mi [TVC]</option>
						                    <option value="TUS">Tucson, Az [TUS]</option>
						                    <option value="TUL">Tulsa, Ok [TUL]</option>
						                    <option value="YVR">Vancouver Intntl [YVR]</option>
						                    <option value="YYJ">Victoria Intntl [YYJ]</option>
						                    <option value="YWG">Winnipeg Intntl [YWG]</option>
						                    <option value="DCA">Washington Natl, Dc [DCA]</option>
						                    <option value="IAD">Washington/Dulles, Dc [IAD]</option>
						                    <option value="EAT">Wenatchee, Wa [EAT]</option>
						                    <option value="PBI">West Palm Beach, Fl [PBI]</option>
						                    <option value="HPN">White Plains, Ny [HPN]</option>
						                    <option value="ICT">Wichita, Ks [ICT]</option>
						                    <option value="AVP">Wilkes-Barre/Scranton [AVP]</option>
						                </select>
						            	</div>
						              
						            </div>
									<div class="booking-interno-inputs w24">
										<label>{{ __('general.booking.label.check_in') }}</label>
										<div class="input-group date" data-provide="datepicker" id="checkin-flight">
											<input type="text" class="form-control"  name="aDate" placeholder="{{ __('general.booking.placeholder.arrival_date') }}">
											<div class="input-group-addon">
												<span class="icono-calendario"></span>
											</div>
										</div>
									</div>
									<div class="booking-interno-inputs w24">
										<label>{{ __('general.booking.label.check_out') }}</label>
										<div class="input-group date" data-provide="datepicker" id="checkout-flight">
											<input type="text" class="form-control" name="dDate" placeholder="{{ __('general.booking.placeholder.departure_date') }}">
											<div class="input-group-addon">
												<span class="icono-calendario"></span>
											</div>
										</div>
									</div>
									<div class="booking-interno-inputs w13">
										<div class="combo-box arrow-down">
											<label for="room">{{ __('general.booking.label.rooms') }}</label>
											<select class="form-control" name="rooms">
												<option value="1">1</option>
											</select>
										</div>
									</div>
									<div class="booking-interno-inputs w15">
										<div class="combo-box arrow-down">
											<label id="spAdultsB">{{ __('general.booking.label.adults') }}</label>
											<select class="form-control" name="adults">
													<option value="1">1</option>
													<option value="2" selected>2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
											</select>
										</div>
									</div>
									<div class="booking-interno-inputs w15">
										<div class="combo-box arrow-down">
											<label id="spChildrenB">{{ __('general.booking.label.children2') }}</label>
											<select class="form-control" name="child">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
											</select>
										</div>
									</div>
								</div>
								<input type="hidden" name="date_format" id="date_format" value="MM/DD/YYYY">
								<input type="hidden" name="aff" id="aff" value="ROYAL_RESERVATIONS">
								@if (App::getLocale() == 'es')<input type="hidden" name="lang" id="lang" value="2">@endif
								
								<div class="boton-booking-now" style="float: right;">
									<button type="submit" class="my-4 text-uppercase button-form-book bold fsmall" style="font-size: small;" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
								</div>

							</form>

				  <input type="hidden" name="tag_adult" id="tag_adult-" value="{{ __('general.booking.label.adults') }}">
	              <input type="hidden" name="tag_adult2" id="tag_adult2-" value="{{ __('general.booking.label.adults1') }}">
	              <input type="hidden" name="tag_adult3" id="tag_adult3-" value="{{ __('general.booking.label.adults2') }}">
	              <input type="hidden" name="tag_teen" id="tag_teen-" value="{{ __('general.booking.label.children2') }}">
	              <input type="hidden" name="tag_children" id="tag_children-" value="{{ __('general.booking.label.children') }}">
	              <input type="hidden" name="tag_children22" id="tag_children22" value="{{ __('general.booking.label.children2') }}">							
							
							</div><!--end panel hotel + flight-->

								
						</div>

						</form>
					</div>
					<div class="alert-danger" id="resort_msg" style="display:none; padding: 10px;width: 99%;"></div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
  var resort= {{$rh}} ;
  var request = null;
  function createRequest() {
    try {request = new XMLHttpRequest();} catch (trymicrosoft) {
      try {request = new ActiveXObject("Msxml2.XMLHTTP");} catch (othermicrosoft) {
        try {request = new ActiveXObject("Microsoft.XMLHTTP");}catch (failed) {
           request = null;}}}
    if (request == null){alert("Error creating request object!  Your browser does not support AJAX.  Please update it to use this site.")};
  }
  function getAirports(){
    createRequest();
    var url = "https://royalreservations.com/reservhotel_countries/"+document.getElementById("countries").value+".html";
    if (request == null){
      document.write("Asynchronous Request Failed");
    }else{
      request.open("GET", url, true);
      request.onreadystatechange = function(){
        if (request.readyState == 4){
          document.getElementById("airport_list").innerHTML=request.responseText;
          
        }
      };
      request.send(null);
    }
  }
  function selectHotel(hotel){
    if (hotel == "10732"){ document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10732";
    }else if (hotel == "10733") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10733";
    }else if (hotel == "10727") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10727";
    }else if (hotel == "10729") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10729";
    }else if (hotel == "10731") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10731";
    }else if (hotel == "10730") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10730";
    }else if (hotel == "10728") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10728";
    }else if (hotel == "10735") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10735";
    }else if (hotel == "10734") { document.booking_engine_form_rh.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10734";
    }
  }
  function validaForm(){
    var resultado = true;
    var hotel = document.getElementById("hotel").value;
    var airport = document.booking_engine_form_rh.airport.selectedIndex;
    var msg="";

    /*if(hotel<=0){
      if(language=='en'){msg="Please, Select a Resort.";}else{msg="Por favor, Seleccione un Resort."; } 
      resultado = false; document.getElementById('resort_msg').innerHTML=msg;$('#resort_msg').show('8000'); $('#hotel').focus().select();
    }*/
    if(airport<=0){ 
      if(language=='en'){msg="Please, Select a Departure City.";}else{msg="Por favor, Seleccione la Ciudad de Salida."; }
      resultado = false; document.getElementById('resort_msg').innerHTML=msg; $('#resort_msg').show('8000'); $('#airport').focus().select();
    }
    selectHotel(hotel);

    return resultado;
  }
  function cleanMsg(){
    var hotel = document.booking_engine_form_rh.hotel.selectedIndex;
    var airport = document.booking_engine_form_rh.airport.selectedIndex;
    
    if(hotel>0){ $('#resort_msg').hide('8000'); }
    if(airport>0){ $('#resort_msg').hide('8000'); }
     
  }

</script>
@php
$total_destinations = count( __('type-of-trips/'.$trip.'.destinations'));
@endphp
<div  class="container py-4" id="trip-interna">
	<div id="tabs-trip" class="mb-5 pb-4">
		<div class="menu-trip">
			@for($i=0;$i<$total_destinations;$i++)
			<div class="item-trip"><span>{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_tab')}}</span></div>
			@endfor
		</div>
		<div class="content-tabs-trip">
			@for($i=0;$i<$total_destinations;$i++)
			@php  $total_list = count( __('type-of-trips/'.$trip.'.destinations.'.$i.'.list')); @endphp
			<div class="trip-cont">
				<div class="row py-4">
					<div class="col d-none d-md-block"></div>
					<div class="col-12 col-md-10 px-0">
						<h3>{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title')}}</h3>
						<p>{!!__('type-of-trips/'.$trip.'.destinations.'.$i.'.description')!!}</p>
					</div>
					<div class="col d-none d-md-block"></div>
				</div>
				
				<div class="wrapper-trip">
					<div class="submenu-trip py-4 pl-4">
						<div class="item-sub">
							<h4>{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_list')}}</h4>
						</div>
						@for($j=0;$j<$total_list;$j++)
						<div class="item-sub">{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.title')}}</div>
						@endfor
					</div>

					@if(Agent::isMobile())
					<div class="subcontent-trip">
						<div class="subcont"></div>
						@for($j=0;$j<$total_list;$j++)
						@php 
							$img1 = 'img/experiences/'.__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.0.img');
							$img = asset($img1);
						@endphp
						<div class="subcont">
							<div class="subimagen" style="background-image:url({{$img}});  background-position: center;">
								<p></p>
							</div>
						</div>
						@endfor
					</div>
					@endif
				
					@if(!Agent::isMobile())
					<div class="subcontent-trip">
						<div class="subcont"></div>
						@for($j=0;$j<$total_list;$j++)
						@php 
							$img1 = 'img/experiences/'.__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.img');
							$img = asset($img1);
						@endphp
						<div class="subcont">
							<div class="subimagen" style="background-image:url({{$img}});  background-position: center;">
								<p>{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.description')}}</p>
							</div>
						</div>
						@endfor
					</div>
					@endif

					@php 
						$resorts = count (__('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts'));
					@endphp
					<!-- Grid de resorts-->
					<div class="row no-gutters pt-6">
						<div class="col d-none d-md-block"></div>
						<div class="col-12 col-md-10 px-0">
						<h3 class="medium">{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_description_resorts')}}</h3>
						<p>{!!__('type-of-trips/'.$trip.'.destinations.'.$i.'.description_resorts')!!}</p>
						</div>
						<div class="col d-none d-md-block"></div>
					</div>
					<div class="row w-100 no-gutters grid-resorts">
						
						@if($resorts==1)
						@php 
							$dato = __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.0.resort');
							$img = (Agent::isMobile() && !Agent::isTablet()) ? __($dato.'.thumbnails.418x206'):__($dato.'.thumbnails.1110x531');
							$url = __($dato.'.slug');
							$title = __($dato.'.title');
						@endphp
						<div class="col-12 col-md-6 col-lg-12 d-flex">
							<a href="{{$url}}" class="resort-tile-big w-100" style="background-image: url({{$img}});">
								<div class="row no-gutters w-100 ">
									<div class="resort-tile-title bold bg-blue text-white px-3">
										{{ $title}}
									</div>
								</div>
							</a>
						</div>								   
						@endif

						@if($resorts==2)
						@php 
							$dato1 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.0.resort');
							$dato2 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.1.resort');

							$img1 =   (Agent::isMobile() && !Agent::isTablet())? __($dato1.'.thumbnails.418x206'):__($dato1.'.thumbnails.540x526');
							$img2 =   (Agent::isMobile() && !Agent::isTablet())? __($dato2.'.thumbnails.418x206'):__($dato2.'.thumbnails.540x526');

							$url1 =   __($dato1.'.slug');
							$url2 =   __($dato2.'.slug');

							$title1 = __($dato1.'.title');
							$title2 = __($dato2.'.title');
						@endphp
						<div class="col-12 col-md-6 col-lg-6 d-flex" style="padding: 0 2px;">
							<a href="{{$url1}}" class="resort-tile-big w-100" style="background-image: url({{$img1}});">
								<div class="row no-gutters w-100 ">
									<div class="resort-tile-title bold bg-blue text-white px-3">{{ $title1}}</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-6 d-flex" style="padding: 0 2px;">
							<a href="{{$url2}}" class="resort-tile-big w-100" style="background-image: url({{$img2}});">
								<div class="row no-gutters w-100 ">
									<div class="resort-tile-title bold bg-blue text-white px-3">{{ $title2}}</div>
								</div>
							</a>
						</div>
						@endif

						@if($resorts==3)
						@php 
							$dato1 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.0.resort');
							$dato2 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.1.resort');
							$dato3 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.2.resort');

							$img1 =   (Agent::isMobile() && !Agent::isTablet())? __($dato1.'.thumbnails.418x206'):__($dato1.'.thumbnails.435x521');
							$img2 =   (Agent::isMobile() && !Agent::isTablet())? __($dato2.'.thumbnails.418x206'):__($dato2.'.thumbnails.435x521');
							$img3 =   (Agent::isMobile() && !Agent::isTablet())? __($dato3.'.thumbnails.418x206'):__($dato3.'.thumbnails.435x521');

							$url1 =   __($dato1.'.slug');
							$url2 =   __($dato2.'.slug');
							$url3 =   __($dato3.'.slug');

							$title1 = __($dato1.'.title');
							$title2 = __($dato2.'.title');
							$title3 = __($dato3.'.title');
						@endphp
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<a href="{{$url1}}" class="resort-tile-big w-100" style="background-image: url({{$img1}});">
								<div class="row no-gutters w-100 ">
									<div class="resort-tile-title bold bg-blue text-white px-3">{{ $title1}}</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<a href="{{$url2}}" class="resort-tile-big w-100"
								style="background-image: url({{$img2}});">
								<div class="row no-gutters w-100">
									<div class="resort-tile-title  bold bg-blue text-white px-3">{{ $title2}}</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-8 col-lg-4 d-flex f-wrap pr-0">
							<a href="{{$url3}}" class="resort-tile-big w-100"
								style="background-image: url({{$img3}});">
								<div class="row no-gutters w-100">
									<div class="resort-tile-title  bold bg-blue text-white px-3">{{ $title3}}</div>
								</div>
							</a>
						</div>						
						@endif						


						@if($resorts==4)
						@php 
							$dato1 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.0.resort');
							$dato2 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.1.resort');
							$dato3 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.2.resort');
							$dato4 =  __('type-of-trips/'.$trip.'.destinations.'.$i.'.resorts.3.resort');

							$img1 = (Agent::isMobile() && !Agent::isTablet())? __($dato1.'.thumbnails.418x206'):__($dato1.'.thumbnails.435x521');
							$img2 = (Agent::isMobile() && !Agent::isTablet())? __($dato2.'.thumbnails.418x206'):__($dato2.'.thumbnails.435x521');
							$img3 =   __($dato3.'.thumbnails.418x206');
							$img4 =   __($dato4.'.thumbnails.418x206');

							$url1 =   __($dato1.'.slug');
							$url2 =   __($dato2.'.slug');
							$url3 =   __($dato3.'.slug');
							$url4 =   __($dato4.'.slug');

							$title1 = __($dato1.'.title');
							$title2 = __($dato2.'.title');
							$title3 = __($dato3.'.title');
							$title4 = __($dato4.'.title');
						@endphp
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<a href="{{$url1}}" class="resort-tile-big w-100" style="background-image: url({{$img1}});">
								<div class="row no-gutters w-100 ">
									<div class="resort-tile-title bold bg-blue text-white px-3">{{ $title1}}</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<a href="{{$url2}}" class="resort-tile-big w-100"
								style="background-image: url({{$img2}});">
								<div class="row no-gutters w-100">
									<div class="resort-tile-title  bold bg-blue text-white px-3">{{ $title2}}</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-8 col-lg-4 d-flex f-wrap pr-0">
							<a href="{{$url3}}" class="resort-tile-small w-100"
								style="background-image: url({{$img3}});">
								<div class="row no-gutters w-100">
									<div class="resort-tile-title  bold bg-blue text-white px-3">{{ $title3}}</div>
								</div>
							</a>
							<a href="{{$url4}}" class="resort-tile-small w-100"
								style="background-image: url({{$img4}});">
								<div class="row no-gutters d-flex">
								<div class="resort-tile-title  bold bg-blue text-white px-3">{{ $title4}}</div>
								</div>
							</a>
						</div>						
						@endif

					</div>
					<!-- -->

				</div>

			</div><!-- fin trip-->
			@endfor
			

		</div>

	</div>

</div>
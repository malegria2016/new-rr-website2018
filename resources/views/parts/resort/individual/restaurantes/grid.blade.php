@php
$total_restaurants = count( __('resorts/'.$resort.'/restaurants.restaurants') );
$flag=1;
@endphp

<section>
	<div class="container px-2 p-m-0">
		<div class="mosaic-wrapper">		
			<div class="mosaic-first">
				@if($total_restaurants>=1)
				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img1 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.0.image_interna_landing'));
				}else{
					$img1 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.0.image_interna_landing'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img1}}); background-position: center;">
					<div class="info restaurant movil-amenities-info">
						<div class="texto">
							<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.0.name')}} </strong>
							<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.0.food')}}</span>
							<p class="sub-text">
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.0.open')}}</span>
								<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.0.dress_code')}}</span>
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.0.reference')}}</span>
							</p>
						</div>
						
						<div class="logo"><br><br><br><br>
							@if($flag==9)
							<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.0.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.0.name')}}">
							@endif
						</div>
						
					</div>
				</div>
				@endif
				<div class="secundarios">
					@if($total_restaurants>=2)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img2 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.1.image_interna_landing'));
					}else{
						$img2 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.1.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img2}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.1.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.1.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.1.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.1.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.1.reference')}}</span>
								</p>
							</div>
							@if($flag==9)
							<div class="logo">
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.1.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.1.name')}}">
							</div>
							@endif
						</div>
					</div>
					@endif

					@if($total_restaurants>=3)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img3 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.2.image_interna_landing'));
					}else{
						$img3 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.2.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img3}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.2.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.2.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.2.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.2.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.2.reference')}}</span>
								</p>
							</div>
							@if($flag==9)
							<div class="logo">
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.2.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.2.name')}}">
							</div>
							@endif
						</div>
					</div>
					@endif
				</div>
			</div>	<!-- fin mosaic-first -->		

			<div class="mosaic-last">
				@if($total_restaurants==4 || $total_restaurants==5)
					@if(!Agent::isMobile())
					<div class="principal" ></div>
					@endif
				@endif
				@if($total_restaurants>=6)
				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img6 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.5.image_interna_landing'));
				}else{
					$img6 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.5.image_interna_landing'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img6}}); background-position: center;">
					<div class="info restaurant movil-amenities-info">
						<div class="texto">
							<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.5.name')}} </strong>
							<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.5.food')}}</span>
							<p class="sub-text">
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.5.open')}}</span>
								<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.5.dress_code')}}</span>
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.5.reference')}}</span>
							</p>
						</div>
						<div class="logo"><br><br><br>
							@if($flag==9)
							<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.5.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.5.name')}}">
							@endif
						</div>
					</div>
				</div>
				@endif	

				<div class="secundarios">
					@if($total_restaurants>=4)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img4 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.3.image_interna_landing'));
					}else{
						$img4 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.3.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img4}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.3.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.3.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.3.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.3.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.3.reference')}}</span>
								</p>
							</div>
							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.3.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.3.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif

					@if($total_restaurants>=5)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img5 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.4.image_interna_landing'));
					}else{
						$img5 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.4.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img5}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.4.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.4.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.4.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.4.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.4.reference')}}</span>
								</p>
							</div>
							
							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.4.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.4.name')}}">
								@endif
							</div>
							
						</div>
					</div>
					@endif	
				</div>
			</div>	<!-- fin mosaic-first -->		

			<!-- ***** -->
			<div class="mosaic-first">
				@if($total_restaurants>=7)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img7 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.6.image_interna_landing'));
				}else{
					$img7 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.6.image_interna_landing'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img7}}); background-position: center;">
					<div class="info restaurant movil-amenities-info">
						<div class="texto">
							<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.6.name')}} </strong>
							<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.6.food')}}</span>
							<p class="sub-text">
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.6.open')}}</span>
								<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.6.dress_code')}}</span>
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.6.reference')}}</span>
							</p>
						</div>
						<div class="logo"><br><br><br>
							@if($flag==9)
							<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.6.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.6.name')}}">
							@endif
						</div>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_restaurants>=8)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img8 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.7.image_interna_landing'));
					}else{
						$img8 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.7.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img8}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.7.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.7.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.7.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.7.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.7.reference')}}</span>
								</p>
							</div>

							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.7.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.7.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif


					@if($total_restaurants>=9)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img9 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.8.image_interna_landing'));
					}else{
						$img9 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.8.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img9}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.8.name')}}</strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.8.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.8.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.8.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.8.reference')}}</span>
								</p>
							</div>

							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.8.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.8.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>	<!-- fin mosaic-first -->		

			

			<div class="mosaic-last">
				@if($total_restaurants==10 || $total_restaurants==11)
				@if(!Agent::isMobile())
					<div class="principal" ></div>
					@endif
				@endif

				@if($total_restaurants>=12)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img12 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.11.image_interna_landing'));
				}else{
					$img12 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.11.image_interna_landing'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img12}}); background-position: center;">
					<div class="info restaurant movil-amenities-info">
						<div class="texto">
							<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.11.name')}}</strong>
							<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.11.food')}}</span>
							<p class="sub-text">
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.11.open')}}</span>
								<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.11.dress_code')}}</span>
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.11.reference')}}</span>
							</p>
						</div>

						<div class="logo"><br><br><br>
							@if($flag==9)
							<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.11.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.11.name')}}">
							@endif
						</div>
					</div>
				</div>
				@endif					



				<div class="secundarios">
					@if($total_restaurants>=10)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img10 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.9.image_interna_landing'));
					}else{
						$img10 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.9.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img10}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.9.name')}}</strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.9.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.9.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.9.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.9.reference')}}</span>
								</p>
							</div>
							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.9.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.9.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif

					@if($total_restaurants>=11)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img11 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.10.image_interna_landing'));
					}else{
						$img11 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.10.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img11}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.10.name')}}</strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.10.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.10.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.10.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.10.reference')}}</span>
								</p>
							</div>

							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.10.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.10.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif					
				</div>
			</div>	<!-- fin mosaic-first -->		

			<div class="mosaic-first">
				@if($total_restaurants>=13)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img13 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.12.image_interna_landing'));
				}else{
					$img13 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.12.image_interna_landing'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img13}}); background-position: center;">
					<div class="info restaurant movil-amenities-info">
						<div class="texto">
							<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.12.name')}}</strong>
							<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.12.food')}}</span>
							<p class="sub-text">
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.12.open')}}</span>
								<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.12.dress_code')}}</span>
								<span>{{__('resorts/'.$resort.'/restaurants.restaurants.12.reference')}}</span>
							</p>
						</div>
						<div class="logo"><br><br><br>
							@if($flag==9)
							<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.12.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.12.name')}}">
							@endif
						</div>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_restaurants>=14)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img14 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.13.image_interna_landing'));
					}else{
						$img14 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.13.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img14}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.13.name')}}</strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.13.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.13.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.13.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.13.reference')}}</span>
								</p>
							</div>
							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.13.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.13.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif

					@if($total_restaurants>=15)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img15 =asset('img/mobile/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.14.image_interna_landing'));
					}else{
						$img15 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.14.image_interna_landing'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img15}});  background-position: center;">
						<div class="info restaurant movil-amenities-info">
							<div class="texto">
								<strong>{{__('resorts/'.$resort.'/restaurants.restaurants.14.name')}} </strong>
								<span>{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.14.food')}}</span>
								<p class="sub-text">
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.14.open')}}</span>
									<span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.14.dress_code')}}</span>
									<span>{{__('resorts/'.$resort.'/restaurants.restaurants.14.reference')}}</span>
								</p>
							</div>

							<div class="logo">
								@if($flag==9)
								<img src="{{__('resorts/'.$resort.'/restaurants.restaurants.14.logo')}}" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.14.name')}}">
								@endif
							</div>
						</div>
					</div>
					@endif					
				</div>
			</div>	<!-- fin mosaic-first -->		
		</div>
	</div>
</section>
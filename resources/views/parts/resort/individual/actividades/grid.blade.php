@php
$total_amenities = count( __('resorts/'.$resort.'/amenities.amenities') ); 
@endphp

<section>
	<div class="container p-2 p-m-0">
		<div class="mosaic-wrapper">
			<div class="mosaic-first">
				@if($total_amenities>=1)
				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img1 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.0.image'));
				}else{
					$img1 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.0.image'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img1}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.0.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.0.excerpt')!!}</p>
					</div>
				</div>
				@endif
				<div class="secundarios">
					@if($total_amenities>=2)
					
					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img2 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.1.image'));
					}else{
						$img2 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.1.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img2}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.1.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.1.excerpt')!!}</p>
						</div>
					</div>
					@endif

					@if($total_amenities>=3)
					
					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img3 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.2.image'));
					}else{
						$img3 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.2.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img3}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.2.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.2.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>

			</div>

			<div class="mosaic-last">
				@if($total_amenities==4 || $total_amenities==5)
				<div class="principal" ></div>
				@endif

				@if($total_amenities>=6)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img6 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.5.image'));
				}else{
					$img6 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.5.image'));
				}
				@endphp				

				<div class="principal movil-amenities-img" style="background-image:url({{$img6}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.5.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.5.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=4)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img4 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.3.image'));
					}else{
						$img4 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.3.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img4}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.3.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.3.excerpt')!!}</p>
						</div>
					</div>
					@endif

					@if($total_amenities>=5)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img5 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.4.image'));
					}else{
						$img5 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.4.image'));
					}
					@endphp


					<div class="movil-amenities-img" style="background-image:url({{$img5}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.4.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.4.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>

			</div>

		<!--*** -->

			<div class="mosaic-first">
				@if($total_amenities>=7)

				@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img7 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.6.image'));
					}else{
						$img7 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.6.image'));
					}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img7}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.6.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.6.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=8)

					@php 
						if(Agent::isMobile() && !Agent::isTablet()){
							$img8 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.7.image'));
						}else{
							$img8 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.7.image'));
						}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img8}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.7.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.7.excerpt')!!}</p>
						</div>
					</div>

					@endif

					@if($total_amenities>=9)

					@php 
						if(Agent::isMobile() && !Agent::isTablet()){
							$img9 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.8.image'));
						}else{
							$img9 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.8.image'));
						}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img9}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.8.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.8.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>
			</div>



			<div class="mosaic-last">

				@if($total_amenities==10 || $total_amenities==11)
				<div class="principal" ></div>
				@endif
				@if($total_amenities>=12)

				@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img12 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.11.image'));
					}else{
						$img12 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.11.image'));
					}
				@endphp				

				<div class="principal movil-amenities-img" style="background-image:url({{$img12}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.11.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.11.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=10)

					@php 
						if(Agent::isMobile() && !Agent::isTablet()){
							$img10 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.9.image'));
						}else{
							$img10 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.9.image'));
						}
					@endphp	

					<div class="movil-amenities-img" style="background-image:url({{$img10}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.9.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.9.excerpt')!!}</p>
						</div>
					</div>
					@endif

					@if($total_amenities>=11)

					@php 
						if(Agent::isMobile() && !Agent::isTablet()){
							$img11 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.10.image'));
						}else{
							$img11 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.10.image'));
						}
					@endphp	

					<div class="movil-amenities-img" style="background-image:url({{$img11}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.10.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.10.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>
			</div>

		<!--****-->

			<div class="mosaic-first">

				@if($total_amenities>=13)

				@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img13 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.12.image'));
					}else{
						$img13 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.12.image'));
					}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img13}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.12.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.12.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=14)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img14 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.13.image'));
					}else{
						$img14 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.13.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img14}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.13.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.13.excerpt')!!}</p>
						</div>
					</div>
					@endif


					@if($total_amenities>=15)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img15 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.14.image'));
					}else{
						$img15 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.14.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img15}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.14.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.14.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>
			</div>



			<div class="mosaic-last">

				@if($total_amenities==16 || $total_amenities==17)
				<div class="principal" ></div>
				@endif

				@if($total_amenities>=18)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img18 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.17.image'));
				}else{
					$img18 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.17.image'));
				}
				@endphp

				<div class="principal movil-amenities-img" style="background-image:url({{$img18}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.17.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.17.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=16)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img16 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.15.image'));
					}else{
						$img16 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.15.image'));
					}
					@endphp					

					<div class="movil-amenities-img" style="background-image:url({{$img16}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.15.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.15.excerpt')!!}</p>
						</div>
					</div>
					@endif

					@if($total_amenities>=17)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img17 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.16.image'));
					}else{
						$img17 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.16.image'));
					}
					@endphp					

					<div  class="movil-amenities-img" style="background-image:url({{$img17}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.16.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.16.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>

			</div>

		<!--****-->	


			<div class="mosaic-first">
				@if($total_amenities>=19)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img19 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.18.image'));
				}else{
					$img19 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.18.image'));
				}
				@endphp					

				<div class="principal movil-amenities-img" style="background-image:url({{$img19}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.18.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.18.excerpt')!!}</p>
					</div>
				</div>
				@endif

				<div class="secundarios">
					@if($total_amenities>=20)
					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img20 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.19.image'));
					}else{
						$img20 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.19.image'));
					}
					@endphp					

					<div class="movil-amenities-img" style="background-image:url({{$img20}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.19.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.19.excerpt')!!}</p>
						</div>
					</div>
					@endif

					@if($total_amenities>=21)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img21 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.20.image'));
					}else{
						$img21 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.20.image'));
					}
					@endphp

					<div class="movil-amenities-img" style="background-image:url({{$img21}}); background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.20.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.20.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>
			</div>

			<div class="mosaic-last">
				@if($total_amenities==24 || $total_amenities==25)
				<div class="principal" ></div>
				@endif

				@if($total_amenities>=24)

				@php 
				if(Agent::isMobile() && !Agent::isTablet()){
					$img24 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.23.image'));
				}else{
					$img24 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.23.image'));
				}
				@endphp				

				<div class="principal movil-amenities-img" style="background-image:url({{$img24}}); background-position: center;">
					<div class="info movil-amenities-info">
						<strong>{{__('resorts/'.$resort.'/amenities.amenities.23.name')}}</strong>
						<p>{!!__('resorts/'.$resort.'/amenities.amenities.23.excerpt')!!}</p>
					</div>
				</div>
				@endif
				<div class="secundarios">
					@if($total_amenities>=22)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img22 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.21.image'));
					}else{
						$img22 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.21.image'));
					}
					@endphp						

					<div class="movil-amenities-img" style="background-image:url({{$img22}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.21.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.21.excerpt')!!}</p>
						</div>
					</div>

					@endif

					@if($total_amenities>=23)

					@php 
					if(Agent::isMobile() && !Agent::isTablet()){
						$img23 =asset('img/mobile/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.22.image'));
					}else{
						$img23 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.22.image'));
					}
					@endphp	

					<div class="movil-amenities-img" style="background-image:url({{$img23}});  background-position: center;">
						<div class="info movil-amenities-info">
							<strong>{{__('resorts/'.$resort.'/amenities.amenities.22.name')}}</strong>
							<p>{!!__('resorts/'.$resort.'/amenities.amenities.22.excerpt')!!}</p>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
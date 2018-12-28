<!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/medias.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('metadescription')"/> 
		<!-- Fonts -->
		</style>


			@php
			if(!config('app.debug')){
			@endphp
			<!-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" -->
				<script class="kxct" data-id="tc1kcjtn5" data-timing="async" data-version="3.0" type="text/javascript">
				  window.Krux||((Krux=function(){Krux.q.push(arguments)}).q=[]);
				  (function(){
				    var k=document.createElement('script');k.type='text/javascript';k.async=true;
				    k.src=(location.protocol==='https:'?'https:':'http:')+'//cdn.krxd.net/controltag/tc1kcjtn5.js';
				    var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(k,s);
				  }());
				</script>
			<!-- END Salesforce DMP ControlTag -->
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-NNS3B9J');</script>
			<!-- End Google Tag Manager -->
			@php
        	}
			@endphp
			
			
  </head>

  <body  class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
  		@php if(!isset($resort)){$resort='';} if(!isset($chat)){$chat='';}  $language = App::getLocale(); @endphp
  		<script type="text/javascript"> var language = '<?php echo $language;?>'</script>
		@component('parts/header', ['chat'=>$chat] )
		@endcomponent
        @yield('interna')
        @component('parts/extras/manage-reservation')
		@endcomponent
				@php
					$schemaID = count(Request::segments()) > 0 ? Request::segment(count(Request::segments())) : "/";
					$ald = [
						"@context"	=> "http://schema.org"
					];
					$opage = __("schemas.{$schemaID}");
					if(is_string($opage))  $opage = __("schemas.default");
					$ald = array_merge($ald, $opage);
				@endphp

				<script type="application/ld+json">{!! json_encode($ald) !!}</script>
				
        @component('parts/footer')
		@endcomponent

		@if ( isOutdatedBrowser() )
			{{-- No es compatible --}}
			<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
			<script src="{{ asset('js/owl.min.js')}}" type="text/javascript"></script>
			<script src="{{ asset('js/progressbar.min.js')}}" type="text/javascript"></script>
			<script src="{{ asset('js/countdown.min.js')}}" type="text/javascript"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<script src="https://cdn.plyr.io/3.2.4/plyr.js"></script>
			<script src="{{ asset('js/intern.js') }}"></script>
		@else
			{{-- Es compatible --}}
			<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
			<script src="{{ asset('js/plyr.js') }}"></script>
			<script src="{{ asset('js/lazy.min.js') }}"></script>
			<script src="{{ asset('js/master-intern.js') }}"></script>	
		@endif


		@if($resort=='the-royal-sands')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088228&property_id=1013162&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-royal-islander')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088229&property_id=1013163&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-royal-caribbean')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088230&property_id=1013164&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-royal-cancun')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088029&property_id=1012940&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='grand-residences-riviera-cancun')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088226&property_id=1013160&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-royal-haciendas')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088227&property_id=1013161&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-villas-at-simpson-bay-resort')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088232&property_id=1013166&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='simpson-bay-resort')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088231&property_id=1013165&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='the-royal-sea-aquarium')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088233&property_id=1013167&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='ancora')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1089393&property_id=1013876&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($page=='deals' || $page=='ofertas' || $page=='sub-inter-special')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='casa-de-campo')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1090489&property_id=1014987&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@elseif($resort=='del-mar')
		<script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1089392&property_id=1013875&account_key=EEC7F394E75642B8BDC69629DE960D6B'></script>
		@endif

		@php
		if(!config('app.debug')){
		@endphp

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		@php
        }
		@endphp
		
		@yield('javascript')

  </body>

</html>


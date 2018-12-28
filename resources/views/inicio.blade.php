<!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta property="og:image" content="https://royalreservations.com/img/desktop/en/beach-resorts-1.jpg"/>
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/medias.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

		<title>{{ __('header.site.title') }}</title>
		<meta name="description" content="{{ __('header.site.description') }}" />

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

	<body class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
		@php $language = App::getLocale(); @endphp
  		<script type="text/javascript"> var language = '<?php echo $language;?>'</script>
  		
		@component('parts/header',['chat'=>$chat]) @endcomponent 
		@yield('home') 
		@component('parts/extras/manage-reservation') 
		@endcomponent
		@component('parts/footer')
		@endcomponent
		@php
			$schemaID = count(Request::segments()) > 0 ? Request::segment(count(Request::segments())) : "/";
			$ald = [
				"@context"	=> "http://schema.org"
			];
			$opage = __("schemas.{$schemaID}", []);
			$ald = array_merge($ald, $opage);
		@endphp

		<script type="application/ld+json">
			{!! json_encode($ald) !!}
		</script>

		@if ( isOutdatedBrowser() )
			{{-- No es compatible --}}
			<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<script src="{{ asset('js/instafeed.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('js/home.js') }}"></script>
		@else {{-- Es compatible --}}
			<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
			<script src="{{ asset('js/plyr.js') }}"></script>
			<script src="{{ asset('js/lazy.min.js') }}"></script>
			<script src="{{ asset('js/instafeed.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('js/master-home.js') }}"></script>
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
        


	</body>

</html>


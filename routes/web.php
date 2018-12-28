<?php
use Vinkla\Instagram\Instagram;

$locale = Request::segment(1);
if(!in_array($locale, config('app.locale'))) {
    $locale = config('app.fallback_locale');
}
App::setLocale($locale);

if($locale === config('app.fallback_locale')) {
    $locale = "";
}

Route::group(['prefix' => $locale], function () {
    Route::get('/', function () {
        return view('templates/home', ['type' => 'home','chat'=>'general']);
    })->name('home');

    Route::get('/en', function () {
        return redirect()->route('home');
    });

    Route::get('/agentes-royal-resorts', function(){
        $page= "agentes-royal-resorts";
        return view('templates/agentes',array('page'=>$page));
    });

    Route::get('/{interna}', function($interna){
        $page= $interna;
        $chat="general"; 
        return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    });



    Route::get(__('routes.beach_destinations').'/{interna}/{subinterna}', function($interna, $subinterna){
        $page='destinations-intern';
        $chat='general';
       
        if($interna== 'cancun' || $interna=='playa-del-carmen' || $interna == 'the-royal-sands' ||  $interna == 'the-royal-islander' || 
         $interna == 'the-royal-caribbean' || $interna == 'the-royal-cancun' ||
         $interna == 'the-royal-haciendas')
        {
            $chat="mexico";
        }
        
        if($interna=='st-maarten' ||$interna=='curacao'
        ||$interna =='the-villas-at-simpson-bay-resort'
        ||$interna =='simpson-bay-resort' || $interna=='the-royal-sea-aquarium' )
        {
            $chat="caribe";
        }
        if($interna=='puerto-morelos' || $interna=='grand-residences-riviera-cancun' || $interna=='riviera-maya')
        {
            $chat="royal-gr";
        }
       
        if($interna=='punta-cana' || $interna=='ancora' || $interna =='del-mar' || $interna=='casa-de-campo')
        {
            $chat="punta-cana";
        }

        if (strpos($subinterna, 'vacation-special-') !== false || strpos($subinterna, 'ofertas-de') !== false) { $page="destinations-offers";}

        if (strpos($subinterna, 'the-best-beach-resorts-in-') !== false || strpos($subinterna, 'los-mejores-hoteles-de-playa-en-') !== false) { $page="destinations-resorts";}

        return view('templates/interna', array('page'=>$page, 'destino'=>$interna, 'subinterna'=>$subinterna, 'chat' =>$chat));
    });
    
    Route::get(__('routes.beach_resorts').'/{resort}/{interna}/{subinterna?}', function($resort,$interna, $subinterna=false){
    	$locale = App::getLocale();
        //Para la vista interna busco la parte de la cadena que hace referencia a la sección
        $page="resorts-intern";
        $atribs="";
        if (strpos($interna, 'rooms-in-') !== false || strpos($interna, 'habitaciones-familiares') !== false) { $page="resorts-atrib";$atribs="habitaciones";}
        if (strpos($interna, 'activities') !== false || strpos($interna, 'actividades') !== false) { $page="resorts-atrib";$atribs="actividades";}
        if (strpos($interna, 'room-only') !== false || strpos($interna, 'plan-europeo-') !== false) { $page="resorts-atrib-allinclusive";$atribs = "rate-plans";}
        if (strpos($interna, 'all-inclusive-') !== false) { 
            if (strpos($interna, '-vacation') !== false) { 
                $page="resorts-atrib-allinclusive";
                $atribs = "rate-plans";
            }
        }
        if (strpos($interna, 'todo-incluido-') !== false) { 
            $page="resorts-atrib-allinclusive";
            $atribs = "rate-plans";
        }
        if (strpos($interna, 'bed-and-breakfast') !== false || strpos($interna, '-desayuno-incluido-') !== false) { $page="resorts-atrib-allinclusive";$atribs = "rate-plans";}

        if (strpos($interna, '-photos') !== false || strpos($interna, 'fotos-de') !== false) { $page="resorts-atrib";$atribs="galeria";}
        
        if (strpos($interna, 'restaurants-in-') !== false || strpos($interna, 'restaurantes-en-') !== false) { $page="resorts-atrib";$atribs="restaurantes";}
        if (strpos($interna, '-resort-reviews') !== false || strpos($interna, '-comentarios') !== false) { $page="resorts-atrib";$atribs="reviews";}
        if (strpos($interna, '-vacation-deals') !== false || strpos($interna, 'ofertas-de-hoteles-en') !== false || strpos($interna, 'promociones-de-hoteles-de-lujo-en') !== false) { $page="resorts-atrib";$atribs="specials";}
        if (strpos($interna, '-policies') !== false || strpos($interna, 'politicas-') !== false) { $page="resorts-atrib";$atribs="policies";}

        if($locale =='en'){
        	$restaurants="restaurants-in-".$resort;
        	$gallery=$resort."-resort-photos";
        	$policies=$resort."-resort-policies";
        	$reviews=$resort."-resort-reviews";
        }else{ 
        	if($locale =='es'){
		    	$restaurants="restaurantes-en-".$resort;
		    	$gallery="fotos-del-hotel-".$resort;
		    	$policies="politicas-del-hotel-".$resort;
		    	$reviews=$resort."-hotel-comentarios";                	
        	}
        }

        switch ($resort) {
            case 'the-royal-sands':
                $rhome="the-royal-sands-resort-and-spa-all-inclusive-cancun";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="-";
                $ai="all-inclusive-cancun-vacation";
                $bb="-";
                $chat="mexico";
                break;
            case 'the-royal-islander':
                $rhome="the-royal-islander-all-suites-resort-cancun";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="room-only-cancun-vacation";
                $ai="-";
                $bb="bed-and-breakfast-cancun-vacation";
                $chat="mexico";
                break;
            case 'the-royal-caribbean':
                $rhome="the-royal-caribbean-all-suites-resort-cancun";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{ 
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="room-only-cancun-vacation";
                $ai="-";
                $bb="bed-and-breakfast-cancun-vacation";  
                $chat="mexico";                                  
                break;
            case 'the-royal-cancun':
                $rhome="the-royal-cancun-all-suites-resort-cancun";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                
                $ep="room-only-cancun-vacation";
                $ai="all-inclusive-cancun-vacation";
                $bb="bed-and-breakfast-cancun-vacation";
                $chat="mexico";     
                break;
            case 'grand-residences-riviera-cancun':
                if($locale =='en'){
                	$rhome="luxury-resort-in-riviera-maya";
                	$rooms="luxury-family-rooms-in-riviera-maya";
                	$amenities="luxury-resort-in-riviera-maya-with-family-activities";
                	$specials="luxury-vacation-deals-in-riviera-maya";
                	$restaurants="luxury-restaurants-in-grand-residences-riviera-cancun";
                	$gallery=$resort."-photos";

                }else{
                	if($locale =='es'){
	                	$rhome="hotel-de-lujo-en-riviera-maya"; 
	                	$rooms="hoteles-de-lujo-en-riviera-maya-con-habitaciones-familiares";
	                	$amenities="actividades-en-hotel-de-lujo-en-riviera-maya";
	                	$specials="promociones-de-hoteles-de-lujo-en-riviera-maya";
	                	$restaurants="restaurantes-en-grand-residences-riviera-cancun";
	                	$gallery="fotos-de-".$resort;
                	}
                }
                
                $ep="room-only-riviera-maya-vacation";
                $ai="all-inclusive-riviera-maya-vacation";
                $bb="bed-and-breakfast-riviera-maya-vacation";
                $policies=$resort."-policies";
                $chat="royal-gr";                               
                break;
            case 'the-royal-haciendas':
                $rhome="the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-playa-del-carmen-resort";
                	$amenities="resort-in-playa-del-carmen-with-family-activities";
                	$specials="playa-del-carmen-resort-vacation-deals";
                }else{ 
                	if($locale =='es'){
	                	$rooms="hoteles-en-playa-del-carmen-con-habitaciones-familiares";
	                	$amenities="hoteles-en-playa-del-carmen-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-playa-del-carmen";
                	}
                }
                
                $ep="room-only-playa-del-carmen-vacation";
                $ai="all-inclusive-playa-del-carmen-vacation";
                $bb="-";
                $chat="mexico";                          
                break;
            case 'the-villas-at-simpson-bay-resort':
                $rhome="the-villas-at-simpson-bay-beach-resort-and-marina-st-maarten";
                if($locale =='en'){ 
                	$rooms="rooms-in-st-maarten-island";
                	$amenities="resort-in-st-maarten-activities";
                	$specials="st-maarten-island-resort-vacation-deals";
                	$gallery=$resort."-photos";
                	$reviews=$resort."-reviews";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-isla-st-maarten";
	                	$amenities="actividades-en-hotel-de-st-maarten";
	                	$specials="ofertas-de-hoteles-en-isla-st-maarten";
	                	$gallery="fotos-del-hotel-the-villas-at-simpson-bay";
	                	$reviews="the-villas-at-simpson-bay-resort-comentarios";
                	}
                }
                         
                $ep="room-only-st-maarten-vacation";
                $ai="-";
                $bb="bed-and-breakfast-st-maarten-vacation";
                $policies=$resort."-policies";
                $chat="caribe";             
                break;
            case 'simpson-bay-resort':
                $rhome="simpson-bay-beach-resort-and-marina-st-maarten";
                if($locale =='en'){ 
                	$rooms="rooms-in-st-maarten-island";
                	$amenities="resort-in-st-maarten-activities";
                	$specials="st-maarten-island-resort-vacation-deals";
                	$gallery=$resort."-photos";
                	$reviews=$resort."-reviews";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-isla-st-maarten";
	                	$amenities="actividades-en-hotel-de-st-maarten";
	                	$specials="ofertas-de-hoteles-en-isla-st-maarten";
	                	$gallery="fotos-del-hotel-simpson-bay-resort";
	                	$reviews="simpson-bay-resort-comentarios";
                	}
                }
                
                $ep="room-only-st-maarten-vacation";
                $ai="-";
                $bb="bed-and-breakfast-st-maarten-vacation";
                $policies=$resort."-policies";
                $chat="caribe";             
                break;             
            case 'the-royal-sea-aquarium':
                $rhome="the-royal-sea-aquarium-resort-curacao";
                if($locale =='en'){ 
                	$rooms="rooms-in-curacao-island";
                	$amenities="resort-in-curacao-activities";
                	$specials="curacao-resort-vacation-deals";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-curacao";
	                	$amenities="actividades-en-hotel-de-curacao";
	                	$specials="ofertas-de-hoteles-en-curacao";
                	}
                }
                
                $ep="room-only-curacao-vacation";
                $ai="-";
                $bb="bed-and-breakfast-curacao-vacation";
                $chat="caribe";                           
                break;
            case 'ancora':
                $rhome="ancora-punta-cana-private-residence-yacht-club";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                    $restaurants="restaurants-in-ancora-punta-cana-resort";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
                        $restaurants="restaurantes-en-resort-ancora-punta-cana";
                	}
                }
                
                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $chat="punta-cana";
                $bb="-";                             
                break;
            case 'del-mar':
                $rhome="del-mar-ocean-front-resort-by-joy-resorts";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                	$restaurants="restaurants-in-del-mar-resort";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
	                	$restaurants="restaurantes-en-del-mar-resort";
                	}
                }
                
                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $bb="-";
                $chat="punta-cana";                   
                break;
            case 'casa-de-campo':
                $rhome="casa-de-campo-resort-and-villas-punta-cana";
                if($locale =='en'){ 
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                }else{ 
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
                	}
                }
                
                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $bb="-";
                $chat="punta-cana";        
                break;
            default:
                $rhome="home";
                $rooms="rooms";
                $specials="specials";
                $reviews="reviews";
                $restaurants="restaurants";
                $chat="general";        
                break;   
        }
        return view('templates/interna',array('page'=>$page,'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'atribs'=>$atribs,'chat'=>$chat,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'amenities'=>$amenities,'ep'=>$ep,'ai'=>$ai,'bb'=>$bb,'restaurants'=>$restaurants,'gallery'=>$gallery,'reviews'=>$reviews));
    });
    
    // Type of trips
    Route::get('/'.__('routes.experiences').'/{subinterna}', function($subinterna){
        $page='vacation-experiences-intern';
        $chat="general";
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'trip'=>$subinterna));
    });
    
    // Specials
    /*Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{destino}/{subinterna}', function($destino,$subinterna){
        $page='sub-inter-special';
        $chat="general";       
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'destino'=>$destino,'slug'=>$subinterna));
    });*/
    Route::get('/'.__('routes.deals').'/'.__('routes.hotels'), function(){
        $page="deals";
        $chat="general";
        return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    });
    Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{slug}', function($slug){
        $page="sub-inter-special";
        $chat="general";
        $url=Request::fullUrl();
        $filtro= strstr($url,"filtros=");
        if(!$filtro){
            $filtro="filtros=all";
        }

        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'slug'=>$slug,'filtro'=>$filtro));
    });

    Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{destino}', function($destino){
        $page='sub-inter-special';
        $chat="general";       
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'destino'=>$destino));
    });
        
    // Tour packages
    Route::get('/tour-packages/{subinterna}', function($subinterna){
        $page='tour-packages-intern';
        $chat="general";
        if($subinterna=='cancun' || $subinterna=='playa-del-carmen'){
            $chat="mexico";
        }
        return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    });
    
    // About Us
    Route::get('/'.__('routes.aboutus').'/{subinterna}', function($subinterna){
        $page='aboutus-intern';
        $chat="general";
        switch ($subinterna) {
            case 'why-book-with-royalreservations': $isvalid=1; break;
            case 'best-deal-guaranteed':            $isvalid=1; break;
            case 'terms-of-use':                    $isvalid=1; break;
            case 'privacy-policy':                  $isvalid=1; break;

            case 'por-que-reservar-con-royalreservations': $isvalid=1; break;
            case 'mejor-oferta-garantizada':               $isvalid=1; break;
            case 'terminos-de-uso':                        $isvalid=1; break;
            case 'politica-de-privacidad':                 $isvalid=1; break;
            
            default:    $isvalid=0; break;   
        }
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'area'=>$subinterna,'isvalid'=>$isvalid));
    });

    // Adicionales
    Route::get('/assistcard/{subinterna}', function($subinterna){
        return view('templates/adicionales',array('page'=>$subinterna));
    });
      
});

<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'the-royal-caribbean-resort-especial',
    'thumbnail' => asset('img/deals/the-royal-caribbean-resort-especial.jpg'),
    'title' => 'Cancún - Oferta de The Royal Caribbean Resort',
    'expiration'=>'04/30/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja entre Hoy y el 30 Abril de 2019!',
    'box_benefits'=>'Elige entre Habitación + Desayunos Gratis o Habitación + Transportación Gratis',
    'title_seo' => 'Oferta de Resort The Royal Caribbean en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta en Hotel The Royal Caribbean',
	'metadescription' => '',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'50% + 10%',
        1=>'50% + 10% OFF',
        2=>'Elige: Transportación Incluida o Desayunos Gratis',
        3=>'Plan Solo Habitación',
        4=>'Niños se hospedan gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50% + 10%', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha esta magn&iacute;fica promoci&oacute;n y viaja a las hermosas playas de arena blanca de Canc&uacute;n. Sum&eacute;rgete en el azul del oc&eacute;ano, divi&eacute;rtete con las actividades acu&aacute;ticas y terrestres, degusta la deliciosa cocina mexicana e internacional, y aprende sobre la cultura del destino. Disfruta de tus vacaciones con esta oferta y recibe un descuento especial de 50% m&aacute;s un 10% adicional al reservar la suite de tu preferencia en The Royal Caribbean, resort familiar frente al mar en Canc&uacute;n, adem&aacute;s elige entre desayunos buffet diarios para todos o transportaci&oacute;n gratuita desde/hacia el aeropuerto.<br /><br />Reserva ahora tus vacaciones y viaja en cualquier momento para experimentar las vacaciones familiares perfectas en la playa con Royal Reservations.    
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>50% de descuento + 10% de descuento adicional </li>
                        <li>Transportaci&oacute;n gratis para todos los ocupantes</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis usando camas existentes</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'96',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021296',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmaci&oacute;n.</li>
                        <li>La transportaci&oacute;n ser&aacute; otorgada en servicio compartido.</li>
                        <li>El servicio est&aacute; disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm.</li>
                        <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no ser&aacute; posible garantizar el mismo.</li>
                        <li>Esta promoci&oacute;n no incluye alimentos ni bebidas.</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Habitación con Desayuno',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación con Desayuno',
            'description'=>'
                        
                    <ul>
                        <li>50% de descuento + 10% de descuento adicional</li>
                        <li>Desayuno buffet gratis diariamente para todos los hu&eacute;spedes confirmados</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y toman su desayuno gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes.</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Habitación con Desayuno',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'96',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Esta promoci&oacute;n incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmaci&oacute;n.</li>
                        <li>Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'super-descuento-playa-del-carmen',
    'thumbnail' => asset('img/deals/super-descuento-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Súper Descuento',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta Especial Vacaciones en Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
	'metadescription' => 'Con esta promoción especial obtendrás un magnífico descuento de 46% en tu reservación Todo Incluido, además de beneficios especiales como un Tour Credit por $100 dólares para que lo utilices en emocionantes tours de la agencia de viajes.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'46% Dto.',
        1=>'$100 USD Resort Credit  + $100 USD Spa Credit',
        2=>'Transportación Incluida',
        3=>'Planes: Todo Incluido o Plan Solo Habitación',
        4=>'Niños se hospedan gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Empaca tus sandalias y traje de ba&ntilde;o! Reserva ahora y recibe un s&uacute;per descuento de hasta el 46% en tu reservaci&oacute;n, para viajar en cualquier &eacute;poca de este a&ntilde;o o del siguiente, con el mejor Plan Todo incluido en uno de los mejores destinos tur&iacute;sticos del mundo. Adem&aacute;s recibe 200 d&oacute;lares de Resort Credit para disfrutar de diferentes servicios del hotel como masajes, tours y m&aacute;s. Encuentra amenidades exclusivas e instalaciones impecables en The Royal Haciendas en Playa del Carmen.  
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>100 D&oacute;lares de Resort Credit</li>
                        <li>100 D&oacute;lares de Spa Credit</li>
                        <li>Alimentos y bebidas ilimitados.</li>
                        <li>Room Service las 24 horas.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis.</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3411851',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>---</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
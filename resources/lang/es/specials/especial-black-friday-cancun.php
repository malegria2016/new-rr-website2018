<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-black-friday-cancun',
    'thumbnail' => asset('img/deals/especial-black-friday-cancun.jpg'),
    'title' => 'Cancún: Black Friday',
    'expiration'=>'11/26/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'07/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Cancún!',
    'title_seo' => 'Oferta de Black Friday Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones de Black Friday a Cancún',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por el Especial de Black Friday y obtén hasta un 49% de descuento al reservar!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'49% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis de alta velocidad',
        3=>'',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Estamos muy emocionados por la gran Oferta de Black Friday para tus vacaciones en Cancún! Aprovecha esta promoción que durará muy pocos días para reservar hoy mismo y recibir un descuento de hasta 49% en tu reservación, para viajar en cualquier época de este año o del siguiente, con el mejor plan Todo Incluido o Sólo Hospedaje. Elige alguno de nuestros 4 resorts en Cancún con impecables amenidades e instalaciones y la suite de tu preferencia para disfrutar unos días en la playa con tu familia.
        </p>
        <p>Oferta Válida Hasta: Noviembre 26 2018. Viaja Entre Noviembre 21 2018 hasta Julio 15 del 2019</p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial al reservar</li>
                        <li>Alimentos y bebidas ilimitados (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                        <li>Room Service las 24 horas.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'4.5',
                    'img'=>'the-royal-sands',
                    'price'=>'200',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3449852',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'4.5',
                    'img'=>'the-royal-cancun',
                    'price'=>'210',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3449741',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3 Noches</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial al reservar</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis (usando camas existentes)</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'89',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'103',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3451921',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Estadía mínima de 3 Noches</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
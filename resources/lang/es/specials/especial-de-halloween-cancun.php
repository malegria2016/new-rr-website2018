<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-halloween-cancun',
    'thumbnail' => asset('img/deals/especial-de-halloween-cancun.jpg'),
    'title' => 'Cancún: Especial de Halloween',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Cancún!',
    'title_seo' => 'Oferta de Halloween Vacaciones a Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones de Halloween a Cancún',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por el Especial de Halloween y obtén hasta un 47% de descuento al reservar!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'47% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Celebramos esta &ldquo;terror&iacute;fica&rdquo; temporada con nuestra Oferta Especial. As&iacute; que, antes que cantemos &ldquo;Queremos Halloween, Queremos Halloween&rdquo; , apres&uacute;rate, reserva y &iexcl;vuela al para&iacute;so! Elige el Plan que m&aacute;s te convenga y viaja cualquier fecha este a&ntilde;o o el siguiente: Plan Europeo o Todo Incluido con un incre&iacute;ble 40% de descuento adem&aacute;s de un adicional 12% exclusivo de nuestro sitio. <br />Durante tu estancia en cualquiera de nuestros resorts en Canc&uacute;n. 
        </p>


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
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'197',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'282',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3  noches</li>
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
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'119',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'127',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Estadía mínima de 3  noches</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
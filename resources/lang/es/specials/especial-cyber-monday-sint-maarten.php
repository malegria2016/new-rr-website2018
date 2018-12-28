<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-cyber-monday-sint-maarten',
    'thumbnail' => asset('img/deals/especial-cyber-monday-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Cyber Monday',
    'expiration'=>'12/01/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/16/2018','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones al Caribe!',
    'title_seo' => 'Oferta de Vacaciones a St. Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado para St Maarten y obtén hasta un 53% de descuento al reservar!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //
    'main_points' => [
        0=>'53% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Tus vacaciones a St. Maarten están cada vez más cerca con nuestra promoción Cyber Monday! Reserva ahora y viaja en cualquier fecha de este año o el siguiente con un exclusivo 53% de descuento en tu estancia. ¡Aprovecha esta oportunidad que dura muy pocos días! Disfruta de hermosas playas, actividades de todo tipo y las maravillas naturales de esta increíble isla tropical del Caribe.  Elige entre Simpson Bay Beach Resort o The Villas at Simpson Bay y disfruta los servicios de Royal Reservations.
        </p>
        <p>Oferta Válida Hasta: Diciembre 1 2018. Viaja Entre Noviembre 26 2018 hasta Diciembre 15 del 2018</p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'109',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'3452343',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson bay Resort',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'117',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'3452371',
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
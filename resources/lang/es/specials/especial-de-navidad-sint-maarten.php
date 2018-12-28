<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-navidad-sint-maarten',
    'thumbnail' => asset('img/deals/especial-de-navidad-sint-maarten.jpg'),
    'title' => 'St. Maarten: Especial de Navidad',
    'expiration'=>'', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora esta Oferta Especial de Navidad!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en St. Maarten!',
    'title_seo' => 'Oferta de Navidad en St. Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
	'metadescription' => 'Vive unas vacaciones en este paraíso, reserva la suite de tu preferencia y obtén un 45% de descuento + un 10% adicional.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'45%+10% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Esta incre&iacute;ble venta rel&aacute;mpago de Royal Reservations, disponible por unos d&iacute;as, trae para ti el regalo perfecto para tus vacaciones en St. Maarten! <br />Vive unas vacaciones en este para&iacute;so, reserva la suite de tu preferencia en Plan Europeo y al&oacute;jate en Simpson Bay Beach Resort o en The Villas at Simpson Bay, dos magn&iacute;ficos resorts disponibles para ti en Royal Reservations. Obt&eacute;n un 45% de descuento + un 10% extra reservando con nosotros y disfruta de tus vacaciones este o el pr&oacute;ximo a&ntilde;o.<            
        </p>


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
                    'name'=>'Simpson Bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'115',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2808359',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay ',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'124',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2808366',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>Esta promoci&oacute;n no incluye alimentos ni bebidas</p>
            ',
        ],
    ],
    'code'=>'',
];
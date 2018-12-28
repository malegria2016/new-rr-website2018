<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-fin-de-ano-st-maarten',
    'thumbnail' => asset('img/deals/especial-de-fin-de-ano-st-maarten.jpg'),
    'title' => 'St. Maarten: Especial de Fin de Año',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones al Caribe!',
    'title_seo' => 'Oferta de Año Nuevo en St Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
	'metadescription' => 'Royal Reservations tiene la excusa perfecta para que vivas unas vacaciones de playa increíbles en la isla de St. Maarten.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
      
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Royal Reservations tiene la excusa perfecta para que vivas unas vacaciones de playa incre&iacute;bles en la isla de St. Maarten. <br /><br />Con esta oferta especial t&uacute; y tus acompa&ntilde;antes experimentar&aacute;n el gran ambiente caribe&ntilde;o y clima c&aacute;lido, ideal para escapar del fr&iacute;o y relajarse en la playa. Aprovecha esta promoci&oacute;n y obt&eacute;n un 48% de descuento para disfrutar tus vacaciones en Plan Europeo, en cualquier fecha de este o el siguiente a&ntilde;o, hosped&aacute;ndote en Simpson Bay Beach Resort &amp; Villas o en The Villas at Simpson Bay Beach Resort. <br /><br />Reserva ahora con Royal Reservations y comienza a planear tus vacaciones. </p>
        </p>


    ',
    'rates'=>[
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>Desayuno diario gratis para todos</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes </li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'3481581',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'3481611',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>Esta promoci&oacute;n incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmaci&oacute;n. <br />Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.</p>
            ',
        ],
    ],
    'code'=>'',
];
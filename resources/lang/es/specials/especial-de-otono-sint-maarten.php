<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-sint-maarten',
    'thumbnail' => asset('img/deals/especial-de-otono-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Especial de Otoño ',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones al Caribe!',
    'title_seo' => 'Oferta de Vacaciones a St. Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
	'metadescription' => 'Comienza hoy a planear esas vacaciones en familia que tanto anhelas y obtén un inigualable descuento especial del 48% en tu reservación, que incluye desayunos buffet gratis para los ocupantes de la suite; y disfruta de las playas de St. Maarten.',

    'label_resort' => '<span class="av-skyblue">Simpson Bay / The Villas at Simpson Bay</span>',
    'main_points' => [
        0=>'48% Dto.',
        1=>'Desayuno Buffet Gratis para Todos',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iquest;Has tenido en mente una escapada al Caribe y has tratado de encontrar alguna Buena oferta? Bueno, &iexcl;te tenemos buenas noticias! Royal Reservations est&aacute; dando descuentos especiales para esta temporada de oto&ntilde;o. La oferta consiste en 48% de descuento al reservar tu hospedaje con desayunos buffet diarios. &iquest;Es esta la se&ntilde;al que estabas esperando? &iexcl;Reserva ahora! <br />St Maarten es una tranquila isla en el Caribe donde disfrutar&aacute;s lo mejor de dos culturas: la holandesa y la francesa, as&iacute; como muchas actividades al aire libre, deliciosos restaurantes y hermosos paisajes. Reserva ahora tu Plan Europeo ya sea en Simpson Bay Beach Resort &amp; Marina o The Villas at Simpson Bay Beach Resort con nuestro descuento especial y viaje cualquier fecha este a&ntilde;o o el siguiente. <br />&iexcl;Vive unas vacaciones incre&iacute;bles en St Maarten con tu familia, pareja o amigos!
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
                        <li>Desayuno diario gratis para todos</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes</li>
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
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
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
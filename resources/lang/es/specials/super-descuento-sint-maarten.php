<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'super-descuento-sint-maarten',
    'thumbnail' => asset('img/deals/super-descuento-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Súper Descuento ',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones al Caribe!',
    'title_seo' => 'Oferta Especial Vacaciones en St Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
	'metadescription' => 'Comienza hoy a planear esas vacaciones en familia que tanto anhelas y obtén un inigualable descuento especial del 48% en tu reservación, que incluye desayunos buffet gratis para los ocupantes de la suite; y disfruta de las playas de St. Maarten.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Desayuno Buffet Gratis para Todos',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Te tenemos una buena noticia: en St. Maarten con nuestra promoci&oacute;n especial, con un exclusivo 48% de descuento en tu estancia, disfrutar&aacute;s de las playas, el mejor entretenimiento tanto dentro como fuera del agua y las maravillas naturales de esta incre&iacute;ble isla tropical del Caribe. Adem&aacute;s, estamos incluyendo Desayunos de cortes&iacute;a para todos al hospedarse en Simpson Bay Beach Resort o en The Villas at Simpson Bay. Reserva ahora y viaja en cualquier fecha de este a&ntilde;o o el siguiente.
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
                    'name'=>'Simposon Bay Resort',
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
                    'img'=>'the-royal-islander',
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
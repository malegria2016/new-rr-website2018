<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-fin-de-ano-curacao',
    'thumbnail' => asset('img/deals/especial-de-fin-de-ano-curacao.jpg'),
    'title' => 'Curacao: Especial de Fin de Año',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta Año Nuevo Vacaciones en Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Curacao te espera para que vivas unas inolvidables vacaciones en la playa y el mar con esta sorprendente oferta de Royal Reservations.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'38% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis'

    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% DTO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Curacao te espera para que vivas unas inolvidables vacaciones en la playa y el mar con esta sorprendente oferta de Royal Reservations. <br /><br />En Royal Reservations queremos darte una raz&oacute;n m&aacute;s para visitar Curacao y que te relajes bajo el sol del Caribe. Aprovechar nuestro Especial de Fin de A&ntilde;o para hospedarte en The Royal Sea Aquarium y disfrutar de un gran descuento del 38% en tu reservaci&oacute;n en Plan Europeo, adem&aacute;s de estupendos beneficios como vivir tus vacaciones en cualquier fecha de este o el siguiente a&ntilde;o. <br /><br />Reserva ya y disfruta de la extraordinaria experiencia Royal Reservations en Curacao.
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
                    'name'=>'The Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'3481629',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>Esta promoci&oacute;n incluye un desayuno diario gratis por persona confirmada en su carta de confirmaci&oacute;n.<br />Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.</p>
            ',
        ],
    ],
    'code'=>'',
];
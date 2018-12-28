<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-halloween-curacao',
    'thumbnail' => asset('img/deals/especial-de-halloween-curacao.jpg'),
    'title' => 'Curacao: Especial de Halloween',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Halloween para Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Vive una experiencia única en las playas de Curacao con nuestra promoción especial de Halloween',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'41% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'41% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Esta temporada de Halloween te har&aacute; gritar, &iexcl;y no de terror sino de emoci&oacute;n! Te daremos un 35% de descuento adem&aacute;s de otro -7% para tus pr&oacute;ximas vacaciones en Curacao. Esta oferta especial durar&aacute; pocos d&iacute;as, &iexcl;as&iacute; que reserva ahora y viaja cualquier fecha este a&ntilde;o o el siguiente y vuela al Caribe para vivir todos esos momentos con los que tanto has so&ntilde;ado! <br />Disfrutar&aacute;s todas las bellezas de Curacao, incluyendo sus coloridos edificios, bell&iacute;simas playas, hermosos paisajes y jardines submarinos.
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservación</li>
                        <li>WiFi en la habitación y áreas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'137',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 1 noches</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
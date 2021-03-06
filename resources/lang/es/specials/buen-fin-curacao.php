<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'buen-fin-curacao',
    'thumbnail' => asset('img/deals/buen-fin-curacao.jpg'),
    'title' => 'Curacao: Buen Fin',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/16/2018','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Buen Fin para Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Vive una experiencia única en las playas de Curacao con nuestra promoción especial de Buen Fin',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //
    'main_points' => [
        0=>'42% Dto',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        3=>'',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Aprovecha esta increíble promoción de Buen Fin que te llevará a vivir las mejores vacaciones en Curacao! Con nuestro exclusivo 42% de descuento en tu estancia, disfrutarás de las playas de Curacao, los maravillosos arrecifes de coral, así como el área de Willemstad con sus coloridas construcciones, nombrado parte del Patrimonio de la Humanidad por la UNESCO. Reserva ahora con esta oferta de tiempo limitado y hospédate en The Royal Sea Aquarium ya sea este año o el siguiente. 
        </p>
        <p>Oferta Válida Hasta: Noviembre  21 2018. Viaja Entre Noviembre  15 2018 hasta Enero 31 del 2019</p>


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
                    'name'=>'The Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'133',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'3456345',
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
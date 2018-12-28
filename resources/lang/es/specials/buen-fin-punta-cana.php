<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'buen-fin-punta-cana',
    'thumbnail' => asset('img/deals/buen-fin-punta-cana.jpg'),
    'title' => 'Punta Cana: Buen Fin',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'02/01/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva y viajar en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva ahora tus próximas vacaciones!',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'El Especial de Buen Fin con una increíble promoción para que pases las mejores vacaciones familiares en Punta Cana.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Todo Incluido',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Aprovecha esta oferta del Buen Fin que durará muy pocos días para disfrutar unas vacaciones en Punta Cana! Reserva ahora y obtén un descuento especial en tu reservación Disfruta al máximo las increíbles amenidades e impecables instalaciones de nuestros resorts y explora Punta Cana con sus inolvidables paisajes tropicales del Mar Caribe.  
        </p>
        <p>Oferta Válida Hasta: Noviembre  21 2018. Viaja Entre Noviembre 15 2018 hasta Enero 31 del 2019</p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>Alimentos y bebidas ilimitados</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Ancora Punta Cana Private Residence Yacht Club Resort ',
                    'stars'=>'4.5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 1 Noche</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
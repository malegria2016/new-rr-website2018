<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-halloween-punta-cana',
    'thumbnail' => asset('img/deals/especial-de-halloween-punta-cana.jpg'),
    'title' => 'Punta Cana: Especial de Halloween',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva y viajar en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva ahora tus próximas vacaciones!',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'El Especial de Halloween con una increíble promoción para que pases las mejores vacaciones familiares en Punta Cana.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Todo Incluido o Solo Habitación',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Halloween es mejor con un boleto en tu mano para el para&iacute;so y esperando por esas tan ansiadas vacaciones en el Caribe. La promoci&oacute;n consiste en lo siguiente: un descuento especial para tu estancia en cualquiera de nuestros exclusivos resorts en Punta Cana en cualquier fecha durante este a&ntilde;o o el siguiente. Elige entre nuestro Plan Todo Incluido, Desayuno Incluido o Plan Europeo y recibe las amenidades y servicios de primera que caracterizan a Royal Reservations.    
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
                        <li>Alimentos y bebidas ilimitados</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'220',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 1 noche</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservación</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'DelMar By Joy Resorts',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'260',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Estadía mínima de 1 noche</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
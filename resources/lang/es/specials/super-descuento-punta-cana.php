<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'super-descuento-punta-cana',
    'thumbnail' => asset('img/deals/super-descuento-punta-cana.jpg'),
    'title' => 'Punta Cana: Súper Descuento',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva y viajar en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva ahora tus próximas vacaciones!',
    'title_seo' => 'Oferta Especial Vacaciones en Punta Cana | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Aprovecha esta oferta en la que recibirás un asombroso descuento especial en tu reservación en plan Todo Incluido o Sólo Hospedaje, en cualquiera de los resorts de lujo en Punta Cana.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Todo Incluido o Solo Habitación',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha esta incre&iacute;ble promoci&oacute;n vacacional que te llevar&aacute; a vivir las mejores vacaciones en Punta Cana con un inigualable descuento especial en tu reservaci&oacute;n en Plan Todo Incluido, en cualquier &eacute;poca de este a&ntilde;o o del siguiente. Disfruta al m&aacute;ximo de estupendas amenidades y las magn&iacute;ficas instalaciones de nuestros resorts y exlplora Punta Cana con su gran variedad de activides y hermosos paisajes cerca del mar.
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>Alimentos y Bebidas Ilimitados</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'4',
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
                        <li>Estadía mínima de 1 noche</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
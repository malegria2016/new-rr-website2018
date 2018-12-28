<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-fin-de-ano-punta-cana',
    'thumbnail' => asset('img/deals/especial-de-fin-de-ano-punta-cana.jpg'),
    'title' => 'Punta Cana: Especial de Fin de Año',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva y viajar en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva ahora tus próximas vacaciones!',
    'title_seo' => 'Oferta de Fin de Año en Punta Cana | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Con Royal Reservations y su increíble promoción de fin de año visitarás Punta Cana, un paraíso que tienes que vivir.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'48% Dto.',
        1=>'Todo Incluido o Solo Habitación',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Con Royal Reservations y su incre&iacute;ble promoci&oacute;n de fin de a&ntilde;o visitar&aacute;s Punta Cana, un para&iacute;so que tienes que vivir. <br /><br />Descubre divertidas actividades, bellezas naturales, la cultura, gastronom&iacute;a y bellas playas doradas durante tus vacaciones de lujo en Punta Cana, con esta oferta especial en la que obtendr&aacute;s un descuento exclusivo para disfrutar en cualquier fecha de este o el siguiente a&ntilde;o. Hosp&eacute;date en Ancora Resort en Punta Cana, y experimenta sus lujosas amenidades y servicios mientras disfrutas de tus vacaciones. <br /><br />Reserva ya tus vacaciones Todo Incluido con Royal Reservations. 
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
                        <li>WiFi gratis</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'Ancora',
                    'stars'=>'4',
                    'img'=>'ancora',
                    'price'=>'350',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Estad&iacute;a m&iacute;nima de 1 noche</p>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>WiFi gratis</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'300',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882967',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Estad&iacute;a m&iacute;nima de 1 noche</li>
                        <li>Esta promoci&oacute;n no incluye alimentos ni bebidas</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
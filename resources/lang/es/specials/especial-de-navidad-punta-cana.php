<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-navidad-punta-cana',
    'thumbnail' => asset('img/deals/especial-de-navidad-punta-cana.jpg'),
    'title' => 'Christmas: Especial de Navidad',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/31/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora esta Oferta Especial de Navidad!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Punta Cana!',
    'title_seo' => 'Oferta de Navidad en Punta Cana | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => '¡Royal Reservations tiene una increíble oferta especial para que vivas unas vacaciones fantásticas en Curacao!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'35%+7% Dto',
        1=>'Todo Incluido o Solo Habitación',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Royal Reservations tiene una incre&iacute;ble oferta especial para que vivas unas vacaciones fant&aacute;sticas en Curacao! <br />Esta venta rel&aacute;mpago, disponible s&oacute;lo unos d&iacute;as, ser&aacute; el mejor regalo de Navidad para que pases unas vacaciones incre&iacute;bles en la playa. Reserva la suite de su elecci&oacute;n en Plan Europeo con Royal Reservations para obtener un descuento del 35% + nuestro descuento exclusivo del 7% para alojarte en The Royal Sea Aquarium y disfrutar de Tus vacaciones durante este o el pr&oacute;ximo a&ntilde;o. <br />&iexcl;Reserva ahora!            
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
                    'stars'=>'4.5',
                    'img'=>'alsol-luxury-village',
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
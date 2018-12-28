<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-navidad-playa-del-carmen',
    'thumbnail' => asset('img/deals/especial-de-navidad-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Especial de Navidad',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora esta Oferta Especial de Navidad!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en la Riviera Maya!',
    'title_seo' => 'Oferta de Navidad Vacaciones en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
	'metadescription' => 'Vive unas increíbles vacaciones Todo Incluido en The Royal Haciendas, con esta increíble venta relámpago y obtén un 40% de descuento + un 12% extra',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'40%+12% Dto.',
        1=>'Plan: Todo Incluido',
        2=>'Niños se hospedan gratis',
        3=>'WiFi',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;El regalo perfecto para esta Navidad es unas vacaciones con tu familia, tu pareja o tus amigos en Playa del Carmen y con Royal Reservations lo tienes! <br />Vive unas incre&iacute;bles vacaciones Todo Incluido en The Royal Haciendas, con esta incre&iacute;ble venta rel&aacute;mpago, disponible solo por unos d&iacute;as, y obt&eacute;n un 40% de descuento + un 12% extra en tu reservaci&oacute;n con Royal Reservations. Tambi&eacute;n obt&eacute;n beneficios como hospedaje gratis para ni&ntilde;os y disfrutar de tus vacaciones este a&ntilde;o o el siguiente. <br />&iexcl;Reserva ahora!
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                <ul>
                    <li>Descuento especial en su reservaci&oacute;n</li>
                    <li>Alimentos y bebidas ilimitados.</li>
                    <li>Room Service las 24 horas.</li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis.</li>
                    <li>Wi-Fi de alta velocidad gratis.</li>
                </ul>
                    

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'4.5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'205',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Al elegir el plan Todo Incluido, algunos cargos extras pueden aplicar al ordenar alimentos y bebidas premium <br />Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles. <br />Al hospedarse en los resorts Todo Incluido, y elija el plan Todo Incluido, los ni&ntilde;os hasta 12 a&ntilde;os pueden comer gratis acompa&ntilde;ados por sus padres.</p>
            ',
        ],
        
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'super-descuento-cancun',
    'thumbnail' => asset('img/deals/super-descuento-cancun.jpg'),
    'title' => 'Cancún: Súper Descuento',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Cancún!',
    'title_seo' => 'Oferta Especial Vacaciones en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Cancún',
	'metadescription' => 'Aprovecha esta promoción y obtén un descuento de hasta 46% en tu reservación, y un Resort Credit por $100 dólares + 100 dólares de Spa Credit. Reserva hoy mismo y disfruta de tus vacaciones familiares a Cancún.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'46% Dto.',
        1=>'$100 USD Resort Credit  + $100 USD Tour Credit',
        2=>'Transportación Incluida',
        3=>'Planes: Todo Incluido o Plan Solo Habitación',
        4=>'Niños se hospedan gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Date la oportunidad de ese merecido descanso y vive unas vacaciones en Canc&uacute;n. <br /><br />Reserva ahora y recibe un descuento de hasta el 46% en tu reservaci&oacute;n, para viajar en cualquier &eacute;poca de este a&ntilde;o o del siguiente, con los mejores planes Todo Incluido o S&oacute;lo Hospedaje. Adem&aacute;s recibe 200 d&oacute;lares de Resort Credit para disfrutar de diferentes servicios del hotel como masajes, tours y m&aacute;s. Disfruta las amenidades exclusivas e instalaciones impecables que te ofrecen nuestros resorts en Canc&uacute;n.
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
                        <li>100 D&oacute;lares de Resort Credit</li>
                        <li>100 D&oacute;lares de Spa Credit</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Room Service las 24 horas</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis</li>
                        <li>Wi-Fi de alta velocidad gratis</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'229',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3411825',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'329',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3411792',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Los Cr&eacute;ditos no deben ser considerados como dinero en efectivo</li>
                        <li>Los Cr&eacute;ditos son por reservaci&oacute;n y solo se pueden aplicar directamente en el hotel, mayores detalles en su carta de confirmaci&oacute;n</li>
                        <li>Si los cr&eacute;ditos no se utilizan en su momento, no estar&aacute;n disponibles para su uso en el futuro, no se reembolsar&aacute;n, ni se transferir&aacute;n a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                        <li>Los cr&eacute;ditos no se podr&aacute;n combinar entre s&iacute; o con otras promociones o descuentos.</li>
                        <li>Al elegir el plan Todo Incluido, algunos cargos extras pueden aplicar al ordenar alimentos y bebidas premium</li>
                        <li>Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles.</li>
                        <li>Al hospedarse en los resorts Todo Incluido, y elija el plan Todo Incluido (es decir, The Royal Cancun o The Royal Sands).</li>
                        <li>Los ni&ntilde;os hasta 12 a&ntilde;os pueden comer gratis acompa&ntilde;ados por sus padres, otros resorts est&aacute;n excluidos. </li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>100 D&oacute;lares de Resort Credit</li>
                        <li>100 D&oacute;lares de Tour Credit</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis. </li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'109',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3411876',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <ul>
                    <li>Los Cr&eacute;ditos no deben ser considerados como dinero en efectivo</li>
                    <li>Los Cr&eacute;ditos son por reservaci&oacute;n y solo se pueden aplicar directamente en el hotel, mayores detalles en su carta de confirmaci&oacute;n</li>
                    <li>Si los cr&eacute;ditos no se utilizan en su momento, no estar&aacute;n disponibles para su uso en el futuro, no se reembolsar&aacute;n, ni se transferir&aacute;n a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                    <li>Los cr&eacute;ditos no se podr&aacute;n combinar entre s&iacute; o con otras promociones o descuentos.</li>
                    <li>Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles.</li>
                    <li>Esta promoci&oacute;n no incluye alimentos ni bebidas. </li>
                </ul>
            ',
        ],
        2=>[
            'tab'=>'Desayuno mas Habitación',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Desayuno mas Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>Desayuno buffet gratis diariamente para todos los hu&eacute;spedes confirmados</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis usando camas existentes</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes.</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Desayuno mas Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'99',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>Esta promoci&oacute;n incluye un desayuno diario por persona confirmada en nuestro sistema. Los desayunos del d&iacute;a que no sean consumidos, no ser&aacute;n acumulables para el siguiente d&iacute;a ni habr&aacute; reembolso o compensaci&oacute;n alguna por no tomarlos. En caso de tener hu&eacute;spedes adicionales, le sugerimos comunicarse con nosotros antes del d&iacute;a de la llegada para hacer los ajustes (y cobros que apliquen) necesarios a su reservaci&oacute;n. A partir del d&iacute;a de la llegada y en adelante, los hu&eacute;spedes adicionales no tendr&aacute;n incluido el desayuno, pero podr&aacute;n tomarlo en el restaurante pagando el precio correspondiente. </li>
                        <li>El desayuno buffet se toma en el restaurante &ldquo;Tradewinds&rdquo;, no aplica en otros restaurantes </li>
                        <li>Servicio de desayuno es de 7am a 11am todos los d&iacute;as. </li>
                        <li>Alimentos y bebidas adicionales tendr&aacute;n un costo extra.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
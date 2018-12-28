<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-cancun',
    'thumbnail' => asset('img/deals/especial-de-otono-cancun.jpg'),
    'title' => 'Cancún: Especial de Otoño ',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Cancún!',
    'title_seo' => 'Oferta de Vacaciones a Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Cancún',
	'metadescription' => 'Aprovecha esta promoción y obtén un descuento de hasta 46% en tu reservación, y un Tour Credit por $50 dólares para tours de la agencia de viajes. Reserva hoy mismo y disfruta de tus vacaciones familiares a Cancún.',

    'label_resort' => '',
    'main_points' => [
        0=>'46% Dto.',
        1=>'$50 USD de Resort Credit ',
        2=>'Transportación Incluida',
        3=>'Planes: Todo Incluido o Plan Solo Habitación',
        4=>'Niños se hospedan gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Estamos ya en oto&ntilde;o y no has viajado a Canc&uacute;n para las vacaciones de tus sue&ntilde;os! Ahora, m&aacute;s que nunca estamos dando facilidades para que puedas disfrutar algunos d&iacute;as en las c&aacute;lidas playas del Caribe Mexicano con los mejores servicios y amenidades en nuestros resorts. Reserva ahora y obt&eacute;n un descuento especial del 46% exclusivo de nuestro sitio web Royal Reservations. Tambi&eacute;n estamos otorgando 50 d&oacute;lares de Resort Credit v&aacute;lido para masajes, tours y m&aacute;s, y un Viaje Redondo de Cortes&iacute;a hacia y desde el aeropuerto. Canc&uacute;n es uno de los destinos m&aacute;s famosos del mundo, por sus incre&iacute;bles hoteles y restaurantes, sus playas de agua turquesa y un clima envidiable. &iexcl;Ven con tu familia a vivir momentos inolvidables! <br />Viaja en cualquier fecha este a&ntilde;o o el que sigue. &iexcl;Los ni&ntilde;os se hospedan gratis!
        </p>
        <ul>
            <li>El todo incluido aplica en The Royal Cancun y The Royal Sands</li>
            <li>Solo hospedaje aplica en The Royal Caribbean y The Royal Islander</li>
        </ul>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>Transportaci&oacute;n de aeropuerto redonda gratis</li>
                        <li>50 D&oacute;lares de Tour Credit.</li>
                        <li>Alimentos y bebidas ilimitados.</li>
                        <li>Room Service las 24 horas.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis. </li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'202',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3329261',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'288',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3329225',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                        <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos de la agencia de viajes, el Spa, alimentos y bebidas y el mini-s&uacute;per, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente.</li>
                        <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmaci&oacute;n.</li>
                        <li>La transportaci&oacute;n ser&aacute; otorgada en servicio compartido.</li>
                        <li>El servicio est&aacute; disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm.</li>
                        <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no ser&aacute; posible garantizar el mismo.</li>
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
                        <li>Transportaci&oacute;n de aeropuerto redonda gratis</li>
                        <li>50 D&oacute;lares de Tour Credit.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis.</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'122',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3329452',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'130',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3329331',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <ul>
                    <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                    <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos de la agencia de viajes, el Spa, alimentos y bebidas y el mini-s&uacute;per, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                    <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                    <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmaci&oacute;n.</li>
                    <li>La transportaci&oacute;n ser&aacute; otorgada en servicio compartido.</li>
                    <li>El servicio est&aacute; disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm.</li>
                    <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no ser&aacute; posible garantizar el mismo.</li>
                    <li>Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles.</li>
                    <li>Esta promoci&oacute;n no incluye alimentos ni bebidas.</li>
                </ul>
            ',
        ],
    ],
    'code'=>'',
];

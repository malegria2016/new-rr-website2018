<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-playa-del-carmen',
    'thumbnail' => asset('img/deals/especial-de-otono-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Especial de Otoño',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Vacaciones a Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
	'metadescription' => 'Con esta promoción especial obtendrás un magnífico descuento de 46% en tu reservación Todo Incluido, además de beneficios especiales como un Tour Credit por $100 dólares para que lo utilices en emocionantes tours de la agencia de viajes.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'$50 USD de Resort Credit',
        1=>'Transportación Incluida',
        2=>'Planes: Todo Incluido o Plan Solo Habitación',
        3=>'Niños se hospedan gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Un destino tropical y famoso debe estar en tu &ldquo;bucket list&rdquo; este oto&ntilde;o. El clima es perfecto, el mar est&aacute; brillando, la fiesta apenas comenz&oacute;, &iexcl;s&oacute;lo faltas t&uacute;! Playa del Carmen es un hermoso para&iacute;so en las costas del Caribe Mexicano, ofreciendo lo mejor de unas vacaciones en la playa. <br />Obt&eacute;n con Royal Reservations el incre&iacute;ble descuento del 46% en tu reservaci&oacute;n de hotel. &iexcl;Pero eso no es todo! Tambi&eacute;n te daremos un Resort Credit de 50 d&oacute;lares que puede aplicarse en diferentes servicios como masajes, tours y m&aacute;s, adem&aacute;s de un viaje redondo desde y hacia el aeropuerto para que no tengas que preocuparte de nada. <br />No dejes que esto se vaya de tus manos y disfruta unas vacaciones inolvidables con tu familia o amigos en Playa del Carmen. &iexcl;Reserva ahora y viaje cualquier fecha este a&ntilde;o o el siguiente!
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
                        <li>Transportaci&oacute;n de aeropuerto redonda gratis</li>
                        <li>50 D&oacute;lares de Tour Credit.</li>
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
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'192',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3329288',
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
                        <li>Al elegir el plan Todo Incluido (es decir, The Royal Cancun o The Royal Sands). Los ni&ntilde;os hasta 12 a&ntilde;os pueden comer gratis acompa&ntilde;ados por sus padres, otros resorts est&aacute;n excluidos.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
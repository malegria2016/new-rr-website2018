<?php

return [
    'slug' => 'ultima-oferta-de-verano-cancun',
    'title' => 'CANCUN - Última Oferta de Verano',
    'thumbnail' => asset('img/deals/ultima-oferta-de-verano-cancun.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],  
    ],
    'destino'=>'cancun',
    'title_seo' => 'Última Oferta de Verano en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Verano en Cancún',
	'metadescription' => 'Recibe 44% de descuento en tu reservación incluyendo un Resort Credit que puedes aplicar en deliciosos platillos, bebidas, tours, tratamientos de spa y productos del Royal Market.',
    'label_resort' => '',
    'main_points' => [
        0=>'44% de Descuento',
        1=>'$150 USD de Resort Credit',
        2=>'Planes: Todo Incluido o Plan Solo Habitación',
        3=>'Niños se hospedan gratis',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Lo mejor hay que dejarlo al final, así que… ¡esta es la mejor oferta de verano para Viajar a Cancún! Es tu oportunidad para reservar al mejor precio y viajar cualquier fecha del año a Cancún. Recibe 44% de descuento en tu reservación incluyendo un Resort Credit que puedes aplicar en deliciosos platillos, bebidas, tours, tratamientos de spa y productos del Royal Market. Comienza a planear tus próximas vacaciones y elige entre nuestros planes Todo incluido y Sólo Hospedaje.
            Todos nuestros Resorts en Cancún, se encuentran en la playa y ofrecen increíbles amenidades e impecables servicios: amplias suites, albercas, kids clubs, actividades y exquisitos restaurantes. Vive días memorables bajo el sol caribeño. ¡Tienes esta oportunidad en la mano, empaca tus aletas y goggles de una vez!
            El plan todo incluido aplica en The Royal Cancun y The Royal Sands
            Solo hospedaje aplica en The Royal Caribbean y The Royal Islander
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>$150 Dólares de Resort Credit.</li>
                            <li>Alimentos y bebidas ilimitados. (Cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service 24 horas.</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis.</li>
                            <li>Wi-Fi de alta velocidad en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'368',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2959312',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2959347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>$150 Dólares de Resort Credit.</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis (usando camas existentes).</li>
                            <li>Wi-Fi de alta velocidad en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'110',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2959388',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'121',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2959378',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <ul>
            <li>El Resort Credit es por reservación y solo puede aplicarse directamente en la recepción al momento del pago de la cuenta de la estancia.</li>
            <li>Este crédito no debe ser considerado como dinero en efectivo.</li>
            <li>Este crédito solo es válido para esta reservación y deberán utilizarse en una sola transacción directamente en la agencia de viajes, si no se utiliza en su momento no estará disponible para su uso en el futuro, no se reembolsará, ni se transferirá a otra reservación. Si el valor del producto es mayor al valor del crédito, la diferencia deberá ser pagada por del cliente.</li>
            <li>Este crédito no podrá combinarse con otras promociones o descuentos.</li>
            <li>La promoción en solo hospedaje no incluye alimentos ni bebidas.</li>
            <li>Reserva desde: <b>Hoy</b> y hasta el <b>08/31/2018</b>.</li>
            <li>Viaja entre: <b>Hoy</b> y hasta el <b>03/31/2019</b>.</li>            
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'ultima-oferta-de-verano-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - Última Oferta de Verano',
    'thumbnail' => asset('img/deals/ultima-oferta-de-verano-playa-del-carmen.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'title_seo' => 'Última Oferta de Verano Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Verano en Cancún',
	'metadescription' => 'Recibe 44% de descuento en tu reservación en The Royal Haciendas incluyendo un Resort Credit de 150 dólares que puede aplicar para comidas, bebidas, tours, spa y productos del Royal Market.',
    'main_points' => [
        0=>'44% de Descuento',
        1=>'$150 USD de Resort Credit',
        2=>'Plan Todo Incluido',
        3=>'Niños se hospedan gratis',
        4=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Despierta con el sonido de las olas durante tus vacaciones en Playa del Carmen y aprovecha la mejor oferta del verano! Recibe 44% de descuento en tu reservación en The Royal Haciendas incluyendo un Resort Credit de 150 dólares que puede aplicar para comidas, bebidas, tours, spa y productos del Royal Market. Comienza a planear tus próximas vacaciones familiares en Playa del Carmen y disfruta todos los beneficios de nuestro Plan Todo Incluido.
            Nuestro resort de playa en Playa del Carmen ofrece increíbles amenidades e impecables servicios para que tú y tu familia puedan disfrutar: amplias suites, albercas tipo infinity, kids club, entretenimiento y restaurantes. ¡Reserva las vacaciones con las que has soñado en este destino de moda y déjanos encargarnos del resto!
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
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2959369',
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
            <li>Reserva desde: <b>Hoy</b> y hasta el <b>08/31/2018</b>.</li>
            <li>Viaja entre <b>Hoy</b> y hasta el <b>03/31/2019</b>.</li>            
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'cuatro-de-julio-cancun',
    'title' => 'Cancun: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-cancun.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'label_resort' => '',

    'title_seo' => 'Oferta de 4 de Julio Cancun | Royal Reservations',
    'alt_seo' => 'Oferta de 4 de Julio Cancun',
	'metadescription' => 'Celebra este 4 de Julio reservando tus próximas vacaciones a Cancún de la mano de Royal Reservations. RESERVA AHORA y aprovecha nuestra Venta Especial',
    'main_points' => [
        0=>'47% Descuento',
        1=>'Niños de hasta 12 años de edad se hospedan gratis',
        2=>'Wi-Fi de alta velocidad gratis en la habitación y áreas comunes',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Celebra este 4 de Julio reservando tus próximas vacaciones a Cancún de la mano de Royal Reservations. RESERVA AHORA y aprovecha nuestra Venta Especial del 4 de Julio disponible solo por tiempo limitado, elige entre nuestro Plan Todo Incluido o Solo Hospedaje y obtén hasta un 47% de descuento. Disfruta del maravilloso azul de las aguas del mar caribe, deleita tu paladar con las delicias que se sirven en nuestros diferentes restaurantes y obtén ese descanso tan deseado dentro de nuestras cómodas suites y villas. Anímate y comienza a planear esas vacaciones tan deseadas al Caribe Mexicano sólo con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Alimentos y bebidas ilimitados (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service las 24 horas.</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'324',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'262',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        1=>[
            'tab'=>'Sólo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Sólo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis (usando camas existentes)</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Sólo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'117',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'133',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        Se requieren 3 noches de estadía mínima
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
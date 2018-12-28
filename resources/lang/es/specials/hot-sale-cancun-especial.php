<?php

return [
    'slug' => 'hot-sale-cancun-especial',
    'title' => 'Hot Sale: Cancun',
    'thumbnail' => asset('img/deals/hot-sale-cancun-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'title_seo' => '¡Hot Sale Cancún!',
    'alt_seo' => 'Cancún con Descuento Espectacular',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por la Hot Sale y obtén hasta un 47% de descuento al reservar',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¿Qué te parece disfrutar unas inolvidable vacaciones en familia disfrutando de las playas de Cancún? Reserva ya durante la Hot Sale, válida sólo por unos días, y vivirás lo mejor del Caribe, la blanca arena, el hermoso mar, la diversión y el entretenimiento nocturno de Cancún; reserva ahora y obtén un excelente descuento de hasta el 47% en tu reservación, viaja en cualquier época del año, con los mejores planes Todo Incluido o sólo hospedaje y al mismo tiempo disfruta de exclusivas amenidades e las impecables instalaciones que ofrecen nuestros resorts en Cancún, The Royal Cancun, The Royal Sands, The Royal Caribbean y The Royal Islander.
            Reserva hoy y aprovecha nuestra Hot Sale para vivir unas maravillosas vacaciones familiares en Cancún, con Royal Reservations.
            Plan Todo Incluido disponible en The Royal Cancun y The Royal Sands Plan Solo Hospedaje disponible en The Royal Caribbean y The Royal Islander.
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
                            <li>Room Service las 24 horas</li>
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
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis (usando camas existentes)</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
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
        Estadía mínima de 3 Noches
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
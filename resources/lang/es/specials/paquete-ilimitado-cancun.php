<?php

return [
	'metadescription' => '¡Con Royal Reservations tú y tu familia vivirán unas inolvidables vacaciones en Cancún!',
	'alt_seo' => 'Vacaciones sin Límite en Cancún',
	'title_seo' => 'Vacaciones sin Límite en Cancún',	
    'title' => 'Cancun: Paquete Ilimitado',
    'slug' => 'paquete-ilimitado-cancun',
    'thumbnail' => asset('img/deals/paquete-ilimitado-cancun.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'cancun',
    'label_resort' => '',

    'main_points' => [
        0=>'100 USD en Resort Credit',
        1=>'50 USD en Tour Credit',
        2=>'Transportación Redonda Incluida',
        
    ],
    'label_color'=>'0', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Prepara tu traje de baño,  porque con nuestra magnífica promoción especial, Vacaciones sin Límite, pasarás unas vacaciones familiares en Cancún simplemente increíbles. Aprovecha esta estupenda oferta en la que recibirás un insuperable descuento de hasta 44% en tu reservación, transportación redonda desde el aeropuerto hasta tu hotel y un 150 dólares en resort credits para que los disfrutes en alimentos y bebidas, tours, masajes en nuestro Spa y productos de The Royal Market. 
        </p>
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            * El plan <b>Todo Incluido</b> está disponible en The Royal Cancun y The Royal Sands. El plan <b>Solo Hospedaje</b> está disponible en The Royal Caribbean y The Royal Islander.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Transportación de aeropuerto redonda gratis para todos. (en servicio compartido)</li>
                            <li>150 Dólares en Resort Credits divididos en:</li>
                            <ul>
                                <li>100 dólares de resort credit</li>
                                <li>50 dólares de Tour Credit.</li>
                            </ul>
                            <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service las 24 horas.</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis.</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Cancun All Suites Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'358',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2880475',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Sands Resort & Spa All Inclusive',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'251',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2880540',
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
                        <li>Transportación de aeropuerto redonda gratis para todos. (en servicio compartido)</li>
                        <li>150 Dólares en Resort Credits divididos en:</li>
                        <ul>
                            <li>100 dólares de resort credit</li>
                            <li>50 dólares de Tour Credit.</li>
                        </ul>
                        <li>Niños de hasta 12 años de edad se hospedan gratis(usando camas existentes).</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                    </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'115',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2880616',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'126',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2880603',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
            ],

        ],        
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
    
        <ul>
            <li>Tanto el Resort Credit como el Tour Credit son por reservación.</li>
            <li>Tanto el Resort Credit como el Tour Credit no deben ser considerados como dinero en efectivo</li>
            <li>Estos créditos no podrán combinarse con otras promociones ni descuentos.</li>
        </ul>

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'4',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
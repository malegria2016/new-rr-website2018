<?php

return [
    'slug' => 'verano-cancun',
    'title' => 'Cancún: Verano Todo el Año',
    'thumbnail' => asset('img/deals/verano-cancun.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'label_resort' => '',    
    'title_seo' => 'Cancun Oferta de Verano | Royal Reservations',
    'alt_seo' => 'Cancun Oferta de Verano',
	'metadescription' => '',
    'main_points' => [
        0=>'44% DTO',
        1=>'100 USD RESORT CREDIT',
        2=>'50 USD TOUR CREDIT',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Es el momento perfecto para comenzar a planear tus vacaciones en familia y viajar a las idílicas playas de Cancún en cualquier época del año. Descubre cada uno de los rincones de este magnífico destino del Caribe Mexicano y disfruta de las actividades familiares acuáticas y terrestres, tanto culturales como divertidas  que encontrarás por doquier. Además con esta estupenda promoción, recibirás un descuento especial de hasta 44% en tu reservación, un Resort Credit por $150 dólares para disfrutar de alimentos, bebidas, tours, masajes y productos de nuestro Royal Market.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
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
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'369',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2959061',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2959074',
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
                            <li>150 Dólares en Resort Credits divididos en:</li>
                            <ul>
                                <li>100 dólares de resort credit</li>
                                <li>50 dólares de Tour Credit.</li>
                            </ul>
                            <li>Niños de hasta 12 años de edad se hospedan gratis(usando camas existentes).</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'111',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2959132',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'122',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2959101',
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
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
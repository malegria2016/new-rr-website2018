<?php

return [
	'metadescription' => 'With our special sale of the month, you will spend a wonderful family vacation in St. Maarten!',
	'alt_seo' => 'Sint Maarten Special Vacation Offer',
	'title_seo' => 'Days In Paradise: Sint Maarten',	
    'title' => 'Days In Paradise: Sint Maarten',
    'slug' => 'days-in-paradise-sint-maarten',
    'thumbnail' => asset('img/deals/days-in-paradise-sint-maarten.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'sint-maarten',
    'label_resort' => '',
    'main_points' => [
        0=>'Special discount on your reservation',
        1=>'Buffet breakfast for all suite occupants',
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Take advantage today of this amazing promotion and make your reservation with us to get a magnificent 48% discount, plus complimentary buffet breakfast for all occupants of the suite. Enjoy the beautiful white sandy beaches of the Caribbean in St. Maarten
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                        <ul>
                            <li>Special discount on your reservation</li>
                            <li>Buffet breakfast for all suite occupants</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'126',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'157',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
               
            ],

        ],        
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>1 night-stay minimum required</p>
        

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
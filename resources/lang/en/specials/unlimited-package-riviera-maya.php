<?php

return [
	'metadescription' => 'With Royal Reservations you and your family will experience an unforgettable vacation in  Riviera Maya!',
	'alt_seo' => 'Riviera Maya: Unlimited Package',
	'title_seo' => 'Riviera Maya: Unlimited Package',	
    'title' => 'Riviera Maya: Unlimited Package',
    'slug' => 'unlimited-package-riviera-maya',
    'thumbnail' => asset('img/deals/unlimited-package-riviera-maya.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'100 USD Resort Credit per Reservation',
        1=>'1 complimentary 30-minute massage for one person',
        2=>'Premium Roundtrip Airport transportation',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The Riviera Maya is waiting for you to visit its paradisiacal beaches of fine sand and enjoy the best of life in front of the Caribbean\'s most beautiful sea in Grand Residences Riviera Cancun. Take advantage of this fantastic promotion in which you will receive an unbeatable special discount of 42% on your reservation
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Gourmet All Inclusive',
            'description'=>'
                        
                <ul>
                    <li>Special Discount on your Reservation</li>
                    <li>100 USD Resort Credit per Reservation</li>
                    <li>1 complimentary 30-minute massage for one person</li>
                    <li>All Gourmet meals and snacks</li>
                    <li>Premium House Brand Beverages</li>
                    <li>Limitless 24 hours Room Full Service</li>
                    <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                    <li>Bottle of Tequila</li>
                    <li>Daily Fresh and Dried Fruits</li>
                    <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                    <li>High Speed Internet Access in rooms & common areas</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'470',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920355',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            
        ],
        1=>[
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your Reservation</li>
                            <li>100 USD Resort Credit per Reservation</li>
                            <li>1 complimentary 30-minute massage for one person</li>
                            <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay free (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'280',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920709',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed and Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your Reservation</li>
                            <li>100 USD Resort Credit per Reservation</li>
                            <li>1 complimentary 30-minute massage for one person</li>
                            <li>Daily breakfast for all paid occupants</li>
                            <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free Breakfast with Mom & Dad (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Bed and Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'308',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920784',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        
    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'3',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
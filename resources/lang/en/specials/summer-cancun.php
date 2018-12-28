<?php

return [
    'slug' => 'summer-cancun',
    'title' => 'Cancun: Summer All Year Long',
    'thumbnail' => asset('img/deals/summer-cancun.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'title_seo' => 'Summer Special Cancun | Royal Reservations',
    'alt_seo' => 'summer special cancun',
	'metadescription' => 'With this great promotion you will receive a special discount of up to 44% on your reservation, a $150 USD Resort Credit to spend at the resort.',
    'label_resort' => '',
    'main_points' => [
        0=>'44% OFF',
        1=>'100 USD RESORT CREDIT',
        2=>'50 USD TOUR CREDIT',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            It is the perfect time to start planning your family vacation in order to travel to Cancun\'s idyllic beaches any time of the year. Discover each and every corner of this magnificent beach destination of the Mexican Caribbean and enjoy the water and land family activities, both cultural and fun, that you will find everywhere during your vacations. In addition, with this great promotion you will receive a special discount of up to 44% on your reservation, a $150 USD Resort Credit to enjoy meals and beverages, excellent tours, relaxing massages and quality products from our Royal Market.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>150 USD in Resort Credits divided by:</li>
                            <ul>
                                <li>100 USD Resort Credit</li>
                                <li>50 USD Tour Credit</li>
                            </ul>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
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
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>150 USD in Resort Credits divided by:</li>
                            <ul>
                                <li>100 USD Resort Credit</li>
                                <li>50 USD Tour Credit</li>
                            </ul>
                            <li>Children up to 12 years old stay free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
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
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>The Tour Credit and the Resort Credit are per reservation</li>
            <li>The Tour Credit and the Resort Credit must not be considered as cash money.</li>
            <li>These Credits cannot be combined with other promotions or discounts.</li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
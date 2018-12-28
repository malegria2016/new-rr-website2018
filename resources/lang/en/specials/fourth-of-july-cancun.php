<?php

return [
	'metadescription' => 'Celebrate this 4th of July by booking your next Cancun Vacation with Royal Reservations. BOOK NOW!',
	'alt_seo' => '4th of July Sale Cancun',
	'title_seo' => '4th of July Cancun - Sale | Royal Reservations',	
    'title' => 'Cancun: 4th Of July',
    'slug' => 'fourth-of-july-cancun',
    'thumbnail' => asset('img/deals/fourth-of-july-cancun.jpg'),
    'expiration'=>'09/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019',
            'fin'=>'12/31/2019',
        ],
        
    ],
    'destino'=>'cancun',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        1=>'Children up to 12 years old stay for free',
        2=>'Free high speed Wi-Fi in rooms & common areas',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Celebrate this 4th of July by booking your next Cancun Vacation with Royal Reservations, BOOK NOW and take advantage of our 4th of July Flash Sale available only for a limited time, choose between All Inclusive or Just Accommodations and get up to 47% OFF your reservation when booking the suite of your choice. Enjoy the wonderful blue color from the Caribbean Sea, delight your palate with delicious specialties served in our different restaurants and get that unwinding rest you deserve in our comfortable suites and villas. Go ahead and start planning those desired vacations to the Mexican Caribbean only with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount</li>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'262',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'324',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
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
                            <li>Special Discount</li>
                            <li>Children up to 12 years old stay (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
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
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        3 nights-stay minimum required
    ',

    
    
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
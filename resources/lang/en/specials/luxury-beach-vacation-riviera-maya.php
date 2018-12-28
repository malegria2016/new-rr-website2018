<?php

return [
    'slug' => 'luxury-beach-vacation-riviera-maya',
    'title' => 'RIVIERA MAYA - Luxury Beach Vacation Sale',
    'subtitle' => '',
    'thumbnail' => asset('img/deals/luxury-beach-vacation-riviera-maya.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'title_seo' => 'Luxury Beach Vacation Sale in Riviera Maya | Royal Reservations',
    'alt_seo' => 'Luxury Vacation Sale in Riviera Maya',
	'metadescription' => 'Receive a special discount and the grant 200 dollar Resort Credit valid for meals and beverages, SPA treatments and fine products at the  Gourmet Food Market.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'label_resort' => '',
    'main_points' => [
        0=>'$200 USD Resort Credit',
        1=>'Premium Roundtrip Transfers',
        2=>'All Inclusive, Bed & Breakfast or Accommodation Only',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Are you yearning for stress-free vacations in a place of natural beauty facing the ocean and with world class services? Grand Residences is your private haven to forget about everything, and now is your chance to book your suite as we are playing all our cards to bring you the best Offer of this Summer! Receive a special discount and the grant 200 dollar Resort Credit valid for meals and beverages, SPA treatments and fine products at the  Gourmet Food Market. Choose among our 3 plans: All Inclusive, Bed & Breakfast, and Room Only.
            Our Riviera Maya beachfront resort has been awarded several times by Tripadvisor due to its first class services and ultimate amenities that will enchant every traveler that is used to the best in life. Book now your luxury vacation and travel anytime!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>$200 USD Resort credit</li>
                            <li>All Gourmet meals and snacks</li>
                            <li>Premium House Brand Beverages</li>
                            <li>Limitless 24 hours Room Full Service</li>
                            <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                            <li>High-Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959470',
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
                            <li>$200 USD Resort credit</li>
                            <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay free (using existing beds)</li>
                            <li>High-Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959479',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        2=>[
            'tab'=>' Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>$200 USD Resort credit</li>
                            <li>Daily breakfast for confirmed guests</li>
                            <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free breakfast with mom and dad (using existing beds)</li>
                            <li>High-Speed Internet Access in rooms & common areas</li>
                            
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Bed & Breakfast',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959484',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>The Resort Credit is per reservation, and it can only be used within Grand Residences</li>
            <li>The Resort Credit can be used to redeem in food & beverages, services at the Spa and products at the Gourmet Food Market</li>
            <li>This credit must not be considered as cash money</li>
            <li>This credit is valid only for this reservation and must be used in one single transaction at the moment of check out at the front desk, if not used it will not be available for future use and will not be refunded or transferred to other reservations. If the price of the product/service is higher than the value of the Credit, any remaining balance will be charged to the guest</li>
            <li>It cannot be combined with other promotions or discounts</li>
            <li>Book from <b>Today</b> to <b>08/31/2018</b></li>
            <li>Travel between <b>Today</b> to <b>01/04/2019</b></li>     
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
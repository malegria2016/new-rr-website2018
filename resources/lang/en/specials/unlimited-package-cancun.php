<?php

return [
	'metadescription' => 'With Royal Reservations you and your family will experience an unforgettable vacation in Cancun!',
	'alt_seo' => 'Enjoy a Cancun Special Discount plus Resort Credits',
	'title_seo' => 'Unlimited Package Cancun',	
    'title' => 'Cancun: Unlimited Package',
    'slug' => 'unlimited-package-cancun',
    'thumbnail' => asset('img/deals/unlimited-package-cancun.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'cancun',
    'label_resort' => '',
    'main_points' => [
        0=>'$100 USD Resort Credit',
        1=>'$50 USD Tour Credit',
        2=>'Free Transfers',
        
    ],
    'label_color'=>'0', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Prepare your bathing suit, because with our Unlimited Package, you will spend a formidable family vacation in Cancun. Take advantage of this great offer in which you will receive an impressive discount of up to 44% on your reservation, round transportation from the airport to your hotel and a 150 USD in Resort Credits for you to spend in food and beverages, incredible tours, massages in our Spa and products from The Royal Market.
        </p>
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">*The <b>All Inclusive</b> plan is available at The Royal Cancun & The Royal Sands <b>Room Only</b> is available at The Royal Caribbean & The Royal Islander</p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'All Inclusive Cancun Offer',
            'description'=>'
                        
                        <ul>
                            <li>Free roundtrip airport transportation for all (Shared Service)</li>
                            <li><b>$150 USD</b> in Resort Credits divided by:</li>
                            <ul>
                                <li>$100 USD Resort Credit</li>
                                <li>$ 50 USD Tour Credit</li>
                            </ul>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
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
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only Cancun Offer',
            'description'=>'
                        
                    <ul>
                        <li>Free roundtrip airport transportation for all (Shared Service)</li>
                        <li><b>$150 USD</b> in Resort Credits divided by:</li>
                        <ul>
                            <li>$100 USD Resort Credit</li>
                            <li>$ 50 USD Tour Credit</li>
                        </ul>
                        <li>Children up to 12 years old stay free (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms & common areas</li>
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
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
    
        <ul>
            <li>The Tour Credit and the Resort Credit are per reservation</li>
            <li>The Tour Credit and the Resort Credit must not be considered as cash money.</li>
            <li>These Credits cannot be combined with other promotions or discounts.</li>
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
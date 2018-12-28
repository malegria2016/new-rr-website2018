<?php

return [
    'slug' => 'last-chance-sale-cancun',
    'title' => 'CANCUN - Last Chance Sale',
    'thumbnail' => asset('img/deals/last-chance-sale-cancun.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'title_seo' => 'Last Chance Sale to Travel to Cancun! | Royal Reservations',
    'alt_seo' => 'Sale to Travel to Cancun',
	'metadescription' => 'Receive 44% discount on your reservation including a 150-dollar Resort Credit that applies to delicious meals, beverages, thrilling tours, spa treatments and Royal Market products.',
    'label_resort' => '',
    'main_points' => [
        0=>'44% OFF',
        1=>'$150 USD Resort Credit',
        2=>'All Inclusive or Accommodation Only',
        3=>'Children stay free',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This is your chance to book the last Summer Offer and the best of the season to enjoy Cancun paradise anytime of the year. Receive 44% discount on your reservation including a 150-dollar Resort Credit that applies to delicious meals, beverages, thrilling tours, spa treatments and Royal Market products. Start planning your next family vacations in Cancun and choose between our All Inclusive Plan and our Room Only.
            Our Cancun beachfront Resorts offers incredible amenities and impeccable services for you and your family to enjoy: ample suites, infinity pools, kids clubs, activities and exquisite restaurants. Live memorable days under the Caribbean sun facing the beautiful turquoise waters of the ocean. This opportunity is at your very own hand, pack your flip flops now!
            All Inclusive applies at the Royal Cancun and The Royal Sands
            Accommodation Only applies at The Royal Caribbean & The Royal Islander
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>$150 USD Resort Credit</li>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high-speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'368',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2959312',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2959347',
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
                            <li>$150 USD Resort Credit</li>
                            <li>Children up to 12 years old stay for free (using existing beds)</li>
                            <li>Free high-speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'110',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2959388',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'121',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2959378',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],        
        ],
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>The Resort Credit is per reservation, and it can only be applied at the Front Desk directly to your club bill upon check out.</li>
            <li>This Credit must not be considered as cash money.</li>
            <li>This Credit are valid only for this reservation and must be used in one single transaction each, if not used it will not be available for future use, will not be refunded or transferred to other reservations. When using this credit, if the price of the product/service paid with this credit is higher than the credit value, any remaining balance will have to be paid by the guest.</li>
            <li>This Credit cannot be combined with other promotions or discounts</li>
            <li>Room Only promotions does not include meals or drinks</li>
            
            <li>Book from <b>Today</b> to <b>08/31/2018</b></li>
            <li>Travel between <b>Today</b> to <b>08/31/2019</b></li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
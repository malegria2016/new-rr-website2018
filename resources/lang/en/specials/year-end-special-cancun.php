<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-cancun',
    'thumbnail' => asset('img/deals/year-end-special-cancun.jpg'),
    'title' => 'Cancun: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun Vacations!',
    'title_seo' => 'New Year Cancun Vacations | Royal Reservations',
    'alt_seo' => 'Cancun Vacation Special Offer',
	'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'46% OFF',
        1=>'$100 USD Spa Credit',
        2=>'All Inclusive or Accommodation Only Plans',
        3=>'Children stay free',
        4=>'Free high-speed WiFi'
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo! <br /><br />Live an amazing Cancun vacation, unwinding on the beach and with fun activities in a beachfront family resort, offering the best European Plan or a fabulous All Inclusive. Take advantage of this vacation deal and get an exclusive discount of 46% when booking, a $100 USD Spa Credit to enjoy in different wellness treatments and relaxing massages and free accommodations for children. <br /><br />Book now with Royal Reservations and enjoy your vacations anytime of this or the next year!
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>100 USD Spa Credit </li>
                        <li>Unlimited meals &amp; drinks </li>
                        <li>24 hours room service </li>
                        <li>Children up to 12 years old stay &amp; eat for free </li>
                        <li>Free high-speed Wi-Fi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'4.5',
                    'img'=>'the-royal-sands',
                    'price'=>'229',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3481558',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'4.5',
                    'img'=>'the-royal-cancun',
                    'price'=>'329',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3481526',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Spa Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments.<br />A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest.<br />The Spa Credit must not be considered as cash money.<br />The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.<br />The Spa Credit cannot be combined with other promotions or discounts.<br />When choosing the All-Inclusive plan, some surcharges will apply for premium food and beveragesChildren up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available<br />When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.</p>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>100 USD Spa Credit</li>
                        <li>Children up to 12 years old stay free</li>
                        <li>Free high-speed Wi-Fi </li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'109',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3481636',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'109',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3481619',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>The Spa Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments. <br />A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest. <br />The Spa Credit must not be considered as cash money. <br />The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill. <br />The Spa Credit cannot be combined with other promotions or discounts. <br />Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available <br />This promotion does not include meals or drinks.</p>
            ',
        ],
    ],
    'code'=>'',
];
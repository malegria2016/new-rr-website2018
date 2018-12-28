<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-cancun',
    'alturaRateplan'=>'8',
    'thumbnail' => asset('img/deals/autumn-special-cancun.jpg'),
    'title' => 'Cancun: Autumn Special ',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun',

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun!',
    'title_seo' => 'Cancun Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Cancun Vacation Special Offer',
	'metadescription' => 'Take advantage of this promotion and get a discount of up to 46% on your reservation, a $50 USD Tour Credit for tours and services at the travel agency. Book now and enjoy your family vacation to Cancun with Royal Reservations',

    'label_resort' => '',
    'main_points' => [
        0=>'46% OFF',
        1=>'$50 USD Resort Credit',
        2=>'Free Transfers',
        3=>'All Inclusive or Accommodation Only Plans',
        4=>'Children stay free',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            We are already in autumn and you haven&rsquo;t travelled to Cancun to the vacation of your dreams! Now, more than ever, we are making things easier for you to enjoy some days at the warm beaches of the Mexican Caribbean with top services and amenities in our resorts. Book now and receive a special discount with up to 46% exclusive in our Royal Reservations website. Also, we are granting 50 USD Resort Credit to be applied on massages, tours and more and a Complimentary Round Trip from and to the Airport.<br />Cancun is a Top destination in the world, for its amazing resorts and restaurants, its beautiful turquoise beaches, and it\'s warm weather. Come with your family and live unforgettable moments!<br /><br />Travel anytime this year or the next one. Children are free to stay with no cost!
        </p>
        <ul>
            <li>All Inclusive applies at the Royal Cancun and The Royal Sands</li>
            <li>Room Only applies at The Royal Caribbean & The Royal Islander</li>
        </ul>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Free roundtrip airport transportation</li>
                        <li>50 USD Tour Credit</li>
                        <li>Unlimited meals &amp; drinks</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free</li>
                        <li>Free high speed Wi-Fi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'202',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3329261',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'288',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3329225',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <ul>
                    <li>The Resort Credit must not be considered as cash money.</li>
                    <li>The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the travel agency, spa, restaurants and bars and the Royal Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                    <li>The Resort Credit cannot be combined with other promotions or discounts.</li>
                    <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter.</li>
                    <li>Service will be provided in shared service.</li>
                    <li>The transportation service is available for flights arriving from 5am to 11:59pm &amp; flights leaving 7am to 9pm.</li>
                    <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee.</li>
                    <li>When choosing the All Inclusive plan, some surcharges will apply for premium food and beverages</li>
                    <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                    <li>When staying at All Inclusive resorts choosing the All Inclusive plan (i.e. The Royal Cancun or The Royal Sands)</li>
                    <li>Children up to 12 years old can eat for free accompanied by their parents, other resorts are excluded.</li>
                </ul>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Free roundtrip airport transportation</li>
                        <li>50 USD Tour Credit</li>
                        <li>Children up to 12 years old stay &amp; eat for free </li>
                        <li>Free high speed Wi-Fi</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'122',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3329452',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'130',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3329331',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>The Resort Credit must not be considered as cash money.</li>
                        <li>The Resort Credit is per reservation, and it can only be redeemed at the front desk upon check out, it can be applied against charges from the travel agency, spa, restaurants and bars and the Royal Market, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>The Resort Credit cannot be combined with other promotions or discounts.</li>
                        <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter.</li>
                        <li>Service will be provided in shared service.</li>
                        <li>The transportation service is available for flights arriving from 5am to 11:59pm &amp; flights leaving 7am to 9pm.</li>
                        <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee.</li>
                        <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                        <li>This rate plan does not include meals or drinks.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
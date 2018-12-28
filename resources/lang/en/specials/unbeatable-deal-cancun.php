<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'unbeatable-deal-cancun',
    'thumbnail' => asset('img/deals/unbeatable-deal-cancun.jpg'),
    'title' => 'Cancun: Unbeatable Deal',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun Vacations!',
    'title_seo' => 'Unbeatable Deal Cancun Vacations | Royal Reservations',
    'alt_seo' => 'Cancun Vacation Special Offer',
	'metadescription' => 'Take advantage of this promotion and get a discount of up to 46% on your reservation, a $100 USD Resort Credit + 100 USD Spa Credit. Book now and enjoy your family vacation to Cancun with Royal Reservations.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'46% OFF',
        1=>'$100 USD Resort Credit  + $100 USD Spa Credit',
        2=>'Free Transfers',
        3=>'All Inclusive or Accommodation Only Plans',
        4=>'Children stay free',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Unwind and relax with this incredible Royal Reservations offer and start planning your Cancun vacations. <br /><br />Book now and receive a fantastic discount of up to 46% on your accommodation, to travel at any time of this year or the next one, with the best All Inclusive or Accommodation Only plans. Plus, get a 200 USD Resort Credit valid for different hotel services such as massages, tours and more. Find what you need with the exclusive amenities and impeccable facilities offered by our resorts in Cancun. 
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
                        <li>100 USD Resort Credit</li>
                        <li>100 USD Spa Credit</li>
                        <li>Unlimited meals &amp; drinks</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free</li>
                        <li>Free high-speed Wi-Fi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'229',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3411825',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'329',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3411792',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>These credits must not be considered as cash money.</li>
                        <li>These credits are per reservation, and it can only be redeemed at the resort, see more details on your confirmation letter.</li>
                        <li>If these credits are not used they will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>These credits cannot be combined with each other, other promotions or discounts.</li>
                        <li>When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages</li>
                        <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                        <li>When staying at All Inclusive resorts choosing the All-Inclusive plan (i.e. The Royal Cancun or The Royal Sands) Children up to 12 years old can eat for free accompanied by their parents, other resorts are excluded. </li>
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
                        <li>100 USD Resort Credit</li>
                        <li>100 USD Tour Credit</li>
                        <li>Children up to 12 years old stay free</li>
                        <li>Free high-speed Wi-Fi</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'109',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3411876',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>These credits must not be considered as cash money.</li>
                        <li>These credits are per reservation, and it can only be redeemed at the resort, see more details on your confirmation letter.</li>
                        <li>If these credits not used they will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>These credits cannot be combined with each other, other promotions or discounts.</li>
                        <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                        <li>This rate plan does not include meals or drinks.</li>
                    </ul>
            ',
        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Free daily buffet breakfast for all confirmed guest</li>
                        <li>Children up to 12 years old stay free using existing beds</li>
                        <li>Free high-speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'99',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    
                    <ul>
                        <li>This promotion includes a daily breakfast per person confirmed in our system. If a breakfast is not consumed during the day, it will not be refunded or accumulated for the next day. In case of having additional guests, we suggest you contact us before your arrival in order to make the necessary adjustments (and charges that may apply) to your reservation. From the day of arrival and onwards, additional guest will not have breakfast included, however, breakfast will be available at the resort restaurant at its current price.</li>
                        <li>Buffet breakfast is valid only at the &ldquo;Tradewinds&rdquo; restaurant, other restaurants are excluded.</li>
                        <li>Breakfast is served from 7am to 11am every day.</li>
                        <li>Additional meals and drinks will have an additional charge.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
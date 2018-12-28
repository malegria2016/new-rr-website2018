<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'unbeatable-deal-playa-del-carmen',
    'thumbnail' => asset('img/deals/unbeatable-deal-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Unbeatable Deal',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this exclusive offer and Book Now your next vacations!',
    'title_seo' => 'Unbeatable Deal Playa del Carmen Vacations | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'With this great special promotion you will get a great discount of 46% on your All Inclusive plan reservation, plus special benefits such as a $50 USD Tour Credit for you to use in exciting tours and services at the travel agency',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'46% OFF',
        1=>'$100 USD Resort Credit  + $100 USD Spa Credit',
        2=>'Free Transfers',
        3=>'All Inclusive or Accommodation Only',
        4=>'Children stay free',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Pack your flip flops and bathing suit! Now is the time for that getaway to paradise! Book now and receive a fantastic discount of up to 46% on your accommodation, to travel anytime this year or the next one, with the best All Inclusive Plan in one of the best tourist destinations of the world. Plus, get a 200 USD Resort Credit valid for different hotel services such as massages, tours and more. Find exclusive amenities and facilities offered by The Royal Haciendas Resort in Playa del Carmen.
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
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3411851',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>The credits must not be considered as cash money.</li>
                        <li>The credits are per reservation, and it can only be redeemed at the resort, see more details on your confirmation letter.</li>
                        <li>If not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill.</li>
                        <li>These credits cannot be combined with each other, other promotions or discounts.</li>
                        <li>Applicable surcharges for premium food and beverages</li>
                        <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                        <li>When choosing the All-Inclusive plan, Children up to 12 years old can eat for free accompanied by their parents, other resorts are excluded.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
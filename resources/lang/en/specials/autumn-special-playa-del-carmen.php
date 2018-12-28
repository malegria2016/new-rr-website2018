<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-playa-del-carmen',
    'thumbnail' => asset('img/deals/autumn-special-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Autumn Special ',
    'expiration'=>'11/05/2018	', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this exclusive offer and Book Now your next vacations!',
    'title_seo' => 'Playa del Carmen Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'With this great special promotion you will get a great discount of 46% on your All Inclusive plan reservation, plus special benefits such as a $50 USD Tour Credit for you to use in exciting tours and services at the travel agency',

    'label_resort' => '',
    'main_points' => [
        0=>'46% OFF',
        1=>'$50 USD Resort Credit ',
        2=>'Free Transfers',
        3=>'All Inclusive or Accommodation Only',
        4=>'Children stay free',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            A trendy tropical destination must be in your bucket list this autumn. The weather is perfect, the ocean is glowing, the party has started, and you are only missing! Playa del Carmen is a beautiful paradise in the Mexican Caribbean coastlines, offering the best of a beach vacation.<br />Receive with Royal Reservations the amazing discount of 46% on your hotel reservation. But that\'s not all! We are giving you a 50 dollar Resort Credit to be applied in different services such as massages, tours and more, plus a complimentary Roundtrip Airport transportation so you don\'t need to worry about anything.<br />Don&rsquo;t let this slip from your hands and enjoy an awesome vacation with your family or friends in Playa del Carmen. Book now and travel anytime this year or the next one!
        </p>
        
    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation </li>
                        <li>Free roundtrip airport transportation for all (Shared Service) </li>
                        <li>50 USD Tour Credit </li>
                        <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages) </li>
                        <li>24 hours room service </li>
                        <li>Children up to 12 years old stay &amp; eat for free </li>
                        <li>Free high speed Wi-Fi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'192',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3329288',
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
                        <li>Applicable surcharges for premium food and beverages</li>
                        <li>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available</li>
                        <li>When choosing the All Inclusive plan, Children up to 12 years old can eat for free accompanied by their parents, other resorts are excluded.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
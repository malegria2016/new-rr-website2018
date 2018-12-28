<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-sint-maarten',
    'thumbnail' => asset('img/deals/autumn-special-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Autumn Special ',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1	',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next vacations to the Caribbean!',
    'title_seo' => 'St. Maarten Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'St. Maarten Vacation Special Offer',
	'metadescription' => 'Start today to plan those family vacations you crave and get an special discount of up to 48% on your reservation, which includes free buffet breakfasts for all occupants of the suite and enjoy the beautiful beaches of the St. Maarten island.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>',
    'main_points' => [
        0=>'48% OFF',
        1=>'Free Buffet Breakfast for all',
        2=>'Children stay free',
        3=>'Free WiFi',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Do you have in mind a getaway to the Caribbean and you are trying to catch a special offer? Well, we have good news for you! Royal Reservations is giving away special discounts for this autumn season! The special is 48% discount on your reservation including free daily buffet breakfast! Was this the signal you have been waiting for? Book now! <br />St Maarten is a laid back island in the Caribbean were you will enjoy the best of two cultures: The Netherlands and France, many outdoor activities and tours, delicious cuisine and beautiful beach landscapes. Book now your Room Only stay in Simpson Bay Beach Resort &amp; Marina or The Villas at Simpson Bay Beach Resort with our special discount and travel anytime this year or the next one. <br />Live some great vacations in St Maarten with your family, spouse or friends!
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your reservation </li>
                        <li>Free daily buffet breakfast </li>
                        <li>WiFi in rooms and common areas <br /></li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <ul>
                    <li>This promotion includes a daily breakfast per person confirmed in your confirmation letter.</li>
                    <li>Additional meals and drinks will have an additional charge.</li>
                </ul>
            ',
        ],
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'the-royal-caribbean-resort-special',
    'thumbnail' => asset('img/deals/the-royal-caribbean-resort-special.jpg'),
    'title' => 'Cancun - The Royal Caribbean Resort Deal',
    'expiration'=>'04/30/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel between Today and April 30th, 2019!',
    'box_benefits'=>'Choose between Room + Free Breakfasts or Room + Free Transfers!',
    'title_seo' => 'The Royal Caribbean Resort in Cancun Deal | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Resort Special',
	'metadescription' => '',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'50% + 10%',
        1=>'50% + 10% OFF',
        2=>'Choose between: Free Transfers or Free Breakfasts',
        3=>'Room Only Plan',
        4=>'Children stay free',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50% + 10%', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This incredible vacation deal will take you to discover the beautiful white sand beaches of Cancun. Bathe in the blue of the ocean and have fun with water and land activities, taste the delicious Mexican and international cuisine, and learn about the culture of the destination. Make the most of your vacations with this promotion and receive a special discount of 50% plus an additional 10% when booking the suite of your choice at The Royal Caribbean, a beachfront family resort in Cancun, and choose between free daily buffet breakfast all suite guests or free transportation to/from the airport.<br />Book now and travel anytime, and experience the perfect beach family vacations with Royal Reservations!
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>50% off + additional 10% discount</li>
                        <li>Free roundtrip airport transportation</li>
                        <li>Children up to 12 years old stay for free using existing beds</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'96',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021296',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter.</li>
                        <li>Service will be provided in shared service.</li>
                        <li>The transportation service is available for flights arriving from 5am to 11:59pm &amp; flights leaving 7am to 9pm.</li>
                        <li>Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee.</li>
                        <li>This promotion does not include meals or drinks.</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                    <ul>
                    <li>50% off + additional 10% discount</li>
                    <li>Free daily buffet breakfast for all confirmed guest </li>
                    <li>Children up to 12 years old stay (using existing beds) &amp; eat breakfast for free with Mom &amp; Dad </li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'96',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>This promotion includes a daily buffet breakfast per person confirmed in your confirmation letter.</li>
                        <li>Additional meals and drinks will have an additional charge.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'halloween-special-sint-maarten',
    'thumbnail' => asset('img/deals/halloween-special-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Halloween Special',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next vacations to the Caribbean!',
    'title_seo' => 'St. Maarten Vacation Halloween Special Offer | Royal Reservations',
    'alt_seo' => 'St. Maarten Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Halloween Special only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'50% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Before the year ends, we are celebrating Halloween by giving out a special offer: 45% discount + an additional 10% exclusive of Royal Reservations available for a few days only! Travel to St Maarten with your family and enjoy the best of the Caribbean this year or the next one. Stay at Simpson Bay Beach Resort &amp; Marina or The Villas at Simpson Bay Beach Resort, two of our great resorts offering world-class services and amenities.
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your reservation</li>
                        <li>WiFi in rooms and common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Simposon Bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'115',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2808359',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'124',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2808366',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>3 nights-stay minimum required</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
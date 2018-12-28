<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'black-friday-sint-maarten',
    'thumbnail' => asset('img/deals/black-friday-sint-maarten.jpg'),
    'title' => 'Sint Maarten: Black Friday',
    'expiration'=>'11/26/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/16/2018','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next vacations to the Caribbean!',
    'title_seo' => 'St. Maarten Vacation Black Friday | Royal Reservations',
    'alt_seo' => 'St. Maarten Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Black Friday only available for a few days! BOOK NOW AND GET A SPECIAL 53% OFF',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //
    'main_points' => [
        0=>'53% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Black Friday has arrived to St. Maarten with our special promotion! Book now and travel anytime this year or the next one and get an exclusive 53% discount on your reservation. Take advantage of this offer, only valid for a few days! Enjoy beautiful beach landscapes, all kinds of activities and the natural wonders of this beautiful Caribbean island. Choose between Simpson Bay Beach Resort and The Villas at Simpson Bay and get all services, entertainment and amenities by Royal Reservations.
        </p>
        <p>This Offer is Valid Until: November 26th 2018. Travel Between November 21st 2018 to December 15th 2018</p>

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
                    'name'=>'Simpson bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'109',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'3452343',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson bay Resort',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'117',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'3452371',
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
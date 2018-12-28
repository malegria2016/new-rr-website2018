<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-st-maarten',
    'thumbnail' => asset('img/deals/year-end-special-st-maarten.jpg'),
    'title' => 'St. Maarten: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'sint-maarten', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next vacations to the Caribbean!',
    'title_seo' => 'New Year St Maarten Vacations | Royal Reservations',
    'alt_seo' => 'St. Maarten Vacation Special Offer',
	'metadescription' => 'Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'48% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! <br /><br />With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach. Take advantage of this exclusive promotion and get a fantastic 48% discount to enjoy anytime of this or the next year. Live the best European Plan vacations at Simpson Bay Beach Resort &amp; Villas or The Villas at Simpson Bay Beach Resort. <br /><br />Book now with Royal Reservations and start planning your fabulous St. Maarten vacations!            
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
                    'name'=>'Simpson Bay Resort',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'3481581',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay',
                    'stars'=>'4',
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'3481611',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>This promotion does not include meals or drinks.</p>
            ',
        ],
    ],
    'code'=>'',
];
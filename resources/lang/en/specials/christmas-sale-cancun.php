<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'christmas-sale-cancun',
    'thumbnail' => asset('img/deals/christmas-sale-cancun.jpg'),
    'title' => 'Cancun: Christmas Sale',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now this Special Christmas Sale!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun Vacations!',
    'title_seo' => 'Christmas Special Cancun Vacations | Royal Reservations',
    'alt_seo' => 'Cancun Vacation Special Offer',
	'metadescription' => 'Take advantage of this flash sale available only for a few days and spend an amazing vacation staying in any of the great beachfront resorts available with us.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'40%+12% OFF',
        1=>'All Inclusive or Accommodation Only Plans',
        2=>'Children stay free',
        3=>'Free high-speed WiFi',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Live your romantic getaway, a dream family vacation or to a fun trip with your friends with Royal Reservations! <br /><br />Take advantage of this flash sale available only for a few days and spend an amazing vacation staying in any of the great beachfront resorts available with us. Receive a 40% discount + a 12% exclusive discount when booking with Royal Reservations. Get also great benefits as kids staying free and the possibility to enjoy your vacations the rest of this year or the next one. <br /><br />Book now!
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
                    'stars'=>'4.5',
                    'img'=>'the-royal-sands',
                    'price'=>'220',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'4.5',
                    'img'=>'the-royal-cancun',
                    'price'=>'217',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages<br />Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available<br />When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.<br /></p>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Children up to 12 years old stay free</li>
                        <li>Free high-speed Wi-Fi</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'92',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'107',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>The Spa Credit cannot be combined with other promotions or discounts.<br />Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available<br />This promotion does not include meals or drinks.</p>
            ',
        ],
    ],
    'code'=>'',
];
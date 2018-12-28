<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'black-friday-cancun',
    'thumbnail' => asset('img/deals/black-friday-cancun.jpg'),
    'title' => 'Cancun: Black Friday',
    'expiration'=>'11/26/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'07/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun Vacations!',
    'title_seo' => 'Cancun Vacation Black Friday Offer | Royal Reservations',
    'alt_seo' => 'Cancun Black Friday',
	'metadescription' => 'Hurry and take advantage of this Black Friday Offer only available for a few days! BOOK NOW AND GET A SPECIAL 49% OFF',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'49% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            In Royal Reservations we are thrilled to announce the Black Friday Offer for your next Cancun vacations! Take advantage of this promotion that will last a few days only. Book today and get a 49% discount on your reservation.  Travel anytime this year or the next one with the best All Inclusive or Room Only Plans. Choose among our 4 beachfront resorts in Cancun with impeccable amenities, great facilities and the suite of your preference to enjoy amazing days by the Caribbean Sea with your family. 
        </p>
        <p>This Offer is Valid Until: November 26th 2018. Travel Between November 21st  2018 to July 15th 2019</p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount</li>
                        <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages)</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'4.5',
                    'img'=>'the-royal-sands',
                    'price'=>'200',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3449852',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'4.5',
                    'img'=>'the-royal-cancun',
                    'price'=>'210',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3449741',
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
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount</li>
                        <li>Children up to 12 years old stay (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'89',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021305',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'103',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3451921',
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
<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'halloween-special-cancun',
    'thumbnail' => asset('img/deals/halloween-special-cancun.jpg'),
    'title' => 'Cancun: Halloween Special ',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Cancun Vacations!',
    'title_seo' => 'Cancun Vacation Halloween Special Offer | Royal Reservations',
    'alt_seo' => 'Cancun Halloween Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Halloween Special only available for a few days! BOOK NOW AND GET A SPECIAL 47% OFF',

    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            We celebrate this &ldquo;spooky&rdquo; season with a Special Offer only valid for a very limited time. So before they say &ldquo;trick or treat&rdquo; Hurry Up, book and run away to paradise! Choose your Plan and travel anytime this year or the next one: Room Only or All Inclusive with an amazing 40% discount plus an additional 12% discount exclusive on this website only. <br />During your stay at any of our Cancun resorts, you will enjoy the best on guest service and top amenities, hallmarks of our brand. Our resorts are family friendly, with a great variety of activities such as water sports, kids club, fitness center, interactive classes, handcraft workshops, work out sessions and more. Travel to Cancun and enjoy unforgettable days in the Mexican Caribbean with Royal Reservations!
        </p>


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
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'197',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'282',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
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
                    'price'=>'119',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'127',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
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
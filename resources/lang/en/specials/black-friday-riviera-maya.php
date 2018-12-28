<?php

return [
    'alturaRateplan'=>'12',//8 líneas ó 10 líneas
    'slug' => 'black-friday-riviera-maya',
    'thumbnail' => asset('img/deals/black-friday-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Black Friday',
    'expiration'=>'11/26/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/22/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this fabulous promotion and Book Now!',
    'title_seo' => 'Riviera Maya Black Friday| Royal Reservations',
    'alt_seo' => 'Riviera Maya Vacation Special Offer',
	'metadescription' => 'Royal Reservations has prepared a unique offer for you to live a luxury family vacation in Grand Residences Riviera Maya.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'47% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This Black Friday, Royal Reservations is making your dreams come true for a Riviera Maya vacation in our luxury resort Grand Residences Riviera Cancun, located in Puerto Morelos, a serene village. Get an amazing 47% discount on your reservation. Choose among our All Inclusive, Bed & Breakfast and our Room Only Plans, and enjoy our exquisite facilities by the ocean and the various gourmet meals. The countdown has just started! Book now before this flash sale ends! Kids stay and eat for free!
        </p>
        <p>This Offer is Valid Until: November 26th 2018. Travel Between November 21st  2018 to December 21st 2019</p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>All Gourmet meals and snacks</li>
                        <li>Premium House Brand Beverages</li>
                        <li>Limitless 24 hours Room Full Service</li>
                        <li>Premium Roundtrip Airport transportation</li>
                        <li>Bottle of Tequila</li>
                        <li>Daily Fresh and Dried Fruits</li>
                        <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                        <li>High Speed Internet Access in rooms & common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'389',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452073',
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
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                        <li>Children up to 12 years old stay free (using existing beds)</li>
                        <li>High-Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'Resorts Room Only',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'232',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452098',
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

        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your Reservation</li>
                        <li>Daily breakfast for all paid occupants</li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                        <li>Children up to 12 years old stay and eat free Breakfast with Mom &amp; Dad (using existing beds)</li>
                        <li>High-Speed Internet Access in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'Resorts Bed & Breakfast',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'262',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452118',
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
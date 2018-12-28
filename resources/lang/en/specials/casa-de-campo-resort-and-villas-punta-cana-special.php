<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'casa-de-campo-resort-and-villas-punta-cana-special',
    'title' => 'PUNTA CANA - Luxury Special',
    'subtitle' => 'Travel dates between Today and January 4, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/casa-de-campo-resort-and-villas-punta-cana-special.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2020', // mm/dd/yyyy
            'fin'=>'12/31/2021', // mm/dd/yyyy
        ],   
    ],
    'destino'=>'punta-cana',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b>  Casa de Campo Resort & Villas</span>',
    'title_seo' => 'Casa de Campo Special Promo | Dominican Republic Resort',
    'alt_seo' => 'Casa de Campo Special Promo',
	'metadescription' => 'Book now and get an amazing special discount on your reservation in the accommodation of your choice.',
    'main_points' => [
        0=>'All Inclusive Bed & Breakfast or Accommodation Only',
        1=>'Children stay free',
        2=>'Complimentary High-speed WiFi',  
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Discover an immaculate paradise where golden beaches, blue Caribbean waters, golf, impeccable facilities and prime services are a hallmark, Casa de Campo Resort & Villas.
            7000 acres of pure luxury in one of the most exclusive resorts in the Caribbean is what you will live on your fabulous vacation in Punta Cana, in the Dominican Republic. Experience the utmost comfort of Elite Suites & Villas boasting select amenities, premium services and extra comfortable bedding. Delight in the endless activities of this proud member of the Leading Hotels of the World with 3 golf courses, a shooting center, an equestrian center and many other features.
            Book now with Royal Reservations and get an amazing special discount on your reservation with its unique All Inclusive Plan, Bed & Breakfast or European Plan, in the accommodation of your choice.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>Unlimited meals and drinks (some restrictions may apply)</li>
                            <li>One touring cart per room</li>
                            <li>Unlimited horseback rides</li>
                            <li>Use of the fitness center, tennis courses and non motorized water sports</li>
                            <li>One round of ¨Skeet / Trap¨ shooting</li>
                            <li>Age-appropriate children daytime activity programs</li>
                            <li>Unused Packaged features are non-refundable. Sport lessons are NOT included</li>
                            <li>Golf is not included</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                1 night stay minimum required
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>One touring cart per room</li>
                            <li>Daily turndown service</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                1 night stay minimum required
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'300',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882967',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],

        2=>[
            'tab'=>'Bed and Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed and Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>One touring cart per room</li>
                            <li>Daily breakfast for confirmed guests</li>
                            <li>Daily turndown service</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                1 night stay minimum required
            ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'320',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882969',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'code'=>'',
];
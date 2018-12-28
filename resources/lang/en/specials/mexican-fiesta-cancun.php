<?php

return [
    'slug' => 'mexican-fiesta-cancun',
    'title' => 'Mexican Fiesta Special: Cancun',
    'thumbnail' => asset('img/deals/mexican-fiesta-cancun.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'4/1/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta! - Cancún | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta  Cancun Vacations!',
	'metadescription' => 'Hurry and take advantage of this Mexican Fiesta  only available for a few days! BOOK NOW AND GET A SPECIAL 47% OFF',
    'main_points' => [
        0=>'47% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Would you like to receive an incredible discount and great benefits for your Cancun vacation? With Royal Reservations and its fabulous Mexican Fiesta Flash Sale you will have that and more!<br /><br />Start packing and get your suitcases ready, for Royal Reservations has a special offer available only for a few days specially for you to live a beach vacation full of fun, culture, delicious gastronomy and more, on the beautiful beaches of Cancun. Take advantage of this flash sale and get a fabulous 47% discount when booking the suite of your choice in All Inclusive or European Plan, in addition to the benefit of enjoying your family vacation any time of this or the next year, at any of the magnificent resorts available in Royal Reservations.<br /><br />Book now and start enjoying your family vacation in Cancun!
        </p>
        <ul>
            <li>All Inclusive available at The Royal Cancun &amp; The Royal Sands</li>
            <li>Accommodation Only available at The Royal Caribbean &amp; The Royal Islander</li>
        </ul>

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
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'262',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'324',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
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
                    <li>Special Discount</li>
                    <li>Children up to 12 years old stay (using existing beds)</li>
                    <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'117',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'133',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>3 nights-stay minimum required</p>
        <p>Book from: Today to 9/18/2018</p>
        <p>Travel from: Today to 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
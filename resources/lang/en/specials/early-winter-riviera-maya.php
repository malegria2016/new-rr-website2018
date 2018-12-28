<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'early-winter-riviera-maya',
    'title' => 'RIVIERA MAYA - Early Winter',
    'subtitle' => 'Travel dates between January 5, 2019 and April 30, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/early-winter-riviera-maya.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'01/04/2019', ], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019', 'fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '',
    'title_seo' => 'Winter Vacations in Riviera Maya | Royal Reservations',
    'alt_seo' => 'Winter Vacations in Riviera Maya',
	'metadescription' => 'Take advantage of an exclusive discount when booking your winter holidays in advance, choose between our exclusive all-inclusive plan, accommodation with breakfast or just accommodation, and also enjoy our Premium airport transportation.',
    'main_points' => [
        0=>'Premium Roundtrip Transfers',
        1=>'All Inclusive, Bed & Breakfast or Accommodation Only',
        
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Winter is best lived in by the beach and at Royal Reservations we have the perfect deal to start planning your long-awaited vacation luxury family vacation in the Mexican Caribbean.<br /><br />There is no better place to spend an incredible vacation in the Riviera Maya than Grand Residences Riviera Cancun, a family resort rated as one of the top 25 best luxury hotels in Mexico by TripAdvisor; there, you will live incredible moments along with your loved ones surrounded by luxury, comfort and exclusive amenities.<br /><br />Take advantage of an exclusive discount when booking your winter holidays in advance, choose between our exclusive all-inclusive plan, accommodation with breakfast or just accommodation, and also enjoy our Premium airport transportation<br /><br />Enjoy a winter full of sun, sea and sand at Grand Residences Riviera Cancun with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special advance booking discount on your reservation</li>
                        <li>All Gourmet meals and snacks</li>
                        <li>Premium House Brand Beverages</li>
                        <li>Limitless 24 hours Room Full Service</li>
                        <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                        <li>Bottle of Tequila</li>
                        <li>Daily Fresh and Dried Fruits</li>
                        <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                        <li>High Speed Internet Access in rooms &amp; common areas<br /></li>
                    </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Book From: Today to 10/31/2018 Travel From: 01/05/2019 to 04/30/2019</p>
            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2921088',
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
                        <li>Special advance booking discount on your reservation </li>
                        <li>Premium Roundtrip Airport transportation (Airport Hotel Airport) </li>
                        <li>Bottle of Tequila </li>
                        <li>Daily Fresh and Dried Fruits </li>
                        <li>Children up to 12 years old stay free (using existing beds) </li>
                        <li>High Speed Internet Access in rooms &amp; common areas<br /></li>
                    </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Book From: Today to 10/31/2018 Travel From: 01/05/2019 to 04/30/2019</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2921123',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                <ul>
                    <li>Special advance booking discount on your reservation </li>
                    <li>Daily breakfast for all paid occupants </li>
                    <li>Premium Roundtrip Airport transportation (Airport Hotel Airport) </li>
                    <li>Bottle of Tequila </li>
                    <li>Daily Fresh and Dried Fruits </li>
                    <li>Children up to 12 years old stay and eat free Breakfast with Mom &amp; Dad (using existing beds) </li>
                    <li>High Speed Internet Access in rooms &amp; common areas <br /></li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Book From: Today to 10/31/2018 Travel From: 01/05/2019 to 04/30/2019</p>
            ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2922120',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];
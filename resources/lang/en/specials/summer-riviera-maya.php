<?php

return [
    'slug' => 'summer-riviera-maya',
    'title' => ' Riviera Maya: Summer All Year Long',
    'thumbnail' => asset('img/deals/summer-riviera-maya.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],    
    ],
    'destino'=>'riviera-maya',
    'title_seo' => 'Summer Special Riviera Maya | Royal Reservations',
    'alt_seo' => 'Summer Special Riviera Maya',
	'metadescription' => 'Take advantage of our great promotion and start planning your vacations receiving a special discount on your reservation and a $150 USD Resort Credit',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'Special Discount',
        1=>'150 USD in Resort Credit',
        2=>'Roundtrip Transportation',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Summer is already here in Royal Reservations, with this exclusive promotion that will make you live an unforgettable family vacation in our magnificent luxury resort in the Riviera Maya. Explore the beauties of the Mexican Caribbean, its fine white sand beaches, unbeatable blue sea and the wide range of cultural and fun activities and entertainment we have for you. Take advantage of our great promotion and start planning your vacations, to travel anytime of the year, receiving a special discount on your reservation in All Inclusive, Bed & Breakfast or Accommodation Only plans, and a $150 USD Resort Credit to enjoy delicious food and beverages, Spa treatments, and products of our Gourmet Food Market.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your Reservation</li>
                            <li>150 USD Resort Credit per Reservation</li>
                            <li>All Gourmet meals and snacks</li>
                            <li>Premium House Brand Beverages</li>
                            <li>Limitless 24 hours Room Full Service</li>
                            <li>Premium Roundtrip Airport transportation (Airport - Hotel - Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959180',
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
                            <li>Special Discount on your Reservation</li>
                            <li>150 USD Resort Credit per Reservation</li>
                            <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay free (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959195',
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
                            <li>Special Discount on your Reservation</li>
                            <li>150 USD Resort Credit per Reservation</li>
                            <li>Daily breakfast for all paid occupants</li>
                            <li>Premium Roundtrip Airport transportation (Airport Hotel Airport)</li>
                            <li>Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children up to 12 years old stay and eat free Breakfast with Mom & Dad (using existing beds)</li>
                            <li>High Speed Internet Access in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Bed and Breakfast',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959215',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        3 night stay minimum required
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
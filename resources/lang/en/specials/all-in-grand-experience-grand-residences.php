<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
	'metadescription' => 'Enjoy a Luxury All Inclusive Resort at Grand Residences while taking advantage of the great discounts for a perfect beach vacations',
	'alt_seo' => 'All Inclusive Hotel Riviera Maya',
	'title_seo' => 'All Inclusive Riviera Maya | Grand Residences Riviera Cancun',	
    'title' => 'RIVIERA MAYA - All In Grand Experience',
    'subtitle' => 'Travel dates between Today and January 4, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'slug' => 'all-in-grand-experience-grand-residences',
    'thumbnail' => asset('img/deals/all-in-grand-experience-grand-residences.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'Premium Roundtrip Transfers',
        1=>'All Inclusive Gourmet Meals',
        2=>'Children stay free',
        3=>'Complimentary WiFi',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Through our unbeatable All Inclusive Plan, you will enjoy unlimited delicious dishes, snacks and premium beverages in our gourmet restaurants, lobby bar and swim-up bar, at the Heaven beach club which honors its name –it is truly heaven- , a 24 hour fully equipped Fitness Center with a personal trainer, concierge services for your special requests and the benefit of the proximity to Puerto Morelos downtown just 5 minutes away by car.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Gourmet All Inclusive',
            'description'=>'
                        
                        <ul>
                            <li>Limitless 24 hours Room Service</li>
                            <li>Premium House Brand Beverages</li>
                            <li>All Gourmet meals and snacks</li>
                            <li>Complimentary 24 hours Fully equipped Fitness Center</li>
                            <li>Concierge Services</li>
                            <li>One Premium Roundtrip transportation airport-hotel-airport</li>
                            <li>Complimentary Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                            <li>Children under 12 years old, eat and stay free</li>
                        </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>1 night-stay minimum required</p>

            ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'454',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'1551276',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'blackouts'=>[
        0=>['inicio'=>'01/05/2020','fin'=>'12/31/2020',],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',
];
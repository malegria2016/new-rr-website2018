<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
	'metadescription' => 'Come to enjoy Riviera Maya at the Best Price, and take advantage of our Caribbean discounts with breakfast included!',
	'alt_seo' => 'Grand residences bed and breakfast',
	'title_seo' => 'Resort in Riviera Maya with Breakfast included',	
    'title' => 'RIVIERA MAYA - Premium Bed & Breakfast',
    'subtitle' => 'Travel dates between Today and January 4, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'slug' => 'premium-bed-breakfast-grand-residences',
    'thumbnail' => asset('img/deals/premium-bed-breakfast-grand-residences.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'Premium Roundtrip Transfers',
        1=>'Buffet Breakfast for all',
        2=>'Children stay free',
        3=>'Complimentary WiFi',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'35', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Through our unbeatable Bed & Breakfast Plan, you will enjoy our delicious buffet or a la carte in our spectacular restaurant or if you don’t want to go out of your suite you can call to our room service; plus a 24 hour fully equipped Fitness Center with a personal trainer, concierge services for your special requests and the benefit of the proximity to Puerto Morelos downtown just 5 minutes away by car.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Premium Bed & Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>Gourmet Breakfast for all</li>
                            <li>One Complimentary Roundtrip transportation airport-hotel-airport</li>
                            <li>Complimentary 24 hours Fully equipped Fitness Center</li>
                            <li>Concierge Services</li>
                            <li>Complimentary Bottle of Tequila</li>
                            <li>Daily Fresh and Dried Fruits</li>
                        </ul>

            ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>1 night-stay minimum required</p

            ',
            'resorts_area_title'=>'Bed & Breakfast Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'400',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'1996424',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        
    ],

    'blackouts'=>[
        0=>[ 'inicio'=>'01/05/2020', 'fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'code'=>'',

];
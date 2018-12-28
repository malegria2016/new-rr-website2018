<?php

return [
    'slug' => 'summer-playa-del-carmen',
    'title' => 'Playa del Carmen: Summer All Year Long',
    'thumbnail' => asset('img/deals/summer-playa-del-carmen.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Summer Special Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Summer Special Playa del Carmen',
	'metadescription' => '',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'44% OFF',
        1=>'100 USD RESORT CREDIT',
        2=>'50 USD TOUR CREDIT',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            An unforgettable family vacation awaits you in the Mexican Caribbean with our incredible special "Summer All Year Long" promotion. Enjoy nice walks on the Fifth Avenue, on beautiful beaches, doing fun attractions, amazing activities and more, during your vacation in Playa del Carmen. Just take advantage of this unique offer to travel any time of the year and stay at our fabulous beachfront resort, The Royal Haciendas, receiving a great special discount of up to 44% on your reservation in All Inclusive Plan, a $150 USD Resort Credit for you to use it on incredible tours, relaxing massages and excellent products in our Royal Market.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>150 USD in Resort Credits divided by:</li>
                            <ul>
                                <li>100 USD Resort Credit</li>
                                <li>50 USD Tour Credit</li>
                            </ul>
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2959083',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>The Tour Credit and the Resort Credit are per reservation</li>
            <li>The Tour Credit and the Resort Credit must not be considered as cash money.</li>
            <li>These Credits cannot be combined with other promotions or discounts.</li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
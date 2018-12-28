<?php

return [
	'metadescription' => 'Book now and take advantage of our 4th of July Flash Sale and receive a special 45% discount available only for a limited time.',
	'alt_seo' => '4th of July Sale Riviera Maya',
	'title_seo' => '4th of July Riviera Maya Sale | Royal Reservations',	
    'title' => 'Riviera Maya: 4th Of July',
    'slug' => 'fourth-of-july-riviera-maya',
    'thumbnail' => asset('img/deals/fourth-of-july-riviera-maya.jpg'),
    'expiration'=>'09/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019',
            'fin'=>'12/31/2019',
        ],
        
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount on your Reservation',
        1=>'All Gourmet meals and snacks',
        2=>'Premium House Brand Beverages',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            It\'s time to start planning those long-awaited vacations in the company of your loved ones and what better place than the Riviera Maya. Book now and take advantage of our 4th of July Flash Sale and receive a special 45% discount available only for a limited time. Choose between our exclusive All Inclusive plan, a convenient premium Bed & Breakfast plan or book just your accommodations and start enjoying a unique vacation experience full of luxury and exclusive amenities that only Grand Residences Riviera Cancun can offer.
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
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'444',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
                
            ],            

        ],
        
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        3 nights-stay minimum required
    ',

    
    
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
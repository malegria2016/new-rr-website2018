<?php

return [
	'metadescription' => 'The Riviera Maya is waiting for you to visit its paradisiacal beaches of fine sand and enjoy the best of life in front',
	'alt_seo' => 'Riviera Maya: Unlimited Package',
	'title_seo' => 'Riviera Maya: Unlimited Package - Royal Reservations',	
    'title' => 'RESORT WITH BREAKFAST INCLUDED',
    'slug' => 'bed-and-breakfast',
    'thumbnail' => asset('/img/promo-escapecuracao.jpg'),
    'expiration'=>'06/13/2018', // mm/dd/yyyy
    'label_resort' => '',
    'main_points' => [
        0=>'Free Roundtrip Transportation Airport-Hotel-Airport',
        1=>'Unlimited Meals & Drinks (Additional Fees May Apply for Premium food and beverages)',
        2=>'Free High speed WiFi Internet access in rooms and common areas',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'40', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
             Prepare your bathing suit, because with our Unlimited Package, you will spend a formidable family vacation in Cancun. Take advantage of this great offer in which you will receive an impressive discount of up to 44% on your reservation, round transportation from the airport to your hotel and a 150 USD in Resort Credits for you to spend in food and beverages, incredible tours, massages in our Spa and products from The Royal Market.   
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'All Inclusive Cancun Offer',
            'description'=>'
                        Resort Credits for you to spend in food and beverages, incredible tours, massages in our Spa and products from The Royal Market

                        <ul>
                            <li>Unlimited Package, you will spend a formidable</li>
                            <li>Resort Credits for you to spend in food and beverages</li>
                            <li>Unlimited Package, you will spend a formidable</li>
                            <li>Resort Credits for you to spend in food and beverages</li>
                            <li>Unlimited Package, you will spend a formidable</li>
                            <li>Resort Credits for you to spend in food and beverages</li>
                        </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'191',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920355',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'189',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2880592',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    

                ],
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>r bathing suit, because with our Unlimited Package, you will spend a formidable family vacation in Cancun. Take advantage of this great offer in which you will recei</p>
        <ul>
            <li> Resort Credits for you to spend in food and beverages</li>
            <li> t, because with our Unlimited Package, you will spend a formidable family vacation</li>
            <li> Resort Credits for you to spend in food and beverages</li>
            <li> t, because with our Unlimited Package, you will spend a formidable family vacation</li>
        </ul>

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/01/2018',
            'fin'=>'07/02/2018',
        ],
        1=>[
            'inicio'=>'09/01/2018',
            'fin'=>'09/02/2018',
        ],
    ],
    'minimo_noches'=>'3',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
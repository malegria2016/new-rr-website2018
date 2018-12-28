<?php

return [
    'slug' => 'mexican-fiesta-punta-cana',
    'title' => 'Mexican Fiesta: Punta Cana',
    'thumbnail' => asset('img/deals/mexican-fiesta-punta-cana.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta Punta Cana Vacations! | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta  Punta Cana Vacations!',
	'metadescription' => 'Hurry and take advantage of this Mexican Fiesta  only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',
    'main_points' => [
        0=>'48% OFF',
        
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'Flash Sale', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The best family vacation in Punta Cana is here with the fabulous flash sale we have for you at Royal Reservations.<br /><br />If you want to live a luxury vacation in Punta Cana, at any date of this or the next year and also receive a superb special discount, then you have to take advantage of this incredible offer, available for a limited time, in which you will enjoy not only these benefits, but also splendid accommodations with exclusive amenities, beautiful golden sand beaches, typical and international gastronomy, as well as fun activities. Just book the suite or villa of your choice in All Inclusive, Bed &amp; Breakfast or Room Only plan, in any of the 4 fabulous resorts available at Royal Reservations.<br /><br />Book now and start packing to live an unforgettable family vacation in Punta Cana!
        </p>
        <ul>
            <li>All Inclusive available at AlSol Luxury Village</li>
            <li>Accommodation Only available at AlSol Luxury Village y Del Mar Resort</li>
        </ul>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                <ul>
                    <li>Special discount on your reservation</li>
                    <li>Unlimited meals &amp; drinks</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/alsol-luxury-village.jpg'),
                    'price'=>'220',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
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
                            <li>Special discount on your reservation</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar by Joy Resorts',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/del-mar.jpg'),
                    'price'=>'260',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>1 nights-stay minimum required</p>
        <p>Book from: Today to 9/18/2018</p>
        <p>Travel from: Today to 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
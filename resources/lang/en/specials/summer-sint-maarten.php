<?php

return [
    'slug' => 'summer-sint-maarten',
    'title' => 'ST MAARTEN - Summer All Year Long',
    'thumbnail' => asset('img/deals/summer-sint-maarten.jpg'),
    'expiration'=>'08/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'title_seo' => 'Summer Special Sint Maarten | Royal Reservations',
    'alt_seo' => 'Summer Special Sint Maarten',
	'metadescription' => 'Take advantage of this exclusive offer receiving an insuperable discount of up to 48% on your reservation in Bed & Breakfast plan',
    'label_resort' => '',
    'main_points' => [
        0=>'48% OFF',
        1=>'Free Buffet Breakfast for all',
        2=>'Children stay free',
        3=>'Free WiFi',
        
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            If you want to enjoy the sun, the soft sand of the beach under your feet and dive in the crystalline waters of the sea, on one of the most beautiful islands of the Caribbean, do not wait any longer and take advantage of this exclusive offer of Royal Reservations that takes you to live a family vacation in St. Maarten any time of the year, in addition to receiving an insuperable discount of up to 48% on your reservation in Bed & Breakfast plan, which includes delicious daily buffet breakfast for all the occupants of the suite. All this and more, with the best in accommodations, services and amazing amenities of any of our magnificent beachfront resorts, Simpson Bay Beach Resort or The Villas at Simpson Bay.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>Special discount on your reservation</li>
                            <li>Buffet breakfast for all suite occupants</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <ul>
            <li>1 night stay minimum required</li>
            <li>Book from <b>Today</b> to <b>08/31/2018</b></li>
            <li>Travel between <b>Today</b> to <b>03/31/2019</b></li>
        </ul>          
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
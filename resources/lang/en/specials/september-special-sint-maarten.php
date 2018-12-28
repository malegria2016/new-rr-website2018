<?php

return [
    'slug' => 'september-special-sint-maarten',
    'title' => 'SINT MAARTEN - September Special',
    'subtitle' => 'Travel dates between Today and January 3, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-sint-maarten.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/04/2020', // mm/dd/yyyy
            'fin'=>'12/31/2020', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'label_resort' => '',
    'title_seo' => 'St. Maarten Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'St. Maarten Vacation Special Offer',
	'metadescription' => 'Start today to plan those family vacations you crave and get an special discount of up to 48% on your reservation, which includes free buffet breakfasts for all occupants of the suite and enjoy the beautiful beaches of the Caribbean.',
    'main_points' => [
        0=>'Free Buffet Breakfast for all',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Take advantage of our magnificent promotion of the month, start today to plan those family vacations you crave and get an unmatched special discount of up to 48% on your reservation, which includes free buffet breakfasts for all occupants of the suite and the benefit of staying at the resort any date of this or the next year. Enjoy the beautiful beaches of the Caribbean, its characteristic blue sea, incredible activities and tours with natural landscapes, by staying at Simpson Bay Beach Resort or at The Villas at Simpson Bay, two resorts that will provide you with exclusive amenities and services great quality.<br /><br />Book now and live an amazing vacation experience in St. Maarten.
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
                    <li>Children stay free</li>
                    <li>Free WiFi</li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ], 
    ],
    'code'=>'',

];
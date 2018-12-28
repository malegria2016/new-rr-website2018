<?php

return [
    'slug' => 'september-special-curacao',
    'title' => 'CURACAO - September Special',
    'subtitle' => 'Travel dates between Today and January 3, 2020',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/september-special-curacao.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[  'inicio'=>'01/04/2020', 'fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'curacao',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>',
    'title_seo' => 'Curacao Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Curacao Vacation Special Offer',
	'metadescription' => 'Take advantage of this unique promotion in which you will get an exclusive discount of 38% on your reservation, which includes free breakfasts for all occupants of the suite, staying at The Royal Sea Aquarium Resort in Curacao.',
    'main_points' => [
        0=>'Free Breakfast for all',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This month has brought a super special offer that will take you to live an incredible vacation in the paradisiac island of Curacao, so you know every corner of this Caribbean destination; it\'s beaches, its history, fun activities, gastronomy, natural wonders, culture and a lot more. Take advantage of this unique promotion in which you will get an exclusive discount of 38% on your reservation, which includes free breakfasts for all occupants of the suite and the possibility to enjoy your family vacation any date of this or next year, staying at The Royal Sea Aquarium resort in Curacao.<br /><br />Book now and experience an unforgettable vacation in Curacao, with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                            
                <ul>
                    <li>Special Discount on your reservation in the suite of your choice</li>
                    <li>Free daily breakfast for all</li>
                    <li>WiFi in rooms and common areas</li>
                    <li>Children stay free</li>
                </ul>

                ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>Book From: Today to 10/01/2018 Travel From: Today to 01/03/2020</p>
            ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ],
    ],

    'code'=>'',
];
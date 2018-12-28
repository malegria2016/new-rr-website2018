<?php

return [
    'slug' => 'summer-curacao',
    'title' => 'CURACAO - Summer All Year Long',
    'thumbnail' => asset('img/deals/summer-curacao.jpg'),
    'expiration'=>'08/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/01/2020', // mm/dd/yyyy
            'fin'=>'12/31/2020', // mm/dd/yyyy
        ],
    ],
    'destino'=>'curacao',
    'title_seo' => 'Summer Special Curacao | Royal Reservations',
    'alt_seo' => 'Summer Special Curacao',
	'metadescription' => '',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Royal Sea Aquarium</span>',
    'main_points' => [
        0=>'38% OFF',
        1=>'Free Breakfast for all', 
        2=>'Children stay free',
        3=>'Free WiFi',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The time has come for you to start planning your amazing beach vacation, thus we have a unique promotion for you to enjoy the relaxation of the beaches of Curaçao and discover the amazing activities and natural beauties of this wonderful island of Caribbean. Take advantage of this great offer today, to receive an impressive discount of 38% on your reservation in Bed & Breakfast plan, including delicious daily breakfasts for all the occupants of the suite. In addition, you will experience the comfort and relaxation of staying at our amazing oceanfront resort with great amenities and services, The Royal Sea Aquarium in Curaçao. 
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
                            <li>Breakfast included</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
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
<?php

return [
    'slug' => 'summer-punta-cana',
    'title' => 'PUNTA CANA - Summer All Year Long',
    'subtitle' => 'Travel dates between Today and January 31, 2019',
    'box_benefits'=>'Take advantage of the benefits of this special offer!',
    'thumbnail' => asset('img/deals/summer-punta-cana.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[ 'inicio'=>'02/01/2019','fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'punta-cana',
    'title_seo' => 'Summer Special Punta Cana | Royal Reservations',
    'alt_seo' => 'Summer Special Punta Cana',
	'metadescription' => 'Take advantage of this wonderful promotion that we have for you and receive a fabulous discount on your reservation, while enjoying the best All Inclusive Plan',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Del Mar Resort</span>',
    'main_points' => [
        0=>'48% OFF',
        1=>'Accommodation Only',
        2=>'Children stay free',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Nothing like planning ahead your family vacation to Punta Cana, to get the most out of it and enjoy the amazing soft sandy beaches, the peaceful and crystal clear blue waters of the Caribbean and the unique experiences you will live with your family in the fun tours and activities you will be able to do in this beautiful Caribbean island, in the Dominican Republic. Take advantage of this wonderful promotion that we have for you and receive a fabulous discount on your reservation.
        </p>

    ',
    'rates'=>[
       0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>Special discount on your reservation
                        </ul>

            ',
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
             <ul>
                <li>1 night stay minimum required</li>
                <li>Book from <b>Today</b> to <b>10/01/2018</b></li>
                <li>Travel between <b>Today</b> to <b>01/31/2019</b></li>  
             </ul>
            ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar Resort by Joy Resorts',
                    'stars'=>'4',
                    'img'=>'del-mar',
                    'price'=>'354',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            
        ],
        
    ],
    'code'=>'',
];
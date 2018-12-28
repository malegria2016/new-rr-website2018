<?php

return [
	'metadescription' => 'At Royal Reservations we have prepared a special offer with which you will spend a wonderful family vacation in Curacao.',
	'alt_seo' => 'Curacao Special Vacation Offer',
	'title_seo' => 'Days In Paradise: Curacao',	
    'title' => 'Days In Paradise: Curacao',
    'slug' => 'days-in-paradise-curacao',
    'thumbnail' => asset('img/deals/days-in-paradise-curacao.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'curacao',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium Resort</span>',
    'main_points' => [
        0=>'Special Discount on your reservation',
        1=>'Free daily breakfast for all',
        2=>'WiFi in rooms and common areas',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Amazing discount of 38% on your reservation while enjoying great amenities and services in the incredible resort The Royal Sea Aquarium in Curacao, as well as complimentary breakfast for all occupants in the suite.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your reservation in the suite of your choice</li>
                            <li>Free daily breakfast for all</li>
                            <li>WiFi in rooms and common areas</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'181',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2789569',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p><br><br><br></p>

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
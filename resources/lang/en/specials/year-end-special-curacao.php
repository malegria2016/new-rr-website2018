<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-curacao',
    'thumbnail' => asset('img/deals/year-end-special-curacao.jpg'),
    'title' => 'Curacao: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Caribbean vacations!',
    'title_seo' => 'Year End Curacao Vacations | Royal Reservations',
    'alt_seo' => 'Curacao Vacation Special Offer',
	'metadescription' => 'Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'38% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! <br /><br />At Royal Reservations we want to give you one more reason to visit Curacao and relax under the Caribbean sun. Just take advantage of our Year End Special to stay at The Royal Sea Aquarium resort and enjoy a great 38% discount on your reservation in European Plan and great benefits such as living your vacation anytime of this or the next year, exclusive of Royal Reservations. <br /><br />Book now to enjoy the Royal Reservations amazing experience in Curacao!
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your reservation</li>
                        <li>WiFi in rooms and common areas</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'3481629',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <p>This promotion does not include meals or drinks.</p>
            ',
        ],
    ],
    'code'=>'',
];
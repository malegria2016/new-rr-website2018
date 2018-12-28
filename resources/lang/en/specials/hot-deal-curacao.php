<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'hot-deal-curacao',
    'thumbnail' => asset('img/deals/hot-deal-curacao.jpg'),
    'title' => 'Curacao: Hot Deal',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'02/01/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Caribbean vacations!',
    'title_seo' => 'Curacao Hot Deal | Royal Reservations',
    'alt_seo' => 'Curacao Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Hot Deal Special only available for a few days! BOOK NOW AND GET A SPECIAL 42% OFF',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'42% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Live the best Curacao vacation experience with our Royal Reservations flash sale! Get an exclusive 42% discount on your stay and enjoy Curacao beaches, the mesmerizing coral reefs, fun activities and water sports and the colorful buildings of Willemstad, considered part of the World Heritage by the UNESCO. Book now and get this offer only valid for a short period of time. Stay at The Royal Sea Aquarium this year or the next one and get all the perks and services of Royal Reservations.
        </p>
        <p>This Offer is Valid Until: November 21st 2018. Travel Between November 15th  2018 to January 31st 2019</p>

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
                    'price'=>'133',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'3456345',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>3 nights-stay minimum required</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
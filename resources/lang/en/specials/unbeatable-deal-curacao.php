<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'unbeatable-deal-curacao',
    'thumbnail' => asset('img/deals/unbeatable-deal-curacao.jpg'),
    'title' => 'Curacao: Unbeatable Deal',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Caribbean vacations!',
    'title_seo' => 'Unbeatable Deal Curacao Vacations | Royal Reservations',
    'alt_seo' => 'Curacao Vacation Special Offer',
	'metadescription' => 'Take advantage of this unique promotion in which you will get an exclusive discount of 38% on your reservation, which includes free breakfasts for all occupants of the suite, staying at The Royal Sea Aquarium Resort in Curacao.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
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
            With our exclusive 38% discount on your accommodation in Curacao you will enjoy the beaches, the best entertainment in the water and in land in this Caribbean paradise, and the area of Willemstad which is considered part of the UNESCO World Heritage. Plus, we are including free breakfast for all while staying at The Royal Sea Aquarium. Book now and travel anytime this year or the next one. Visit the colorful buildings, submerge yourself in the coral reefs, and more!
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your reservation</li>
                        <li>Free daily buffet breakfast</li>
                        <li>WiFi in rooms and common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2789569',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>This promotion includes a daily breakfast per person confirmed in your confirmation letter.</li>
                        <li>Additional meals and drinks will have an additional charge.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
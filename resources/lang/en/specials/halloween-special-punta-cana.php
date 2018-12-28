<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'halloween-special-punta-cana',
    'thumbnail' => asset('img/deals/halloween-special-punta-cana.jpg'),
    'title' => 'Punta Cana: Halloween Special',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Punta Cana vacations!',
    'title_seo' => 'Punta Cana Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Halloween Special only available for a few days! BOOK NOW AND GET A SPECIAL 48% OFF.',

    'label_resort' => '',
    'main_points' => [
        0=>'48% OFF',
        1=>'All Inclusive or Accommodation Only',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Halloween is better with a ticket in your hand to paradise and waiting for those vacations to the Caribbean! Our treat to you is as follows: a special offer to stay in any of our resorts in Punta Cana anytime this year or the next one. Choose between our All Inclusive Plan, our Bed & Breakfast or our Room Only Plan and receive our Royal Reservations first class amenities and services under any circumstance. Punta Cana is such a beautiful paradise in the Caribbean.
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Unlimited meals & drinks</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'220',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>1 nights-stay minimum required</li>
                    </ul>
            ',
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
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'DelMar By Joy Resorts',
                    'stars'=>'4',
                    'img'=>'del-mar',
                    'price'=>'260',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>1 nights-stay minimum required</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
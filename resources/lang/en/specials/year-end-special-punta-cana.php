<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-punta-cana',
    'thumbnail' => asset('img/deals/year-end-special-punta-cana.jpg'),
    'title' => 'Punta Cana: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Punta Cana vacations!',
    'title_seo' => 'Year End Special Punta Cana Vacations | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'With Royal Reservations and its amazing special promotion, you will visit Punta Cana, a paradise you have to live!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'48% OFF',
        1=>'All Inclusive or Accommodation Only',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            With Royal Reservations and its amazing special promotion, you will visit Punta Cana, a paradise you have to live! <br /><br />Discover great activities, natural beauties, culture, gastronomy and amazing secluded beaches during your Punta Cana luxury vacation through this special offer and obtain an exclusive discount to enjoy your vacations anytime of this or the next year. Experience luxury accommodations, services and amenities at Ancora Resort in Punta Cana, in the Dominican Republic, and enjoy your vacations to the max. <br /><br />Book now your All Inclusive vacations with Royal Reservations.
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
                        <li>Unlimited meals &amp; drinks</li>
                        <li>Free WiFi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'Ancora',
                    'stars'=>'4',
                    'img'=>'ancora',
                    'price'=>'350',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>1 nights-stay minimum required</p>
            ',
        ],
        1=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special discount on your reservation</li>
                        <li>Free WiFi</li>
                    </ul>

                ',            
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'300',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882967',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                    <ul>
                        <li>1 nights-stay minimum required</li>
                        <li>This promotion does not include meals and drinks</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
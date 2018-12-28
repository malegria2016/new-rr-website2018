<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'christmas-sale-punta-cana',
    'thumbnail' => asset('img/deals/christmas-sale-punta-cana.jpg'),
    'title' => 'Punta Cana: Christmas Sale',
    'expiration'=>'12/19/2018	', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/31/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now this Special Christmas Sale!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Punta Cana Vacations!',
    'title_seo' => 'Christmas Special Punta Cana | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'This amazing flash sale of Royal Reservations will take you to the best vacation experience in Punta Cana!',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'35%+7% OFF',
        1=>'All Inclusive or Accommodation Only',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This amazing flash sale of Royal Reservations will take you to the best vacation experience in Punta Cana! <br /><br />The beautiful Caribbean destination of Punta Cana is waiting for you to live a memorable vacation on the beach. Take advantage of this incredible special offer, valid for a few days only, and obtain a special discount on your All Inclusive, European Plan or Bed &amp; Breakfast reservation to stay in any of the 3 different Punta Cana resorts available with us, to enjoy this or the next year.     
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
                    'stars'=>'4.5',
                    'img'=>'alsol-luxury-village',
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
            
                    <p>1 nights-stay minimum required<br />This promotion does not include meals and drinks</p>
            ',
        ],
    ],
    'code'=>'',
];
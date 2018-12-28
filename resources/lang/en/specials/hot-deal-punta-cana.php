<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'hot-deal-punta-cana',
    'thumbnail' => asset('img/deals/hot-deal-punta-cana.jpg'),
    'title' => 'Punta Cana: Hot Deal',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'02/01/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Punta Cana vacations!',
    'title_seo' => 'Punta Cana Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Punta Cana Vacation Special Offer',
	'metadescription' => 'Hurry and take advantage of this Hot Deal only available for a few days! BOOK NOW AND GET A SPECIAL 48% OFF.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'48% OFF',
        1=>'All Inclusive or Accommodation Only',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            In Royal Reservations we are having a hot sale for you to enjoy some unforgettable vacations in Punta Cana! Book now and get a special discount on your reservation, while choosing among our All inclusive, Bed & Breakfast and our Room Only Plans anytime this year or the next one. You will have 3 resort options to choose from. Enjoy in every of them incredible amenities and services and impeccable facilities offered by Royal Reservations.  Explore Punta Cana with its mesmerizing Caribbean landscapes!             
        </p>
        <p>This Offer is Valid Until: November 21st 2018. Travel Between November 15th  2018 to January 31st 2019</p>

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
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'4.5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <ul>
                        <li>1 night-stay minimum required</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
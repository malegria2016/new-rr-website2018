<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'autumn-special-curacao',
    'thumbnail' => asset('img/deals/autumn-special-curacao.jpg'),
    'title' => 'Curacao: Autumn Special',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take Advantage of this special offer and Book Now your next Caribbean vacations!',
    'title_seo' => 'Curacao Vacation Special Offer | Royal Reservations',
    'alt_seo' => 'Curacao Vacation Special Offer',
	'metadescription' => 'Take advantage of this unique promotion in which you will get an exclusive discount of 38% on your reservation, which includes free breakfasts for all occupants of the suite, staying at The Royal Sea Aquarium Resort in Curacao.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b>Resort: The Royal Sea Aquarium</span>',
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
            Visit one of the best destinations for snorkeling and diving: Curacao, a beautiful island in the middle of the Caribbean with fine-sand beaches and calm shallow waters, ideal for children. So, if you need a vacation with your family, this is a hot spot to be. Also, its charming buildings and interesting history are the reasons why it is considered a World Heritage City by UNESCO. <br />Stay at the Royal Sea Aquarium and get a 38% discount if you book now your stay! Royal Reservations is also including free daily breakfast for all, so you can begin sunny days with all the energy! Don&rsquo;t wait any longer and enjoy the vacation you deserve and you want to share with your loved ones!   
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount on your reservation </li>
                        <li>Free daily breakfast</li>
                        <li>WiFi in rooms and common areas </li>
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
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
               
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
            
                <ul>
                    <li>This promotion includes a daily breakfast per person confirmed in your confirmation letter. </li>
                    <li>Additional meals and drinks will have an additional charge. <br /></li>
                </ul>
                
            ',
        ],
    ],
    'code'=>'',
];
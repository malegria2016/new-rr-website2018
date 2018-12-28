<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'christmas-sale-playa-del-carmen',
    'thumbnail' => asset('img/deals/christmas-sale-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Christmas Sale',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now this Special Christmas Sale!',
    'box_benefits'=>'Don\'t miss the opportunity to Book Now your next Riviera Maya Vacations!',
    'title_seo' => 'Christmas Special Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'Live an amazing All Inclusive vacation at The Royal Haciendas resort with this incredible flash sale, and get a great 40% discount + a 12% OFF.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'40%+12% OFF',
        1=>'All Inclusive',
        2=>'Children stay free',
        3=>'Free high-speed WiFi',
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            The perfect gift for this Christmas is a Playa del Carmen vacation with your family, your significant other or your friends and with Royal Reservations you&rsquo;ve got it! <br /><br />Live an amazing All Inclusive vacation at The Royal Haciendas resort with this incredible flash sale, available only for a few days, and get a great 40% discount + a 12% OFF on your reservation with Royal Reservations. Also, get amazing benefits like kids staying free and to enjoy your vacations this year or the next one. <br /><br />Book now!<
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Unlimited meals &amp; drinks</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free</li>
                        <li>Free high-speed Wi-Fi</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'4.5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'205',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                    <p>Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available<br />When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.</p>
            ',
        ],
        
    ],
    'code'=>'',
];
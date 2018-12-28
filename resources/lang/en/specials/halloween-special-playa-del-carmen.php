<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'halloween-special-playa-del-carmen',
    'thumbnail' => asset('img/deals/halloween-special-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Halloween Special ',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this exclusive offer and Book Now your next vacations!',
    'title_seo' => 'Playa del Carmen Halloween Special Offer | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'Hurry, and take advantage of this Halloween Special only available for a few days! BOOK NOW AND GET A SPECIAL 47% OFF',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'47% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Book or treat! You have to take this chance and book the Playa del Carmen vacations you have been dreaming of. This Halloween Flash Sale is almost over and you don&rsquo;t want to miss the great deal this is! Check it out: 40% discount plus a 12% discount in the suite of your choice with our All Inclusive Royal Reservations Plan. <br />Enjoy Playa del Carmen destination at its fullest with all the amenities and services we can bring. As you already know, this destination has been in the mind of world travelers.
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                    <ul>
                        <li>Special Discount</li>
                        <li>Unlimited meals &amp; drinks (surcharges apply for premium food &amp; beverages)</li>
                        <li>24 hours room service</li>
                        <li>Children up to 12 years old stay &amp; eat for free (using existing beds)</li>
                        <li>Free high speed Wi-Fi in rooms &amp; common areas</li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'196',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
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
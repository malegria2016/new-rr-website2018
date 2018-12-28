<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'hot-deal-playa-del-carmen',
    'thumbnail' => asset('img/deals/hot-deal-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Hot Deal',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'07/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this exclusive offer and Book Now your next vacations!',
    'title_seo' => 'Playa del Carmen Hot Deal| Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'Hurry, and take advantage of this Hot Deal, only available for a few days! BOOK NOW AND GET A SPECIAL 49% OFF',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'49% OFF',
        1=>'Children stay free',
        2=>'Free High-speed Wi-Fi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Now is the time to take advantage of our Royal Resrvations Hot Deal to book your Playa del Carmen vacation! Do not wait any longer, as this offer is only valid for a few days. Get a 49% discount on your reservation and travel anytime this year or the next one, with the best All Inclusive Plan in one of the best beach destinations in the world. Enjoy exclusive amenities and impeccable facilities in The Royal Haciendas in Playa del Carmen.
        </p>
        <p>This Offer is Valid Until: November 21st 2018. Travel Between November 15th  2018 to July 15th 2019</p>

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
                        <li>Free high speed Wi-Fi in rooms &amp; common areas </li>
                    </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'4.5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'198',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3451817',
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
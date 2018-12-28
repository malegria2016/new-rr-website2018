<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'year-end-special-playa-del-carmen',
    'thumbnail' => asset('img/deals/year-end-special-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Year End Special',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => 'Book Now and Travel anytime of the year!',
    'box_benefits'=>'Take advantage of this exclusive offer and Book Now your next vacations!',
    'title_seo' => 'New Year Offer Playa del Carmen Vacations | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Vacation Special Offer',
	'metadescription' => 'This is the perfect time to go on vacations and with this special Year End promo, you will live the best of Playa del Carmen with Royal Reservations!',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>
    'main_points' => [
        0=>'46% OFF',
        1=>'$100 USD Spa Credit',
        2=>'All Inclusive or Accommodation Only',
        3=>'Children stay free',
        4=>'Free high-speed WiFi'
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            This is the perfect time to go on vacations and with this special Year End promo, you will live the best of Playa del Carmen with Royal Reservations! <br /><br />Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer that gives you a superb 46% discount on your reservation, $100 USD Spa Credit to enjoy in spa services and benefits such as free accommodations and meals for kids and living your vacations anytime of this or the next year. <br /><br />Book with Royal Reservations and enjoy great amenities and services in a beachfront family resort!
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
                        <li>100 USD Spa Credit</li>
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
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3481603',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],

            ],
            'title_conditions'=>'Terms and conditions',
            'conditions'=>'
                <p>The Spa Credit is per reservation, and it can only be redeemed at the Spa for massages and wellness treatments. <br />A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest. <br />The Spa Credit must not be considered as cash money. <br />The Spa Credit is valid only for this reservation and must be used in one single transaction directly at the Spa, if not used it will not be available for future use, it will not be refunded or transferred to other reservations, and it will not be valid at the front desk. If the price of the product/service paid with this credit is higher than the credit value, any remaining balance will be charged to the guest room bill. <br />The Spa Credit cannot be combined with other promotions or discounts. <br />When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages <br />Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available <br />When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.</p>
            ',
        ],
        
    ],
    'code'=>'',
];
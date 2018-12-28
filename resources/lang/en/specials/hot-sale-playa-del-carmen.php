<?php

return [
    'slug' => 'hot-sale-playa-del-carmen',
    'title' => 'Hot Sale: Playa del Carmen',
    'thumbnail' => asset('img/deals/hot-sale-playa-del-carmen.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Hot Sale Playa del Carmen!',
    'alt_seo' => 'Hot Sale for Playa del Carmen Vacations!',
	'metadescription' => 'Hurry and take advantage of this Hot Sale only available for a few days! BOOK NOW AND GET A SPECIAL 47% OFF',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Start packing because with this incredible promotion we have for you, you and your family will live the best family vacation in Playa del Carmen ever. Enjoy not only the wonderful warm climate of the Mexican Caribbean, the beaches and countless activities, but also the amazing amenities and facilities of The Royal Haciendas. In addition, get a great  47% discount when making your All Inclusive reservation at The Royal Haciendas, and travel any time of the year.  All that and more awaits you on your next vacation in Playa del Carmen.
            Book today and start living a memorable family vacation with Royal Reservations and this amazing promotion.
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
                            <li>Unlimited meals & drinks (surcharges apply for premium food & beverages)</li>
                            <li>24 hours room service</li>
                            <li>Children up to 12 years old stay & eat for free (using existing beds)</li>
                            <li>Free high speed Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        3 nights-stay minimum required
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
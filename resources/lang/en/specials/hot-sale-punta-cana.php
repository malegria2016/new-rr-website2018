<?php

return [
    'slug' => 'hot-sale-punta-cana',
    'title' => 'Hot Sale: Punta Cana',
    'thumbnail' => asset('img/deals/hot-sale-punta-cana.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'title_seo' => 'Hot Sale Punta Cana Vacations!',
    'alt_seo' => 'Hot Sale Punta Cana Vacations!',
	'metadescription' => 'Hurry and take advantage of this Hot Sale only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Always thinking about you, Royal Reservations has created this Hot Sale for you to start planning your family vacation in Punta Cana today.
            Take advantage of this incredible Hot Sale, valid for a few days, that will take you to live the best vacation in Punta Cana with a unique discount on your reservation in any of the four resorts located in this destination, AlSol Luxury Village, Del Mar by Joy Resorts and now featuring our newest addition to the Royal Reservations family, Casa de Campo Resort & Villas. Enjoy the best of great amenities and the magnificent facilities of our resorts, and experience Punta Cana with the great variety of activities and the most beautiful landscapes, facing the sea, that you will find throughout your vacations.
            Book now and live the beauty of Punta Cana on a family vacation that will have no match!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'ALL INCLUSIVE',
            'description'=>'
                        
                        <ul>
                            <li>All Inclusive AlSol Resorts</li>
                            <li>Unlimited meals & drinks</li>
                            <li>All Inclusive Casa de Campo</li>
                            <li>Unlimited meals and drinks (some restrictions may apply)</li>
                            <li>One touring cart per room</li>
                            <li>Unlimited horseback rides</li>
                            <li>Use of the fitness center, tennis courses and non motorized water sports</li>
                            <li>One round of "Skeet / Trap" shooting</li>
                            <li>Age-appropriate children daytime activity programs</li>
                            <li>Unused Packaged features are non-refundable. Sport lessons are NOT included</li>
                            <li>Golf is not included</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/casa-de-campo.jpg'),
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/alsol-luxury-village.jpg'),
                    'price'=>'220',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

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
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar by Joy Resorts',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/del-mar.jpg'),
                    'price'=>'260',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        1 night-stay minimum required
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
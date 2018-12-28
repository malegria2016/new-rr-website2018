<?php

return [
    'slug' => 'hot-sale-sint-maarten',
    'title' => 'Hot Sale: St Maarten',
    'thumbnail' => asset('img/deals/hot-sale-sint-maarten.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'title_seo' => 'Hot Sale for St Maarten Vacations!',
    'alt_seo' => 'Hot Sale for St Maarten Vacations!',
	'metadescription' => 'Hurry and take advantage of this Hot Sale only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Take advantage of our Hot Sale in which aside from enjoying the white sand beaches, the best entertainment, both inside and outside the water, and the natural wonders of this incredible Caribbean destination, you will also enjoy a superb accommodation at Simpson Bay Beach Resort or at The Villas at Simpson Bay. Also, by taking advantage of this amazing offer, valid for a limited time only, you will receive a fabulous 50% discount on your reservation to live your so desired family vacation, whenever you decide, any time of the year.
            Book today and experience the best family vacations in St. Maarten, with Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Room only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room only',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount</li>
                            <li>Wi-Fi in rooms & common areas</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'119',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2808359',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'149',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2808366',
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
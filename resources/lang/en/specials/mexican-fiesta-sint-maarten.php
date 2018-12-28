<?php

return [
    'slug' => 'mexican-fiesta-sint-maarten',
    'title' => 'Mexican Fiesta : St Maarten',
    'thumbnail' => asset('img/deals/mexican-fiesta-sint-maarten.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2018', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta  for St Maarten Vacations! | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta for St Maarten Vacations!',
	'metadescription' => 'Hurry and take advantage of this Mexican Fiesta  only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',
    'main_points' => [
        0=>'50% OFF',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Enjoy a memorable family vacation in St. Maarten with this great Royal Reservations flash sale! <br /><br />For a memorable vacation in St. Maarten, nothing better than to take advantage of the limited-time magnificent special offer that we have for you, in which you will receive an unbelievable discount of up to 50% when booking the suite or villa of your choice either in Simpson Bay Beach Resort &amp; Marina or at The Villas at Simpson Bay Beach Resort, two amazing resorts offering fabulous amenities and services. Enjoy not only the Caribbean beaches, natural wonders, delicious cuisine and fun activities, but the benefit of being able to live your beach vacation any time of this or the next year. <br /><br />Book now and live the Royal Reservations vacation experiences!
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
                    <li>Wi-Fi in rooms &amp; common areas<br /></li>
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
        <p>3 nights-stay minimum required</p>
        <p>Book from: Today to 9/18/2018</p>
        <p>Travel from: Today to 12/16/2018</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
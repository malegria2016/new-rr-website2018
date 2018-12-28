<?php

return [
    'slug' => 'mexican-fiesta-curacao',
    'title' => 'Mexican Fiesta: Curacao',
    'thumbnail' => asset('img/deals/mexican-fiesta-curacao.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'curacao',
    'label_resort' => '',
    'title_seo' => 'Mexican Fiesta  Curacao Vacations! | Royal Reservations',
    'alt_seo' => 'Mexican Fiesta  Curacao Vacations!',
	'metadescription' => 'Hurry and take advantage of this Mexican Fiesta  only available for a few days! BOOK NOW AND GET A SPECIAL 50% OFF',
    'main_points' => [
        0=>'Special Discount',
        1=>'Children stay free',
        2=>'Free WiFi',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'41% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            A great discount awaits you by booking your family vacation in Curacao with Royal Reservations!<br /><br />Discover the beautiful beaches of this marvelous Caribbean island during your family vacation, experience the joy of living incredible adventures by the sea and perform entertaining activities in the beautiful natural scenery of Curacao, while enjoying the local and international gastronomy and the warmth of its people. Plan ahead for your next family vacation to Curacao with this great special offer, available only for a few days, in which you will get an exclusive discount of 41% on your reservation at The Royal Sea Aquarium resort, to enjoy your vacation any time of this or the following year.<br /><br />Book with Royal Reservations and start enjoying your upcoming vacations from today!
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
                    <li>Wi-Fi in rooms &amp; common areas</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ROOM ONLY',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'177',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>1 nights-stay minimum required</p>
        <p>Book from: Today to 9/18/2018</p>
        <p>Travel from: Today to 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
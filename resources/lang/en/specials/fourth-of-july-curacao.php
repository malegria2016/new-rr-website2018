<?php

return [
	'metadescription' => 'Royal Reservations made available for a few days this 4th of July, for you to start planning your next family vacation in the paradise Island of Curacao.',
	'alt_seo' => '4th of July Sale Curacao',
	'title_seo' => '4th of July Curacao Sale | Royal Reservations',	
    'title' => 'Curacao: 4th Of July',
    'slug' => 'fourth-of-july-curacao',
    'thumbnail' => asset('img/deals/fourth-of-july-curacao.jpg'),
    'expiration'=>'09/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019',
            'fin'=>'12/31/2019',
        ],
        
    ],
    'destino'=>'curacao',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount',
        1=>'Wi-Fi in rooms & common areas',
        
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Royal Reservations made available for a few days this 4th of July, for you to start planning your next family vacation in the paradise Island of Curacao, in the Caribbean, as you will receive a great 41% discount on your reservation, to stay at The Royal Sea Aquarium Resort, any time of the year. In addition, you will enjoy the beautiful white sand beaches, the blue sea, and everything else this great tourist destination has for you and your family.
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
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'117',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        1 nights-stay minimum required
    ',

    
    
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
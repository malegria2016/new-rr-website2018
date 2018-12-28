<?php

return [
	'metadescription' => 'Take advantage of our incredible 4th of July Flash Sale, valid for a few days, that will take you to live the best vacation in Punta Cana.',
	'alt_seo' => '4th of July Sale  Punta Cana',
	'title_seo' => '4th of July Punta Cana Sale | Royal Reservations',
    'title' => 'Punta Cana: 4th Of July',
    'slug' => 'fourth-of-july-punta-cana',
    'thumbnail' => asset('img/deals/fourth-of-july-punta-cana.jpg'),
    'expiration'=>'09/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019',
            'fin'=>'12/31/2019',
        ],
        
    ],
    'destino'=>'punta-cana',
    'label_resort' => '',
    'main_points' => [
        0=>'Special discount on your reservation',
        
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Take advantage of our incredible 4th of July Flash Sale, valid for a few days, that will take you to live the best vacation in Punta Cana with a unique discount whether you book All Inclusive or Just accommodation in any of our luxury resorts in this paradisiacal destination, AlSol Luxury Village or Del Mar by Joy Resorts. Enjoy the best amenities and the magnificent facilities of our resorts, and experience Punta Cana with the great variety of activities and the most beautiful landscapes, facing the sea, that you will find throughout your vacations.					
            
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
                            <li>Unlimited meals & drinks</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
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
        1 nights-stay minimum required
    ',

    
    
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
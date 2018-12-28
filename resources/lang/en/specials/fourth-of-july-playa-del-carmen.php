<?php

return [
	'metadescription' => 'Celebrate this 4th of July by booking your next family vacation to Playa del Carmen with Royal Reservations.',
	'alt_seo' => '4th of July Sale Playa del Carmen',
	'title_seo' => '4th of July Playa del Carmen Sale | Royal Reservations',	
    'title' => 'Playa del Carmen: 4th Of July',
    'slug' => 'fourth-of-july-playa-del-carmen',
    'thumbnail' => asset('img/deals/fourth-of-july-playa-del-carmen.jpg'),
    'expiration'=>'09/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019',
            'fin'=>'12/31/2019',
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        1=>'Children up to 12 years old stay & eat for free',
        2=>'Free high speed Wi-Fi in rooms & common areas',
        
    ],
    'label_color'=>'0', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'0', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Celebrate this 4th of July by booking your next family vacation to Playa del Carmen with Royal Reservations. Take advantage of our 4th of July Flash Sale available only for a few days, book now and get a special 47% discount when booking All Inclusive. Enjoy the wonderful blue waters of the Mexican Caribbean, Delight your palate with unlimited meals and drinks at our restaurants and bars and relax as never before in our comfortable suites and villas. Book now and start planning your next Caribbean vacations only with Royal Reservations.
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
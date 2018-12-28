<?php

return [
	'metadescription' => 'At Royal Reservations we have prepared a special offer with which you will spend a wonderful family vacation in Punta Cana.',
	'alt_seo' => 'Punta Cana Special Vacation Offer',
	'title_seo' => 'Days In Paradise: Punta Cana',	
    'title' => 'Days In Paradise: Punta Cana',
    'slug' => 'days-in-paradise-punta-cana',
    'thumbnail' => asset('img/deals/days-in-paradise-punta-cana.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'punta-cana',
    'label_resort' => '',
    'main_points' => [
        0=>'Special Discount on your reservation',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Days of relaxation and rest in paradise, with exclusive amenities and first-class service in its luxurious facilities, boasting all you need to enjoy. In addition, you will be delighted with the calm beaches of soft sand on the island and you will have the most fun with the great deal of cultural and ecotourism activities that you will find in Punta Cana.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'All Inclusive',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'All Inclusive Offer',
            'description'=>'
                        
                        <ul>
                            <li>Special discount on your reservation</li>
                            <li>Unlimited meals & drinks</li>
                        </ul>

                ',
            'resorts_area_title'=>'All Inclusive Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/alsol-luxury-village.jpg'),
                    'price'=>'200',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        1=>[
            'tab'=>'Room Only',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Room Only',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount on your reservation in the suite of your choice</li>
                            
                        </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar Resort by Joy Resorts',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/del-mar.jpg'),
                    'price'=>'267',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
               
            ],

        ],        
        
    ],
    'title_conditions'=>'Terms and conditions',
    'conditions'=>'
        <p>1 night-stay minimum required</p>
        

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
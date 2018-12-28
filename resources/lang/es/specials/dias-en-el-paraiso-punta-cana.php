<?php

return [
	'metadescription' => 'En Royal Reservations te llevamos a Punta Cana para que vivas las vacaciones que siempre has soñado.',
	'alt_seo' => 'Especial de Vacaciones en Punta Cana',
	'title_seo' => 'Días en el paraíso: Punta Cana',	
    'title' => 'Días en el Paraíso: Punta Cana',
    'slug' => 'dias-en-el-paraiso-punta-cana',
    'thumbnail' => asset('img/deals/dias-en-el-paraiso-punta-cana.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'punta-cana',
    'label_resort' => '',

    'main_points' => [
        0=>'Descuento especial en tu reservación',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Amenidades exclusivas y  un servicio de primera en sus instalaciones de lujo. Además, quedarás encantado con las tranquilas playas de arena suave de Punta Cana  y te divertirás al máximo con la gran cantidad de actividades culturales y  ecoturísticas que podrás realizar ahí.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial en tu reservación</li>
                            <li>Alimentos y bebidas ilimitados</li>
                        </ul>

                ',
            'resorts_area_title'=>'Resorts Todo Incluido',
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
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial en tu reservación</li>
                            
                        </ul>

                          ',
            'resorts_area_title'=>'Resorts Solo Habitación',
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
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Se requiere 1 noche de estadía mínima</p>
        

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
<?php

return [
	'metadescription' => '¡Con nuestra venta especial del mes de mayo, pasarás unas maravillosas vacaciones en familia en St. Maarten!',
	'alt_seo' => 'Especial de Vacaciones en Sint Maarten',
	'title_seo' => 'Días en el paraíso: Sint Maarten',	
    'title' => 'Días en el Paraíso: Sint Maarten',
    'slug' => 'dias-en-el-paraiso-sint-maarten',
    'thumbnail' => asset('img/deals/dias-en-el-paraiso-sint-maarten.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'sint-maarten',
    'label_resort' => '',

    'main_points' => [
        0=>'Descuento especial al reservar',
        1=>'Desayunos buffet gratis para todos los ocupantes de la suite',
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Obtén un magnífico 48% de descuento, además de desayunos buffet gratis para todos los ocupantes de la suite. Disfruta de las hermosas playas de arena blanca del Caribe en St. Maarten
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Desayunos buffet gratis para todos los ocupantes de la suite</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Resorts Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'126',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'157',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
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
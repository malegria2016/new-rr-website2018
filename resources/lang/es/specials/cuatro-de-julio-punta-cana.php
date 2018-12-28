<?php

return [
    'slug' => 'cuatro-de-julio-punta-cana',
    'title' => 'Punta Cana: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-punta-cana.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'label_resort' => '',

    'title_seo' => '',
    'alt_seo' => '',
	'metadescription' => '',
    'main_points' => [
        0=>'Descuento especial en tu reservación',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha nuestra increíble venta especial del 4 de julio, válida por unos días, que te llevará a vivir las mejores vacaciones en Punta Cana con un descuento único al reservar ya sea en plan Todo Incluido o solo hospedaje en cualquiera de nuestros resorts de lujo en este paradisíaco destino, AlSol Luxury Village o Del Mar by Joy Resorts. Disfruta de las mejores comodidades y las magníficas instalaciones de nuestros resorts, y experimenta Punta Cana con la gran variedad de actividades y los paisajes más bellos, frente al mar, que encontrarás durante tus vacaciones.
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
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/alsol-luxury-village.jpg'),
                    'price'=>'220',
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
            'resorts_area_title'=>'RESORTS Solo Habitación',
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
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        Se requieren 1 noche de estadía mínima
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
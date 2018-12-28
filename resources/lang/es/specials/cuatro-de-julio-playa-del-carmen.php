<?php

return [
    'slug' => 'cuatro-de-julio-playa-del-carmen',
    'title' => 'Playa del Carmen: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-playa-del-carmen.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    
    'title_seo' => 'Oferta de 4 de Julio Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de 4 de Julio Playa del Carmen',
	'metadescription' => 'Celebra este 4 de Julio reservando tus próximas vacaciones a Playa del Carmen con Royal Reservations. Aprovecha nuestra Venta Especial del 4 de Julio',
    'main_points' => [
        0=>'47% Descuento',
        1=>'Niños de hasta 12 años de edad se hospedan y comen gratis',
        2=>'Wi-Fi de alta velocidad gratis  en la habitación y áreas comunes',
        
    ],
    'label_color'=>'0', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Celebra este 4 de Julio reservando tus próximas vacaciones a Playa del Carmen con Royal Reservations. Aprovecha nuestra Venta Especial del 4 de Julio disponible solo por unos cuantos días, reserva ya en plan Todo Incluido y obtén un descuento especial del  47% al reservar la suite de tu elección. Disfruta del maravilloso azul de las aguas del mar caribe, disfruta de alimentos y bebidas ilimitados en nuestros restaurantes y bares y relájate como nunca en nuestras cómodas suites y villas. Reserva ya y comienza a planear esas vacaciones tan deseadas al Caribe Mexicano solo con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Alimentos y bebidas ilimitados (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service las 24 horas.</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        Se requieren 3 noches de estadía mínima
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'cuatro-de-julio-riviera-maya',
    'title' => 'Riviera Maya: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-riviera-maya.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',

    'title_seo' => 'Oferta de 4 de Julio Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de 4 de Julio Riviera Maya',
	'metadescription' => 'Reserva ya y aprovecha nuestra Venta especial del 4 de Julio y recibe un descuento especial del 45% por tiempo limitado.',
    'main_points' => [
        0=>'Descuento Especial en tu reservación',
        1=>'Alimentos y bocadillos gourmet ilimitados',
        2=>'Bebidas Premium de la casa',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Es hora de comenzar a planear esas tan añoradas vacaciones en compañía de tus seres queridos y que mejor lugar que las Riviera Maya, Reserva ya y aprovecha nuestra Venta especial del 4 de Julio y recibe un descuento especial del 45% disponible solo por tiempo limitado. Elige entre nuestro exclusivo plan Todo Incluido, un conveniente hospedaje con desayunos o solo tu hospedaje y comienza a disfrutar de una experiencia vacacional única llena de lujo y comodidades que solo Grand Residences Riviera Cancun puede ofrecer.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento Especial en tu reservación</li>
                            <li>Alimentos y bocadillos gourmet ilimitados</li>
                            <li>Bebidas Premium de la casa</li>
                            <li>Servicio a la Habitación ilimitado las 24 horas</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años de edad se hospedan y comen GRATIS (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'444',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
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
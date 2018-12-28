<?php

return [
    'slug' => 'verano-riviera-maya',
    'title' => 'Riviera Maya: Verano Todo el Año',
    'thumbnail' => asset('img/deals/verano-riviera-maya.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',

    'title_seo' => 'Riviera Maya Oferta de Verano | Royal Reservations',
    'alt_seo' => 'Riviera Maya Oferta de Verano',
	'metadescription' => 'Aprovecha nuestra magnífica promoción, recibiendo un descuento especial en tu reservación y un Resort Credit por $150 dólares',
    'main_points' => [
        0=>'Descuento Especial',
        1=>'150 USD en Resort Credit',
        2=>'Transportación Redonda',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            El verano ha llegado a Royal Reservations con una promoción exclusiva para que vivas unas inolvidables vacaciones en familia en nuestro magnífico resort de lujo en la Riviera Maya. Explora la belleza del Caribe Mexicano, sus playas de fina arena, su mar azul sin igual y la gama de actividades y entretenimiento tanto cultural como divertido que tenemos para ti. Aprovecha nuestra magnífica promoción y comienza a planear tus vacaciones para viajar en la época del año que quieras, recibiendo un descuento especial en tu reservación en plan Todo Incluido, Hospedaje con Desayunos Incluidos o Sólo Hospedaje, y un Resort Credit por $150 dólares para disfrutar de deliciosos alimentos y bebidas, tratamientos en el Spa, y productos de nuestro Gourmet Food Market.
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
                            <li>150 Dólares de Resort Credit por reservación</li>
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
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959180',
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
                            <li>Descuento Especial en tu reservación</li>
                            <li>150 Dólares de Resort Credit por reservación</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años se hospedan GRATIS (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959195',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        2=>[
            'tab'=>'Bed and Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed and Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>Descuento Especial en tu reservación</li>
                            <li>150 Dólares de Resort Credit por reservación</li>
                            <li>Desayuno diario para todos los ocupantes</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años se hospedan y toman su desayuno GRATIS con mamá y papá (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Bed and Breakfast',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959215',
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
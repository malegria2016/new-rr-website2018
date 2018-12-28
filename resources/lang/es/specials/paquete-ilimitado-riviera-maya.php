<?php

return [
	'metadescription' => 'Aprovecha esta fabulosa oferta especial de Royal Reservations y comienza a planear tus vacaciones de lujo en la Riviera Maya.',
	'alt_seo' => 'Vacaciones sin Límite en  Riviera Maya',
	'title_seo' => 'Vacaciones sin Límite en  Riviera Maya',
    'title' => 'Riviera Maya: Paquete Ilimitado',
    'slug' => 'paquete-ilimitado-riviera-maya',
    'thumbnail' => asset('img/deals/paquete-ilimitado-riviera-maya.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    
    'main_points' => [
        0=>'100 Dólares de Resort Credit por reservación',
        1=>'1 Masaje de cortesía de 30 minutos para una persona',
        2=>'Viaje redondo en Transportación Premium',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            La Riviera Maya te espera para que visites sus paradisíacas playas de fina arena y disfrutes de lo mejor de la vida frente al mar más bello del Caribe en Grand Residences Riviera Cancun. Aprovecha esta fantástica promoción en la que recibirás un inigualable descuento especial del 42% en tu reservación
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Gourmet Todo Incluido',
            'description'=>'
                        
                <ul>
                    <li>Descuento Especial en tu reservación</li>
                    <li>100 Dólares de Resort Credit por reservación</li>
                    <li>1 Masaje de cortesía de 30 minutos para una persona</li>
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
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'470',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920355',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            
        ],
        1=>[
            'tab'=>'Solo Habitacíon',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitacíon',
            'description'=>'
                        
                        <ul>
                            <li>Descuento Especial en tu reservación</li>
                            <li>100 Dólares de Resort Credit por reservación</li>
                            <li>1 Masaje de cortesía de 30 minutos para una persona</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años se hospedan GRATIS (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Room Only Resorts',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'280',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920709',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        2=>[
            'tab'=>'Habitación y Desayno',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed and Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>Descuento Especial en tu reservación</li>
                            <li>100 Dólares de Resort Credit por reservación</li>
                            <li>1 Masaje de cortesía de 30 minutos para una persona</li>
                            <li>Desayuno diario para todos los ocupantes</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años se hospedan y toman su desayuno GRATIS con mamá y papá (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Resorts Habitación y Desayno',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'308',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2920784',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        
    ],
    'title_conditions'=>'Términos y condiciones',
    'conditions'=>'
        <ul>
            <li>El masaje de 30 minutos es válido para una persona, una vez.</li>
            <li>El servicio requiere ser reservado con anticipación</li>
            <li>La propina del servicio de masaje no viene incluida</li>
        </ul>
    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'3',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
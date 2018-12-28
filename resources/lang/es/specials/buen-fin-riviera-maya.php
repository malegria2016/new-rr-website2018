<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'buen-fin-riviera-maya',
    'thumbnail' => asset('img/deals/buen-fin-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Buen Fin',
    'expiration'=>'11/21/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/22/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡Aprovecha esta promoción inigualable y Reserva Ahora!',
    'title_seo' => 'Oferta de Buen Fin a Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Royal Reservations ha preparado una oferta inigualable con la que vivirás unas vacaciones familiares de lujo en Grand Residences Riviera Cancun.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'47% DTO',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Regálate de Buen Fin unos días de vacaciones en Grand Residences Riviera Cancun, un exclusivo resort de lujo en la Riviera Maya y recibe un magnífico descuento de hasta 47% en tu reservación. Elige entre nuestro Plan Todo Incluido, Hospedaje con Desayunos Incluidos o Sólo Hospedaje, y disfruta de las exquisitas instalaciones frente al mar y de los diversos platillos gourmet. ¡La cuenta regresiva comenzó! Reserva ahora antes que termine la vigencia de esta oferta relámpago. 
        </p>
        <p>Oferta Válida Hasta: Noviembre 21 2018. Viaja Entre Noviembre 15 2018 hasta Diciembre 21 del 2019</p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>Alimentos y bocadillos gourmet ilimitados</li>
                        <li>Bebidas Premium de la casaServicio a la Habitaci&oacute;n ilimitado las 24 horas</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Botella de Tequila</li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen GRATIS (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'389',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452073',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3 Noches</li>
                    </ul>
            ',
        ],

        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan GRATIS (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes </li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452098',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3 Noches</li>
                    </ul>
            ',
        ],

        2=>[
            'tab'=>'Desayuno mas Habitación',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Desayuno mas Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>Desayuno diario para todos los ocupantes</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan y toman su desayuno GRATIS con mam&aacute; y pap&aacute; (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes </li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Desayuno mas Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'350',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3452118',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3 Noches</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'casa-de-campo-resort-and-villas-punta-cana-especial',
    'title' => 'PUNTA CANA - Especial de Lujo',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 4 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/casa-de-campo-resort-and-villas-punta-cana-especial.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2020', // mm/dd/yyyy
            'fin'=>'12/31/2021', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Casa de Campo Resort</span>',
    'title_seo' => 'Casa de Campo Promoción Especial | República Dominicana',
    'alt_seo' => 'Casa de Campo Promoción Especial',
	'metadescription' => 'Reserva ahora y obtén un descuento especial al reservar en la suite de tu elección.',
    'main_points' => [
        0=>'Planes: Todo Incluido, Habitación con Desayunos o Solo Habitación',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi de alta velocidad sin costo',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Descubre un paraíso inmaculado donde las playas doradas, las aguas azules del Caribe, el golf, instalaciones impecables y servicio de primera, son el sello distintivo, Casa de Campo Resort & Villas.
            28 km2 de puro lujo en uno de los resorts más exclusivos en el Caribe, es lo que vivirás en tus fabulosas vacaciones en Punta Cana, en la República Dominicana. Experimenta el máximo confort de Suites y Villas Elite con amenidades selectas y servicios premium. Disfruta de las interminables actividades de este orgulloso miembro de Leading Hotels of the World que cuenta con 3 campos de golf, un centro de tiro, uno ecuestre y muchas más actividades.
            Reserva ya con Royal Reservations y obtén un descuento especial al reservar con el exclusivo Plan Todo Incluido, Hospedaje con Desayunos o Plan Europeo, en la suite de tu elección.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Comidas y bebidas ilimitadas (se pueden aplicar algunas restricciones)</li>
                            <li>Un carrito de golf por habitación</li>
                            <li>Paseos a caballo ilimitados</li>
                            <li>Uso del gimnasio, canchas de tenis y deportes acuáticos no motorizados</li>
                            <li>Una ronda de disparos de ¨Skeet / Trap¨</li>
                            <li>Programas de actividades para niños de acuerdo a su edad</li>
                            <li>Cualquier inclusión de este paquete que no sea utilizado no será reembolsable. Las lecciones deportivas NO están incluidas</li>
                            <li>No se incluye el campo de Golf</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                Se requieren 1 noche de estadía mínima
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
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
                            <li>Un carrito de golf por habitación</li>
                            <li>Servicio de cortesía diario</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                Se requieren 1 noche de estadía mínima
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'300',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882967',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],

        2=>[
            'tab'=>'Bed and Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación y Desayuno',
            'description'=>'
                        
                        <ul>
                            <li>Un carrito de golf por habitación</li>
                            <li>Desayuno diario para todos los huéspedes confirmados</li>
                            <li>Servicio de cortesía diario</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                Se requieren 1 noche de estadía mínima
            ',
            'resorts_area_title'=>'Hoteles con Desayuno Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>'casa-de-campo',
                    'price'=>'320',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882969',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'code'=>'',
];
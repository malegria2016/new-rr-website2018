<?php

return [
    'slug' => 'hot-sale-punta-cana-especial',
    'title' => 'Hot Sale: Punta Cana',
    'thumbnail' => asset('img/deals/hot-sale-punta-cana-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'title_seo' => 'Hot Sale Punta Cana',
    'alt_seo' => 'Hot Sale Punta Cana',
	'metadescription' => 'La Hot Sale con una increíble promoción para que pases las mejores vacaciones familiares en Punta Cana.',
    'label_resort' => '',
    'main_points' => [
        0=>'Descuento Especial',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Pensando en ti, Royal Reservations te trae esta Hot Sale con grandes descuentos para que comiences a planear desde hoy tus vacaciones familiares en Punta Cana.
            Aprovecha esta increíble promoción vacacional que te llevará a vivir las mejores vacaciones en Punta Cana con un inigualable descuento especial en tu reservación en Plan Todo Incluido. Viaja en cualquier época del año a cualquiera de los cuatro resorts en Punta Cana, AlSol Luxury Village y Del Mar by Joy Resorts, y ahora, el más nuevo integrante de la familia Royal Reservations, Casa de Campo Resort & Villas. Disfruta al máximo de estupendas amenidades y las magníficas instalaciones de nuestros resorts. Experimenta Punta Cana y sus hermosos paisajes frente al mar que encontrarás a lo largo de tus vacaciones.
            ¡Reserva ya y vive la belleza de Punta Cana  en unas vacaciones sin igual!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Todo Incluido AlSol Resorts</li>
                            <li>Descuento especial en tu reservación</li>
                            <li>Alimentos y bebidas ilimitados</li>
                            <li>Todo Incluido Casa de Campo</li>
                            <li>Comidas y bebidas ilimitadas (se pueden aplicar algunas restricciones)</li>
                            <li>Un carrito de golf por habitación</li>
                            <li>Paseos a caballo ilimitados</li>
                            <li>Uso del gimnasio, canchas de tenis y deportes acuáticos no motorizados</li>
                            <li>Una ronda de disparos de "Skeet / Trap"</li>
                            <li>Programas de actividades para niños de acuerdo a su edad</li>
                            <li>Cualquier inclusión de este paquete que no sea utilizado no será reembolsable. Las lecciones deportivas NO están incluidas</li>
                            <li>No se incluye el campo de Golf</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Casa de Campo Resort & Villas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/casa-de-campo.jpg'),
                    'price'=>'375',
                    'resort_id'=>'106514',
                    'ihotelier_id'=>'2882964',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'5',
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
                            <li>Descuento Especial en tu Reservación</li>
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
        Estadía mínima de 1 Noche
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'verano-curacao',
    'title' => 'CURACAO - Verano Todo El Año',
    'thumbnail' => asset('img/deals/verano-curacao.jpg'),
    'expiration'=>'08/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/01/2020', // mm/dd/yyyy
            'fin'=>'12/31/2020', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'curacao',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Royal Sea Aquarium</span>',
    'title_seo' => 'Curacao Oferta de Verano | Royal Reservations',
    'alt_seo' => 'Curacao Oferta de Verano',
	'metadescription' => 'Recibe un descuento del 38% en tu reservación en plan Hospedaje con Desayunos Incluidos, en el que disfrutarás de deliciosos desayunos todos los días',
    'main_points' => [
        0=>'38% de Descuento',
        1=>'Desayuno Gratis Para Todos',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Ha llegado el momento de que empieces a planear tus vacaciones, porque tenemos para ti una promoción única para que disfrutes de la relajación de las playas de Curazao, y descubras las increíbles actividades y bellezas naturales que te ofrece esta maravillosa isla del Caribe. Aprovecha hoy mismo para recibir un impresionante descuento del 38% en tu reservación en plan Hospedaje con Desayunos Incluidos, en el que disfrutarás de deliciosos desayunos todos los días, para los ocupantes de la suite. Además, vivirás la comodidad y relajación del alojarte en nuestro increíble resort frente al mar con amenidades y servicios estupendos, The Royal Sea Aquarium en Curazao. 
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial en tu reservación en la suite de tu preferencia</li>
                            <li>Desayuno diario gratis para todos</li>
                            <li>WiFi en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
            <ul>
            <li>Se requiere 1 noche de estadía mínima</li>
            <li>Reserva desde: <b>Hoy</b> y hasta el <b>08/31/2018</b>.</li>
            <li>Viaja entre <b>Hoy</b> y hasta el <b>03/31/2019</b>.</li>
            </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'verano-sint-maarten',
    'title' => 'ST MAARTEN - Verano Todo El Año',
    'thumbnail' => asset('img/deals/verano-sint-maarten.jpg'),
    'expiration'=>'08/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'label_resort' => '',

    'title_seo' => 'St. Maarten Oferta de Verano | Royal Reservations',
    'alt_seo' => 'St. Maarten Oferta de Verano',
	'metadescription' => 'Recibe un 48% de descuento en tu reservación en plan Hospedaje con Desayunos Incluidos, para que disfrutes de desayunos buffet a diario.',
    'main_points' => [
        0=>'48% de Descuento',
        1=>'Desayuno Buffet Gratis para Todos',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Si quieres disfrutar del sol, la suave arena de la playa bajo tus pies y zambullirte en las cristalinas aguas del mar de una de las islas más bellas del Caribe, no esperes más y aprovecha esta exclusiva oferta de Royal Reservations, que te lleva a vivir unas vacaciones en familia a St. Maarten en cualquier época del año, además de recibir un insuperable descuento de hasta 48% en tu reservación en plan Hospedaje con Desayunos Incluidos, para que disfrutes de desayunos buffet a diario, para los ocupantes de la suite. Todo esto y más con el mejor alojamiento, servicios y amenidades increíbles de cualquiera de nuestros magníficos resorts frente al mar, Simpson Bay Beach Resort o The Villas at Simpson Bay.
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
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <ul>
        <li>Se requiere 1 noche de estadía mínima.</li>
        <li>Reserva desde: <b>Hoy</b> y hasta el <b>08/31/2018</b>.</li>
        <li>Viaja entre <b>Hoy</b> y hasta el <b>03/31/2019</b>.</li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
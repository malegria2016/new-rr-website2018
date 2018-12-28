<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-cyber-monday-playa-del-carmen',
    'thumbnail' => asset('img/deals/especial-cyber-monday-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Cyber Monday',
    'expiration'=>'12/01/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'07/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Cyber Monday  a Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por el Especial de Cyber Monday  y Obtén hasta un 49% de descuento al reservar.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //
    'main_points' => [
        0=>'49% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¡Hemos lanzado ya la Oferta de Cyber Monday para viajar a Playa del Carmen con Royal Reservations! ¡No esperes más y reserva ahora! Aprovecha esta promoción de corta duración y obtén un descuento de hasta 49% en tu reservación para viajar en cualquier época de este año o del siguiente, con el mejor Plan Todo incluido en uno de los mejores destinos turísticos del mundo en el Mar Caribe. Disfruta de las amenidades exclusivas e instalaciones impecables en The Royal Haciendas en Playa del Carmen.
        </p>
        <p>Oferta Válida Hasta: Diciembre 1 2018. Viaja Entre Noviembre 26 2018 hasta Julio 15 del 2019</p>


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
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes </li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'4.5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'198',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3451817',
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
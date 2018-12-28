<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-halloween-playa-del-carmen',
    'thumbnail' => asset('img/deals/especial-de-halloween-playa-del-carmen.jpg'),
    'title' => 'Playa del Carmen: Especial de Halloween',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'playa-del-carmen', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Halloween a Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por el Especial de Halloween y Obtén hasta un 47% de descuento al reservar.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'47% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Reserva antes que cantemos &ldquo;Queremos Halloween&rdquo;. Tienes que aprovechar esta oportunidad y reservar tus vacaciones en Playa del Carmen. &iexcl;Esta oferta de Halloween est&aacute; por terminarse y no quieres perd&eacute;rtela! Mira esto: 40% de descuento adem&aacute;s de un 12% adicional en la suite de tu elecci&oacute;n con nuestro incre&iacute;ble Plan Todo Incluido Royal Reservations. <br />Disfruta el destino de Playa del Carmen al m&aacute;ximo con todas las amenidades y servicios que te brindaremos durante tu estancia en el resort.
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
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis</li>
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'196',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Estadía mínima de 3 noches</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
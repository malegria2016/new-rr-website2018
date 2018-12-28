<?php

return [
    'slug' => 'fiesta-mexicana-playa-del-carmen',
    'title' => 'Fiesta Mexicana: Playa del Carmen',
    'thumbnail' => asset('img/deals/fiesta-mexicana-playa-del-carmen.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => '¡Fiesta Mexicana Playa del Carmen! | Royal Reservations',
    'alt_seo' => '¡Fiesta Mexicana Playa del Carmen!',
    'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por la Fiesta Mexicana  y Obtén hasta un 47% de descuento al reservar',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Con esta incre&iacute;ble oferta especial de Royal Reservations vivir&aacute;s unas vacaciones familiares en Playa del Carmen, simplemente inolvidables! <br /><br />Aprovecha esta venta rel&aacute;mpago que Royal Reservations trae para ti, &uacute;nicamente disponible por pocos d&iacute;as, y recibe un s&uacute;per descuento especial de hasta 47% al reservar la suite de tu elecci&oacute;n en Plan Todo Incluido en The Royal Haciendas. Adem&aacute;s, disfruta de beneficios exclusivos como disfrutar de tus vacaciones en cualquier fecha de este o del siguiente a&ntilde;o, as&iacute; como hospedaje y comidas gratis para ni&ntilde;os. Descubre todo lo que Playa del Carmen tiene guardado para ti, rel&aacute;jate, divi&eacute;rtete y vive las hermosas playas del Caribe Mexicano. <br /><br />Reserva ahora y disfruta de los beneficios especiales que obtendr&aacute;s al reservar con Royal Reservations.
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
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 3 Noches</p>
        <p>Reserva Desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
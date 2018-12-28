<?php

return [
    'slug' => 'especial-de-septiembre-curacao',
    'title' => 'CURACAO - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 3 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-curacao.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
         0=>[  'inicio'=>'01/04/2020', 'fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'curacao',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
    'metadescription' => 'Aprovecha esta promoción exclusiva en la cual recibirás un descuento especial del 38% en tu reservación, la cual incluye también desayunos gratis para todos los ocupantes de la habitación en el hotel The Royal Sea Aquarium en Curacao.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>',
    'main_points' => [
        0=>'Desayuno Gratis Para Todos',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Este mes ha llegado con una s&uacute;per oferta que te llevar&aacute; a vivir unas vacaciones incre&iacute;bles en la paradisiaca isla de Curazao, para que conozcas cada rinc&oacute;n de este destino del Caribe, sus playas, su historia, actividades divertidas, gastronom&iacute;a, maravillas naturales y mucho m&aacute;s. Aprovecha esta promoci&oacute;n &uacute;nica en la que obtendr&aacute;s un exclusivo descuento del 38% en tu reservaci&oacute;n, que incluye desayunos gratis para los ocupantes de la suite y la posibilidad de poder disfrutar de tus vacaciones familiares en cualquier fecha de este o el pr&oacute;ximo a&ntilde;o, hospedandote en The Royal Sea Aquarium. <br /><br />Reserva ahora y vive unas inolvidables vacaciones en Curazao con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n en la suite de tu preferencia</li>
                        <li>Desayuno diario gratis para todos</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes</li>
                        <li>Ni&ntilde;os se hospedan gratis</li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'code'=>'',
];
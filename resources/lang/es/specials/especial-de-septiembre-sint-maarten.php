<?php

return [
    'slug' => 'especial-de-septiembre-sint-maarten',
    'title' => 'SINT MAARTEN - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 3 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-sint-maarten.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/04/2020', // mm/dd/yyyy
            'fin'=>'12/31/2020', // mm/dd/yyyy
        ],  
    ],
    'destino'=>'sint-maarten',
    'title_seo' => 'Oferta de Vacaciones a St. Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a St. Maarten',
    'metadescription' => 'Comienza hoy a planear esas vacaciones en familia que tanto anhelas y obtén un inigualable descuento especial del 48% en tu reservación, que incluye desayunos buffet gratis para los ocupantes de la suite; y disfruta de las playas de St. Maarten.',
    'label_resort' => '',
    'main_points' => [
        0=>'Desayuno Buffet Gratis para Todos',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha nuestra magn&iacute;fica promoci&oacute;n del mes, comienza hoy a planear esas vacaciones en familia que tanto anhelas y obt&eacute;n un inigualable descuento especial del 48% en tu reservaci&oacute;n, que incluye desayunos buffet gratis para los ocupantes de la suite y el beneficio de hospedarte en cualquier fecha de este o el siguiente a&ntilde;o. Disfruta de las bellas playas del Caribe, su caracter&iacute;stico mar azul, incre&iacute;bles actividades y recorridos por paisajes naturales, hospedandote en Simpson Bay Beach Resort o en The Villas at Simpson Bay, dos resorts que te brindar&aacute;n amenidades exclusivas y servicios de gran calidad.<br /><br />Reserva ya y vive una experiencia incre&iacute;ble en St. Maarten.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Sólo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Sólo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial al reservar</li>
                        <li>Desayunos buffet gratis para todos los ocupantes de la suite</li>
                        <li>Ni&ntilde;os se hospedan gratis</li>
                        <li>Wi-Fi gratis</li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>'simpson-bay-resort',
                    'price'=>'110',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2789470',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'135',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2789524',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],                
            ],
        ],  
    ],
    'code'=>'',
];
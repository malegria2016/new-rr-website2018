<?php

return [
    'slug' => 'fiesta-mexicana-curacao',
    'title' => 'Fiesta Mexicana: Curacao',
    'thumbnail' => asset('img/deals/fiesta-mexicana-curacao.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'curacao',
    'title_seo' => 'Fiesta Mexicana Curacao | Royal Reservations',
    'alt_seo' => 'Fiesta Mexicana Curacao',
    'metadescription' => 'Vive una experiencia única en las playas de Curacao con nuestra promoción especial por la Fiesta Mexicana',
    'label_resort' => '',
    'main_points' => [
        0=>'Descuento Especial',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'41% de DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Un estupendo descuento te espera al reservar tus vacaciones familiares en Curacao con Royal Reservations. <br /><br />Descubre las hermosas playas de esta bella isla Caribe&ntilde;a durante tus vacaciones en familia, experimenta la alegr&iacute;a de vivir aventuras junto al mar y realizar actividades entretenidas en los hermosos escenarios naturales de Curacao, al tiempo que disfrutas de su gastronom&iacute;a y la calidez de su gente. Planea con anticipaci&oacute;n tus pr&oacute;ximas vacaciones en familia a Curacao con esta grandiosa oferta, disponible &uacute;nicamente por pocos d&iacute;as, en la que obtendr&aacute;s un descuento especial del 41% en tu reservaci&oacute;n en The Royal Sea Aquarium, para disfrutar de tus vacaciones en cualquier fecha de este o del siguiente a&ntilde;o. <br /><br />&iexcl;Reserva con Royal Reservations y comienza a disfrutar de tus vacaciones desde hoy!
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
                        <li>Wi-Fi gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'177',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],

            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 1 Noche</p>
        <p>Reserva Desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
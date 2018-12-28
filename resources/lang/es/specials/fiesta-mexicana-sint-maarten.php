<?php

return [
    'slug' => 'fiesta-mexicana-sint-maarten',
    'title' => 'Fiesta Mexicana: St Maarten',
    'thumbnail' => asset('img/deals/fiesta-mexicana-sint-maarten.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2018', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'title_seo' => 'Fiesta Mexicana St Maarten | Royal Reservations',
    'alt_seo' => 'Oferta Fiesta Mexicana St Maarten',
    'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por St Maarten y Obtén hasta un 51% de descuento al reservar',
    'label_resort' => '',
    'main_points' => [
        0=>'50% de Descuento',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50% de DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Disfruta unas inolvidables vacaciones en familia en St. Maarten con esta grandiosa venta rel&aacute;mpago de Royal Reservations! <br /><br />Para pasar unas vacaciones memorables en St. Maarten, nada mejor que aprovechar la magn&iacute;fica oferta especial, disponible por tiempo limitado, que tenemos para ti, en la que recibir&aacute;s un incre&iacute;ble descuento de hasta 50% al reservar la suite de tu elecci&oacute;n ya sea en Simpson Bay Beach Resort &amp; Marina o en The Villas at Simpson Bay Beach Resort, dos resorts que te ofrecen fabulosas amenidades y servicios; disfrutando no s&oacute;lo de las playas caribe&ntilde;as, maravillas naturales, deliciosa gastronom&iacute;a y actividades divertidas, sino del beneficio de poder vivir tus vacaciones en cualquier fecha de este o el pr&oacute;ximo a&ntilde;o. <br /><br />&iexcl;Reserva ya y vive la experiencia vacacional Royal Reservations!
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
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'119',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2808359',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'149',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2808366',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 3 Noches</p>
        <p>Reserva desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 12/16/2018 </p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
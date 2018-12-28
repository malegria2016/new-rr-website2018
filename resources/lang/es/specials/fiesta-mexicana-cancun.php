<?php

return [
    'slug' => 'fiesta-mexicana-cancun',
    'title' => 'Especial Fiesta Mexicana: Cancun',
    'thumbnail' => asset('img/deals/fiesta-mexicana-cancun.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'4/1/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'cancun',
    'title_seo' => '¡Fiesta Mexicana Cancún! | Royal Reservations',
    'alt_seo' => 'Cancún con Descuento Espectacular',
    'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por la Fiesta Mexicana y obtén hasta un 47% de descuento al reservar',
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
            &iquest;Te gustar&iacute;a recibir un incre&iacute;ble descuento y magn&iacute;ficos beneficios para tus vacaciones a Canc&uacute;n? &iexcl;Con Royal Reservations y esta promoci&oacute;n especial de este mes tendr&aacute;s eso y m&aacute;s!<br /><br />Comienza a empacar tus maletas, pues Royal Reservations trae para ti una oferta especial disponible s&oacute;lo por pocos d&iacute;as, para que vivas unas vacaciones llenas de diversi&oacute;n, cultura, gastronom&iacute;a y m&aacute;s, en las bellas playas de Canc&uacute;n. Aprovecha ya esta venta rel&aacute;mpago y obt&eacute;n un fabuloso 47% de descuento al reservar la suite de tu preferencia, en plan Todo Incluido o Plan Europeo, adem&aacute;s del beneficio de poder disfrutar tus vacaciones en cualquier fecha de este o del pr&oacute;ximo a&ntilde;o, en cualquiera de los resorts disponibles en Royal Reservations.<br /><br />&iexcl;Reserva ahora y comienza a disfrutar de tus vacaciones familiares en Canc&uacute;n!
        </p>
        <ul>
            <li>Plan Todo Incluido disponible en The Royal Cancun y The Royal Sands</li>
            <li>Plan Solo Hospedaje disponible en The Royal Caribbean y The Royal Islander</li>
        </ul>

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
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'262',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'2808321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-cancun.jpg'),
                    'price'=>'324',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'2808311',
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
                    <li>Descuento especial al reservar</li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis (usando camas existentes)</li>
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-caribbean.jpg'),
                    'price'=>'117',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'2808341',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-islander.jpg'),
                    'price'=>'133',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'2808337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 3 noches</p>
        <p>Reserva Desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 3/31/2019 </p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
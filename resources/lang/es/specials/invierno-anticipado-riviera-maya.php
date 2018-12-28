<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'invierno-anticipado-riviera-maya',
    'title' => 'RIVIERA MAYA - Invierno Anticipado',
    'subtitle'=>'¡Viaja en cualquier fecha entre 5 de Enero 2019 y el 30 de Abril, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/invierno-anticipado-riviera-maya.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'01/04/2019', ], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019', 'fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'riviera-maya',
    'title_seo' => 'Vacaciones de Invierno Riviera Maya | Royal Reservations',
    'alt_seo' => 'Vacaciones de Invierno Riviera Maya',
    'metadescription' => 'Aprovecha un descuento exclusivo al reservar anticipadamente tus vacaciones de invierno, elige entre nuestro exclusivo plan todo incluido, hospedaje con desayunos o solo hospedaje, además disfruta de nuestra transportación de aeropuerto Premium.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'Transportación Redonda Premium',
        1=>'Todo Incluido, Habitación con Desayunos o Solo Habitación',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            El invierno se vive mejor frente a la playa y en Royal Reservations tenemos la promoci&oacute;n perfecta para que comiences a planear tus tan ansiadas vacaciones familiares de lujo en el Caribe Mexicano.<br /><br />No hay mejor lugar para pasar unas incre&iacute;bles vacaciones en la Riviera Maya que Grand Residences Riviera Cancun, un lujoso resort familiar calificado por Tripadvisor como unos de los 25 mejores hoteles de lujo de M&eacute;xico; ah&iacute;, vivir&aacute;s momentos incre&iacute;bles a lado de tus seres queridos rodeado de lujo, comodidad y amenidades exclusivas.<br /><br />Aprovecha un descuento exclusivo al reservar anticipadamente tus vacaciones de invierno, elige entre nuestro exclusivo plan todo incluido, hospedaje con desayunos o solo hospedaje, adem&aacute;s disfruta de nuestra transportaci&oacute;n de aeropuerto Premium<br /><br />Disfruta un invierno lleno de sol, mar y arena en Grand Residences Riviera Cancun solo con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial por reserva anticipada </li>
                        <li>Alimentos y bocadillos gourmet ilimitados </li>
                        <li>Bebidas Premium de la casa </li>
                        <li>Servicio a la Habitaci&oacute;n ilimitado las 24 horas </li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto) </li>
                        <li>Botella de Tequila </li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as </li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen GRATIS (usando camas existentes) </li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes <br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Reserva Desde: Hoy hasta 10/31/2018 Viaja Desde: 01/05/2019 hasta 04/30/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2921088',
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
                        <li>Descuento Especial en tu reservaci&oacute;n </li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto) </li>
                        <li>Botella de Tequila </li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as </li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan GRATIS (usando camas existentes) </li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes <br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Reserva Desde: Hoy hasta 10/31/2018 Viaja Desde: 01/05/2019 hasta 04/30/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2921123',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        2=>[
            'tab'=>'Habitación y Desayuno',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación y Desayuno',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n </li>
                        <li>Desayuno diario para todos los ocupantes </li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto) </li>
                        <li>Botella de Tequila </li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as </li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan y toman su desayuno GRATIS con mam&aacute; y pap&aacute; (usando camas existentes) </li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes <br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Reserva Desde: Hoy hasta 10/31/2018 Viaja Desde: 01/05/2019 hasta 04/30/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con Desayuno Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2922120',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ],
    ],
    'code'=>'',
];
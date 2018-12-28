<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'especial-de-halloween-riviera-maya',
    'thumbnail' => asset('img/deals/especial-de-halloween-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Especial de Halloween',
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡Aprovecha esta promoción inigualable y Reserva Ahora!',
    'title_seo' => 'Oferta de Halloween a Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Royal Reservations ha preparado una oferta inigualable con la que vivirás unas vacaciones familiares de lujo en Grand Residences Riviera Cancun.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'45% DTO',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'45% DTO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Una de las mejores cosas que tiene la temporada de Halloween no son los sustos sino los vuelos&hellip;&iexcl;A tus vacaciones de ensue&ntilde;o! Vive d&iacute;as en el para&iacute;so en el resort Grand Residences Riviera Canc&uacute;n. Royal Reservations ofrece un descuento especial al reservar hoy. &iexcl;Esta es una promoci&oacute;n de corta duraci&oacute;n, por lo que te recomendamos no esperar m&aacute;s! &iexcl;Por si fuera poco, los ni&ntilde;os no pagan! <br />Nuestro resort familiar de lujo se localiza en medio de la selva maya frente al Mar Caribe en la Riviera Maya en M&eacute;xico.
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                <ul>
                    <li>Descuento Especial en tu reservaci&oacute;n</li>
                    <li>Alimentos y bocadillos gourmet ilimitados</li>
                    <li>Bebidas Premium de la casa</li>
                    <li>Servicio a la Habitaci&oacute;n ilimitado las 24 horas</li>
                    <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                    <li>Botella de Tequila</li>
                    <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen GRATIS (usando camas existentes)</li>
                    <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'401',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
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
<?php

return [
    'slug' => 'fiesta-mexicana-riviera-maya',
    'title' => 'Fiesta Mexicana: Riviera Maya',
    'subtitle'=>'Viaja desde hoy y hasta Enero 4 del 2018',
    'thumbnail' => asset('img/deals/fiesta-mexicana-riviera-maya.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'1/6/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'title_seo' => '¡Fiesta Mexicana Riviera Maya! | Royal Reservations',
    'alt_seo' => '¡Fiesta Mexicana Riviera Maya!',
    'metadescription' => 'Royal Reservations ha preparado una oferta inigualable con la que vivirás unas vacaciones familiares de lujo en Grand Residences Riviera Cancun.',
    'label_resort' => '',
    'main_points' => [
        0=>'Descuento Especial en tu Reservación',
        
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify txt03">
            Unas vacaciones de lujo te esperan en Grand Residences Riviera Cancun, con esta exclusiva venta rel&aacute;mpago de Royal Reservations. <br /><br />Descubre que vivir unas vacaciones familiares de lujo en la Riviera Maya es muy sencillo con la excelente promoci&oacute;n especial, disponible &uacute;nicamente por pocos d&iacute;as, en la que recibir&aacute;s un fabuloso descuento especial al reservar la suite de tu preferencia en Plan Todo Incluido, en Grand Residences, y el grandioso beneficio de hospedaje gratis para ni&ntilde;os. Experimenta esas vacaciones de lujo en familia que tanto has deseado y disfruta de las hermosas playas de la Riviera Maya, los parques tem&aacute;ticos, la cultura, gastronom&iacute;a y bellezas naturales de este destino tur&iacute;stico del Caribe Mexicano. <br /><br />Reserva hoy mismo y no dejes pasar esta promoci&oacute;n v&aacute;lida por tiempo limitado.
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
                    <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'444',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 3 Noches</p>
        <p>Reserva Desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 1/4/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
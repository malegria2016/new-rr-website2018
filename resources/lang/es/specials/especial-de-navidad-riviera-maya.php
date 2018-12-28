<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-navidad-riviera-maya',
    'thumbnail' => asset('img/deals/especial-de-navidad-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Especial de Navidad',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora esta Oferta Especial de Navidad!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en la Riviera Maya!',
    'title_seo' => 'Oferta de Navidad Vacaciones en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Reserva ahora y obtén un descuento especial del 35% + un 15% adicional en tu reservación con nosotros.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'35%+15% DTO',
        1=>'Transportación Redonda Premium',
        2=>'Plan Todo Incluido',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iexcl;Las playas y el sol de la Riviera Maya te esperan con esta venta rel&aacute;mpago de Royal Reservations, disponible s&oacute;lo por unos d&iacute;as! <br />Es el momento perfecto para disfrutar de unas vacaciones Todo Incluido de lujo en Grand Residences Riviera Canc&uacute;n, un resort frente al mar, disponible en Royal Reservations. Reserva ahora y obt&eacute;n un descuento especial del 35% + un 15% adicional en tu reservaci&oacute;n con nosotros; as&iacute; como beneficios como hospedaje gratis para ni&ntilde;os y amenidades incre&iacute;bles. <br />&iexcl;Reserva ya!            
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
                        <li>Viaje redondo en Transportaci&oacute;n Premium</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen GRATIS (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'418',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483148',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <p>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)</p>
            ',
        ],
        
    ],
    'code'=>'',
];
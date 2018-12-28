<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-riviera-maya',
    'thumbnail' => asset('img/deals/especial-de-otono-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Especial de Otoño ',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja entre Hoy y el 4 de Enero 2019!',
    'box_benefits'=>'¡Aprovecha esta promoción inigualable y Reserva Ahora!',
    'title_seo' => 'Oferta de Vacaciones a Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Aprovecha esta promoción y recibe un inigualable descuento especial en tu reservación en planes Todo Incluido u Hospedaje con Desayunos Incluidos, un Resort Credit por $100 dólares y además, recibe una transportación premium gratuita.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b>Resort: Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'$100 USD Resort Credit',
        1=>'Transportación Redonda Premium',
        2=>'Todo Incluido, Habitación con Desayunos',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Elige entre nuestros planes Todo Incluido u Hospedaje con Desayunos Incluidos para disfrutar un hermoso destino en medio de la naturaleza de la Riviera Maya, ubicado en la Pen&iacute;nsula de Yucat&aacute;n en las costas del Caribe Mexicano. Encontrar&aacute;s todo lo que necesitas en nuestro resort de lujo Grand Residences Riviera Cancun, ideal para familias, parejas y amigos.<br />Reserva ahora y recibe una Canasta Premium de Regalo, 100 d&oacute;lares de Resort Credit para disfrutar en platillos gourmet, bebidas premium, masajes relajantes y diversos productos del Gourmet Food Market. Tambi&eacute;n, recibe un viaje Redondo Premium de cortes&iacute;a desde y hacia el aeropuerto. &iexcl;Los ni&ntilde;os pueden hospedarse sin costo extra!<br />&iexcl;Vive unas vacaciones sin comparaci&oacute;n en nuestro resort de lujo en la Riviera Maya y disfruta cada momento!
        </p>
        

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>100 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Canasta Premium de regalo</li>
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
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'423',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3355756',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                        <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente.</li>
                        <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>100 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Casta Premium de regalo</li>
                        <li>Desayuno diario para todos los ocupantes</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Botella de Tequila</li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan GRATIS (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'261',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3355765',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                        <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, alimentos y bebidas y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente.</li>
                        <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)</li>
                        <li>Esta promoci&oacute;n no incluye alimentos ni bebidas.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
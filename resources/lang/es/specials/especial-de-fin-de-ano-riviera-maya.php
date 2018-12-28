<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-fin-de-ano-riviera-maya',
    'thumbnail' => asset('img/deals/especial-de-fin-de-ano-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Especial de Fin de Año',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha esta promoción inigualable y Reserva Ahora!',
    'title_seo' => 'Oferta de Año Nuevo en Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Este año que termina trae para ti el mejor regalo con la oferta especial de Royal Reservations en la Riviera Maya.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'42% DTO',
        1=>'$100 USD Resort Credit',
        2=>'Transportación Redonda Premium',
        3=>'1 Masaje de 30 min en el Spa',
        4=>'Todo Incluido, Solo Habitación o Habitación con Desayunos'
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Este a&ntilde;o que termina trae para ti el mejor regalo con la oferta especial de Royal Reservations en la Riviera Maya. <br /><br />Si quieres pasar unas vacaciones &uacute;nicas en las playas de la Riviera Maya, aprovecha esta promoci&oacute;n y obt&eacute;n un descuento exclusivo en tu reservaci&oacute;n, un Resort Credit por $100 d&oacute;lares para alimentos, bebidas, productos del Gourmet Food Market, etc. Tambi&eacute;n disfruta de transportaci&oacute;n redonda Premium de aeropuerto, un masaje de 30 minutos y hospedaje gratis para ni&ntilde;os en Grand Residences. <br /><br />Reserva ya en plan Todo Incluido, Hospedaje con Desayunos o Plan Europeo y disfruta desde ahora.
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
                        <li>100 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Un masaje de 30 minutos para una persona</li>
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
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483148',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El masaje de 30 minutos es v&aacute;lido para una persona, una vez. <br />El servicio requiere ser reservado con anticipaci&oacute;n <br />La propina del servicio de masaje no viene incluida <br />El Resort Credit no debe ser considerado como dinero en efectivo <br />El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente, <br />El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos. <br />Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)</p>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>100 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Un masaje de 30 minutos para una persona</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan GRATIS (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483191',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>El masaje de 30 minutos es v&aacute;lido para una persona, una vez. <br />El servicio requiere ser reservado con anticipaci&oacute;n <br />La propina del servicio de masaje no viene incluida <br />El Resort Credit no debe ser considerado como dinero en efectivo <br />El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, alimentos y bebidas y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente, <br />El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos. <br />Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) <br />Esta promoci&oacute;n no incluye alimentos ni bebidas.</p>
            ',
        ],
        2=>[
            'tab'=>'Desayuno más Habitación',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Desayuno más Habitación',
            'description'=>'
                        
                <ul>
                    <li>Descuento Especial en tu reservaci&oacute;n</li>
                    <li>100 D&oacute;lares de Resort Credit por reservaci&oacute;n </li>
                    <li>Un masaje de 30 minutos para una persona </li>
                    <li>Desayuno diario para todos los ocupantes </li>
                    <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto) </li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan y toman su desayuno GRATIS con mam&aacute; y pap&aacute; (usando camas existentes) </li>
                    <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                </ul>

                ',            
            'resorts_area_title'=>'RESORTS Desayuno más Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3483201',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>El masaje de 30 minutos es v&aacute;lido para una persona, una vez. <br />El servicio requiere ser reservado con anticipaci&oacute;n <br />La propina del servicio de masaje no viene incluida <br />El Resort Credit no debe ser considerado como dinero en efectivo <br />El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, alimentos y bebidas y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente, <br />El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos. <br />Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) <br />Esta promoci&oacute;n incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmaci&oacute;n. <br />Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.<br /></p>
            ',
        ],
    ],
    'code'=>'',
];
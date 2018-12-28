<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'super-descuento-riviera-maya',
    'thumbnail' => asset('img/deals/super-descuento-riviera-maya.jpg'),
    'title' => 'Riviera Maya: Súper Descuento',
    'expiration'=>'12/03/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'12/22/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'3',
    'destino'=>'riviera-maya', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja entre Hoy y el 4 de Enero 2019!',
    'box_benefits'=>'¡Aprovecha esta promoción inigualable y Reserva Ahora!',
    'title_seo' => 'Oferta Especial Vacaciones en Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
	'metadescription' => 'Aprovecha esta promoción y recibe un inigualable descuento especial en tu reservación en planes Todo Incluido u Hospedaje con Desayunos Incluidos, un Resort Credit por $100 dólares y además, recibe una transportación premium gratuita.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'42%',
        1=>'$250 USD Resort Credit',
        2=>'Transportación Redonda Premium',
        3=>'Todo Incluido, Habitación con Desayunos',
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Hosp&eacute;date en Grand Residences Riviera Cancun, un exclusivo resort en la Riviera Maya y recibe un magn&iacute;fico descuento al reservar hoy unas vacaciones de lujo en nuestro resort ya sea en Plan Todo Incluido, Hospedaje con Desayunos Incluidos o S&oacute;lo Hospedaje; adem&aacute;s de 250 d&oacute;lares de resort credit para disfrutar de alimentos y bebidas, masajes, y productos del Gourmet Food Market, aunado a la transportaci&oacute;n redonda Premium desde y hacia el aeropuerto. &iexcl;Los ni&ntilde;os se hospedan gratis!
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
                        <li>250 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
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
                    'ihotelier_id'=>'3414652',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                        <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                        <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) </li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>250 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
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
                    'ihotelier_id'=>'3414785',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <ul>
                    <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                    <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, alimentos y bebidas y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                    <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                    <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)</li>
                    <li>Esta promoci&oacute;n no incluye alimentos ni bebidas</li>
                </ul>
            ',
        ],
        2=>[
            'tab'=>'Habitación y Desayuno',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación y Desayuno',
            'description'=>'
                        
                    <ul>
                        <li>Descuento Especial en tu reservaci&oacute;n</li>
                        <li>250 D&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Desayuno diario para todos los ocupantes</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os se hospedan y toman su desayuno GRATIS con mam&aacute; y pap&aacute; (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Habitación y Desayuno',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'3414792',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
                        <li>El Resort Credit es por reservaci&oacute;n y solo se puede aplicar directamente en la recepci&oacute;n al momento del pago de la cuenta, su valor podr&aacute; cubrir consumos del Spa, alimentos y bebidas y el Gourmet Food Market, si no se utiliza en su momento, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</li>
                        <li>El Resort Credit no podr&aacute; combinarse con otras promociones ni descuentos.</li>
                        <li>Esta promoci&oacute;n incluye un servicio de transportaci&oacute;n de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto)</li>
                        <li>Esta promoci&oacute;n incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmaci&oacute;n.</li>
                        <li>Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
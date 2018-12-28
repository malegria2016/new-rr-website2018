<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-fin-de-ano-cancun',
    'thumbnail' => asset('img/deals/especial-de-fin-de-ano-cancun.jpg'),
    'title' => 'Cancún: Especial de Fin de Año',
    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'destino'=>'cancun', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Cancún!',
    'title_seo' => 'Oferta Fin de Año en Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Cancún',
	'metadescription' => 'El año está a punto de terminar y en Royal Reservations queremos darte un regalo increíble con esta oferta especial.',

    'label_resort' => '', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'46% Dto.',
        1=>'$100 USD Spa  Credit',
        2=>'Planes: Todo Incluido o Plan Solo Habitación',
        3=>'Niños se hospedan gratis',
        4=>'Wi-Fi gratis'
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% Dto.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            El a&ntilde;o est&aacute; a punto de terminar y en Royal Reservations queremos darte un regalo incre&iacute;ble con esta oferta especial. <br /><br />Vive unas s&uacute;per vacaciones en Canc&uacute;n, relaj&aacute;ndote en la playa y con las divertidas actividades de estupendos resorts familiares frente al mar, que ofrecen los mejores planes Todo Incluido y Plan Europeo. Aprovecha esta oferta vacacional y obt&eacute;n un descuento del 46% al reservar, Spa Credit por $100 d&oacute;lares para masajes y tratamientos, y hospedaje gratuito para ni&ntilde;os. <br /><br />Reserva con Royal Reservations y disfruta de tus vacaciones en cualquier fecha de este o el siguiente a&ntilde;o.
        </p>
  
    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>100 D&oacute;lares de Spa Credit.</li>
                        <li>Alimentos y bebidas ilimitados.</li>
                        <li>Room Service las 24 horas.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis. </li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'4.5',
                    'img'=>'the-royal-sands',
                    'price'=>'229',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3481558',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'4.5',
                    'img'=>'the-royal-cancun',
                    'price'=>'329',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3481526',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Spa Credit es por reservaci&oacute;n y solo se puede usar en el Spa para masajes y tratamientos de bienestar. <br />El uso del Spa Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped. <br />El Spa Credit no debe ser considerado como dinero en efectivo <br />El Spa Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en el Spa, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente, <br />El Spa Credit no podr&aacute; combinarse con otras promociones ni descuentos. <br />Al elegir el plan Todo Incluido, algunos cargos extras pueden aplicar al ordenar alimentos y bebidas premium <br />Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles. <br />Al hospedarse en los resorts Todo Incluido, y elija el plan Todo Incluido, los ni&ntilde;os hasta 12 a&ntilde;os pueden comer gratis acompa&ntilde;ados por sus padres.</p>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en su reservaci&oacute;n</li>
                        <li>100 D&oacute;lares de Spa Credit.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis.</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'109',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3481636',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'109',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3481619',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                <p>El Spa Credit es por reservaci&oacute;n y solo se puede usar en el Spa para masajes y tratamientos de bienestar. <br />El uso del Spa Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped. <br />El Spa Credit no debe ser considerado como dinero en efectivo <br />El Spa Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en el Spa, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente, <br />El Spa Credit no podr&aacute; combinarse con otras promociones ni descuentos. <br />Los ni&ntilde;os de hasta 12 a&ntilde;os de edad pueden hospedarse gratis si utilizan las camas existentes, camas adicionales no disponibles. <br />Esta promoci&oacute;n no incluye alimentos ni bebidas.</p>
            ',
        ],
    ],
    'code'=>'',
];
<?php

return [
    'slug' => 'especial-de-septiembre-cancun',
    'title' => 'CANCUN - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 3 de Enero, del 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-cancun.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>['inicio'=>'01/04/2020','fin'=>'12/01/2021',],// mm/dd/yyyy
        
    ],
    'destino'=>'cancun',
    'title_seo' => 'Oferta de Vacaciones a Cancún | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Cancún',
    'metadescription' => 'Aprovecha esta promoción y obtén un descuento de hasta 46% en tu reservación, y un Tour Credit por $100 dólares para tours de la agencia de viajes. Reserva hoy mismo y disfruta de tus vacaciones familiares a Cancún.',
    'label_resort' => '',
    'main_points' => [
        0=>'$100 USD Tour Credit',
        1=>'Planes: Todo Incluido o Plan Solo Habitación',
        2=>'Niños se hospedan gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Comienza el mes cont&aacute;ndole a tus amigos y familiares que te vas de vacaciones a Canc&uacute;n. Con esta incre&iacute;ble oferta, tus vacaciones familiares so&ntilde;adas en este para&iacute;so tropical ser&aacute;n toda una realidad; disfrutar&aacute;s de la belleza de su mar azul y de las playas m&aacute;s bonitas del Caribe. Aprovecha esta promoci&oacute;n y obt&eacute;n un descuento de hasta 46% en tu reservaci&oacute;n en Todo Incluido o Plan Europeo, un Tour Credit por $100 d&oacute;lares para tours de la agencia de viajes, todo esto disfrutando de tus vacaciones en cualquier fecha de este o el siguiente a&ntilde;o, y adem&aacute;s, los ni&ntilde;os se hospedan gratis. Reserva hoy mismo y disfruta de tus vacaciones familiares a Canc&uacute;n.
        </p>
        <ul>
            <li>El todo incluido aplica en The Royal Cancun y The Royal Sands</li>
            <li>Solo hospedaje aplica en The Royal Caribbean y The Royal Islander</li>
        </ul>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>100 D&oacute;lares de Tour Credit.</li>
                        <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                        <li>Room Service las 24 horas.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes.</li>
                    </ul>

                ',
                'title_conditions'=>'Términos y Condiciones',
                'conditions'=>'
                        <p>El Tour Credit es por reservaci&oacute;n y solo se puede usar en la agencia de viajes.</p>
                        <p>El uso del Tour Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped.</p>
                        <p>El Tour Credit no debe ser considerado como dinero en efectivo</p>
                        <p>El Tour Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en la agencia de viajes, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</p>
                        <p><br />El Tour Credit no podr&aacute; combinarse con otras promociones ni descuentos.</p>
                        <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
                ',                
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3045130',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'369',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3044863',
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
                        <li>100 D&oacute;lares de Tour Credit.</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y toman su desayuno gratis.</li>
                        <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes.</li>
                    </ul>

                ',

            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <p>El Tour Credit es por reservaci&oacute;n y solo se puede usar en la agencia de viajes.</p>
                    <p>El uso del Tour Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped.</p>
                    <p>El Tour Credit no debe ser considerado como dinero en efectivo</p>
                    <p>El Tour Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en la agencia de viajes, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</p>
                    <p><br />El Tour Credit no podr&aacute; combinarse con otras promociones ni descuentos.</p>
                    <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'111',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3045337',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'122',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3045290',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];
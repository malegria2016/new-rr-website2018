<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'invierno-anticipado-cancun',
    'title' => 'CANCUN - Invierno Anticipado',
    'subtitle' => '¡Viaja en cualquier fecha entre el 25 de Noviembre, de 2018 y el 20 de Marzo, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/invierno-anticipado-cancun.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'11/24/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'03/21/2019','fin'=>'12/31/2019', ],// mm/dd/yyyy
    ],
    'destino'=>'cancun',
    'title_seo' => 'Vacaciones de Invierno en Cancún | Royal Reservations',
    'alt_seo' => 'Vacaciones de Invierno en Cancún',
    'metadescription' => 'Experimenta lo mejor de Cancún al reservar la suite de tu preferencia y recibe un descuento de hasta 44% en tu reservación Todo Incluido o Plan Europeo, además de fabulosos beneficios como hospedaje gratis para niños y $150 dólares de Spa Credit.',
    'label_resort' => '',
    'main_points' => [
        0=>'$150 USD Spa Credit',
        1=>'Todo Incluido o Plan Solo Habitación',
        2=>'Niños se hospedan gratis', 
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            En Royal Reservations sabemos que nunca es demasiado pronto para comenzar a planear unas vacaciones incre&iacute;bles y m&aacute;s si se trata de huir del invierno, es por eso que hemos creado para ti esta magn&iacute;fica oferta especial con la que podr&aacute;s vivir unas c&aacute;lidas vacaciones familiares de invierno en las hermosas playas de Canc&uacute;n. Experimenta lo mejor de este destino del Caribe Mexicano al reservar la suite de tu preferencia y recibe un estupendo descuento de hasta 44% en tu reservaci&oacute;n Todo Incluido o Plan Europeo, adem&aacute;s de fabulosos beneficios como hospedaje gratis para ni&ntilde;os, y un Tour Credit por $150 d&oacute;lares para disfrutar de masajes y tratamientos de bienestar en el Spa. <br /><br />&iexcl;Reserva hoy y disfruta de unas inolvidables vacaciones en familia!<br />
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
                    <li>150 D&oacute;lares de Spa Credit.</li>
                    <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                    <li>Room Service las 24 horas.</li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis.</li>
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes.<br /></li>
                </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Spa Credit es por reservaci&oacute;n y solo se puede usar en el Spa para masajes y tratamientos de bienestar.</p>
                <p>El uso del Spa Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped.</p>
                <p>El Spa Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Spa Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en el Spa, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente.</p>
                <p>El Spa Credit no podr&aacute; combinarse con otras promociones ni descuentos.</p>
                <p>Reserva Desde: Hoy hasta 10/31/2018 Viaja Desde: 11/25/2018 hasta 03/20/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>'the-royal-sands',
                    'price'=>'240',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'3043132',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Cancun',
                    'stars'=>'5',
                    'img'=>'the-royal-cancun',
                    'price'=>'369',
                    'resort_id'=>'73601',
                    'ihotelier_id'=>'3043096',
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
                    <li>150 D&oacute;lares de Spa Credit.</li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y toman su desayuno gratis.</li>
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Spa Credit es por reservaci&oacute;n y solo se puede usar en el Spa para masajes y tratamientos de bienestar.</p>
                <p>El uso del Spa Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped.</p>
                <p>El Spa Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Spa Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en el Spa, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente.</p>
                <p>El Spa Credit no podr&aacute; combinarse con otras promociones ni descuentos.</p>
                <p>Reserva Desde: Hoy hasta 10/31/2018 Viaja Desde: 11/25/2018 hasta 03/20/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'111',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3043201',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Islander',
                    'stars'=>'4',
                    'img'=>'the-royal-islander',
                    'price'=>'122',
                    'resort_id'=>'86182',
                    'ihotelier_id'=>'3043188',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ],
    ],
    'code'=>'',
];
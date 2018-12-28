<?php

return [
    'slug' => 'especial-de-septiembre-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 3 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-playa-del-carmen.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'01/04/2020','fin'=>'12/31/2021', ],// mm/dd/yyyy
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Oferta de Vacaciones a Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Playa del Carmen',
    'metadescription' => 'Con esta promoción especial obtendrás un magnífico descuento de 46% en tu reservación Todo Incluido, además de beneficios especiales como un Tour Credit por $100 dólares para que lo utilices en emocionantes tours de la agencia de viajes.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'$100 USD Tour Credit',
        1=>'Plan Todo Incluido',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Empaca tus maletas, lentes de sol y traje de ba&ntilde;o, y prep&aacute;rate para disfrutar del sol, la playa y su suave arena blanca, un deleitante mar azul y entretenidas actividades como caminar por la 5&ordf; Avenida de Playa del Carmen. Con esta estupenda promoci&oacute;n especial obtendr&aacute;s un magn&iacute;fico descuento de 46% en tu reservaci&oacute;n en plan Todo Incluido, adem&aacute;s de beneficios especiales como un Tour Credit por $100 d&oacute;lares para que lo utilices en emocionantes tours de la agencia de viajes, y la posibilidad de disfrutar de tus vacaciones en cualquier fecha de este o el siguiente a&ntilde;o con hospedaje gratis para ni&ntilde;os.<br /><br />&iexcl;Reserva ya con Royal Reservations y disfruta tus vacaciones en The Royal Haciendas!
        </p>

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
                <p>El Tour Credit es por reservaci&oacute;n y solo se puede usar en la agencia de viajes.<br />El uso del Tour Credit generar&aacute; una cuota de servicio no negociable del 16% basado en el monto utilizado al momento de la redenci&oacute;n, dicha cuota deber&aacute; ser pagada por el hu&eacute;sped.</p>
                <p>El Tour Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Tour Credit s&oacute;lo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n directamente en la agencia de viajes, si no se utiliza en la agencia de viajes no ser&aacute; v&aacute;lido en la recepci&oacute;n, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia ser&aacute; cargada a la cuenta del cliente</p>
                <p>El Tour Credit no podr&aacute; combinarse con otras promociones ni descuentos.</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3045246',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],
    ],
    'code'=>'',
];
<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'invierno-anticipado-playa-del-carmen',
    'title' => 'PLAYA DEL CARMEN - Invierno Anticipado',
    'subtitle' => '¡Viaja en cualquier fecha entre 5 de Noviembre 2018 y el 20 de Marzo, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/invierno-anticipado-playa-del-carmen.jpg'),
    'expiration'=>'10/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'11/24/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'03/21/2019','fin'=>'12/31/2019', ],// mm/dd/yyyy
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Vacaciones de Invierno Playa del Carmen | Royal Reservations',
    'alt_seo' => 'Vacaciones de Invierno Playa del Carmen',
    'metadescription' => 'Aprovecha esta promoción y obtén un descuento del 44% al reservar la suite de tu elección, así como beneficios increíbles, como hospedaje y alimentos gratuitos para los niños que se hospeden en la suite así como un Spa Credit de $150 dólares.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'$150 USD Spa Credit',
        1=>'Plan Todo Incluido',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'46% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Prep&aacute;rate para vivir unas fabulosas vacaciones de invierno en familia, en Playa del Carmen, con esta magn&iacute;fica oferta y escapa del fr&iacute;o del invierno para disfrutar de las bellas playas de arena blanca, las maravillosas actividades, bellezas naturales, etc., y del c&aacute;lido mar azul de Playa del Carmen, en el Caribe Mexicano. Aprovecha esta promoci&oacute;n &uacute;nica y obt&eacute;n un descuento excepcional del 44% al reservar la suite de tu elecci&oacute;n, as&iacute; como beneficios incre&iacute;bles tales como hospedaje y alimentos gratuitos para los ni&ntilde;os que se hospeden en la suite as&iacute; como un Spa Credit por $150 d&oacute;lares para disfrutar de masajes y tratamientos de bienestar en el Spa.<br /><br />Reserva ya y no esperes m&aacute;s para vivir unas vacaciones de invierno en The Royal Haciendas.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                <ul>
                    <li>150 D&oacute;lares de Spa Credit. </li>
                    <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium) </li>
                    <li>Room Service las 24 horas. </li>
                    <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan (usando camas existentes) y comen gratis. </li>
                    <li>Wi-Fi de alta velocidad gratis en la habitaci&oacute;n y &aacute;reas comunes</li>
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
                    'name'=>' The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>'the-royal-haciendas',
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'3043161',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
                
    ],
    'code'=>'',
];
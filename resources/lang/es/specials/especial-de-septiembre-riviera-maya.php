<?php

return [
    'slug' => 'especial-de-septiembre-riviera-maya',
    'title' => 'RIVIERA MAYA - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 4 de Enero, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-riviera-maya.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>['inicio'=>'01/05/2019', 'fin'=>'12/31/2020', ],// mm/dd/yyyy
        
    ],
    'destino'=>'riviera-maya',
    'title_seo' => 'Oferta de Vacaciones a Riviera Maya | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Riviera Maya',
    'metadescription' => 'Aprovecha esta promoción y recibe un inigualable descuento especial en tu reservación en planes Todo Incluido, Hospedaje con Desayunos Incluidos o Solo Hospedaje, un Resort Credit por $200 dólares y además, recibe una transportación premium gratuita.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'main_points' => [
        0=>'$200 USD Resort Credit',
        1=>'Transportación Redonda Premium',
        2=>'Todo Incluido, Habitación con Desayunos o Solo Habitación',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Experimenta unas vacaciones de lujo en Grand Residences Riviera Cancun y descubre las maravillas naturales, las id&iacute;licas playas y el mar azul de la Riviera Maya, divi&eacute;rtete en sus parques tem&aacute;ticos y con las actividades incre&iacute;bles que el destino tiene para ti y tu familia. Aprovecha esta fabulosa promoci&oacute;n y recibe un inigualable descuento especial en tu reservaci&oacute;n en planes Todo Incluido, Hospedaje con Desayunos Incluidos o Solo Hospedaje, un Resort Credit por $200 d&oacute;lares para alimentos y bebidas, masajes de Spa, etc., adem&aacute;s, recibe nuestra transportaci&oacute;n premium gratuita.<br /><br />Reserva ya y vive unas vacaciones familiares de lujo en la Riviera Maya.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>200 d&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Alimentos y bocadillos gourmet ilimitados</li>
                        <li>Bebidas Premium de la casa</li>
                        <li>Servicio a la Habitaci&oacute;n Ilimitado las 24 horas</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Botella de Tequila</li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y comen gratis (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Resort Credit es por reservaci&oacute;n y solo es v&aacute;lido en Grand Residences</p>
                <p>El cr&eacute;dito puede ser utilizado para pagar alimentos y bebidas, servicios del spa y productos del Gourmet Food Market</p>
                <p>El Resort Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Resort Credit solo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n al momento del pago de la cuenta al check out. Si en su momento no se utiliza, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia deber&aacute; ser cubierta por el cliente.</p>
                <p>El cr&eacute;dito no podr&aacute; combinarse con otras promociones ni descuentos</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/04/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959470',
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
                        <li>200 d&oacute;lares de Resort Credit</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Botella de Tequila</li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan gratis (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Resort Credit es por reservaci&oacute;n y solo es v&aacute;lido en Grand Residences</p>
                <p>El cr&eacute;dito puede ser utilizado para pagar alimentos y bebidas, servicios del spa y productos del Gourmet Food Market</p>
                <p>El Resort Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Resort Credit solo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n al momento del pago de la cuenta al check out. Si en su momento no se utiliza, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia deber&aacute; ser cubierta por el cliente.</p>
                <p>El cr&eacute;dito no podr&aacute; combinarse con otras promociones ni descuentos</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/04/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959479',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        2=>[
            'tab'=>'Habitación y Desayuno',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación y Desayuno',
            'description'=>'
                        
                    <ul>
                        <li>200 d&oacute;lares de Resort Credit por reservaci&oacute;n</li>
                        <li>Desayunos diarios para los hu&eacute;spedes registrados</li>
                        <li>Viaje redondo en Transportaci&oacute;n Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                        <li>Botella de Tequila</li>
                        <li>Frutas Frescas y Frutos Secos todos los d&iacute;as</li>
                        <li>Ni&ntilde;os de hasta 12 a&ntilde;os de edad se hospedan y toman su desayuno gratis junto a mam&aacute; y pap&aacute; (usando camas existentes)</li>
                        <li>Acceso a Internet de alta velocidad en la habitaci&oacute;n y &aacute;reas comunes<br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Resort Credit es por reservaci&oacute;n y solo es v&aacute;lido en Grand Residences</p>
                <p>El cr&eacute;dito puede ser utilizado para pagar alimentos y bebidas, servicios del spa y productos del Gourmet Food Market</p>
                <p>El Resort Credit no debe ser considerado como dinero en efectivo</p>
                <p>El Resort Credit solo es v&aacute;lido para esta reservaci&oacute;n y deber&aacute; utilizarse en una sola transacci&oacute;n al momento del pago de la cuenta al check out. Si en su momento no se utiliza, no estar&aacute; disponible para su uso en el futuro, no se reembolsar&aacute;, ni se transferir&aacute; a otra reservaci&oacute;n. Si el valor del producto es mayor al valor del Cr&eacute;dito, la diferencia deber&aacute; ser cubierta por el cliente.</p>
                <p>El cr&eacute;dito no podr&aacute; combinarse con otras promociones ni descuentos</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/04/2019</p>
            ',
            'resorts_area_title'=>'Hoteles con Desayuno Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959484',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
        ],  
    ],
    'code'=>'',
];
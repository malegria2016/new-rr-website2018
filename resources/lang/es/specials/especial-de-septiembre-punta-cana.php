<?php

return [
    'slug' => 'especial-de-septiembre-punta-cana',
    'title' => 'PUNTA CANA - Especial de Septiembre',
    'subtitle'=>'¡Viaja en cualquier fecha entre Hoy y el 1 de Marzo, de 2020!Viaja desde hoy y hasta Marzo 1 del 2020',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/especial-de-septiembre-punta-cana.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[ 'inicio'=>'03/02/2020', 'fin'=>'12/31/2020',], // mm/dd/yyyy
    ],
    'destino'=>'punta-cana',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
    'metadescription' => 'Aprovecha esta oferta en la que recibirás un asombroso descuento especial en tu reservación en plan Todo Incluido, Hospedaje con Desayunos o Sólo Hospedaje, en cualquiera de los 4 resorts de lujo en Punta Cana.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> AlSol Luxury Village</span>',
    'main_points' => [
        0=>'Todo Incluido, Habitación con Desayunos o Solo Habitación',
        1=>'Niños se hospedan gratis', 
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Descubre la belleza de la Rep&uacute;blica Dominicana en Punta Cana, un destino del Caribe que te brindar&aacute; momentos de relajaci&oacute;n y diversi&oacute;n en sus id&iacute;licas playas de arena dorada ba&ntilde;adas por el incre&iacute;ble mar azul; adem&aacute;s disfrutar&aacute;s de asombrosos paisajes naturales, la gastronom&iacute;a t&iacute;pica, cultura, shopping, tours y mucho m&aacute;s. Aprovecha esta oferta en la que recibir&aacute;s un asombroso descuento especial en tu reservaci&oacute;n en plan Todo Incluido, Hospedaje con Desayunos o S&oacute;lo Hospedaje, en cualquiera de los 4 resorts familiares o de lujo disponibles en Royal Reservations. Adem&aacute;s, podr&aacute;s disfrutar de tu hospedaje en cualquier fecha de este o el pr&oacute;ximo a&ntilde;o.<br /><br />Reserva hoy tus vacaciones de lujo en Punta Cana.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Hasta $440 d&oacute;lares en Resort Credits</li>
                        <li>Descuento especial al reservar</li>
                        <li>Alimentos y bebidas ilimitados<br /></li>
                    </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Resort Credit solo aplica para reservaciones en hoteles AlSol</p>
                <p>Al reservar Todo Incluido en AlSol Luxury Village obt&eacute;n 440 USD en Resort Credits</p>
                <p>Al reservar s&oacute;lo habitaci&oacute;n en Luxury Village obt&eacute;n 350 USD en Resort Credits</p>
                <p>Requiere un m&iacute;nimo de 4 noches de estancia</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
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
                    <li>Hasta $350 USD en Resort Credits</li>
                    <li>Descuento especial al reservar <br /></li>
                </ul>
                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>El Resort Credit solo aplica para reservaciones en hoteles AlSol</p>
                <p>Al reservar Todo Incluido en AlSol Luxury Village obt&eacute;n 440 USD en Resort Credits</p>
                <p>Al reservar s&oacute;lo habitaci&oacute;n en Luxury Village obt&eacute;n 350 USD en Resort Credits</p>
                <p>Requiere un m&iacute;nimo de 4 noches de estancia</p>
                <p>Reserva Desde: Hoy hasta 10/01/2018 Viaja entre : Hoy hasta 01/03/2020</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort ',
                    'stars'=>'5',
                    'img'=>'alsol-luxury-village',
                    'price'=>'300',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627349',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],            

        ],
        
    ],
    'code'=>'',
];
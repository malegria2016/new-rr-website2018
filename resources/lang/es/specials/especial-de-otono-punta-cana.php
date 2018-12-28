<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-punta-cana',
    'thumbnail' => asset('img/deals/especial-de-otono-punta-cana.jpg'),
    'title' => 'Punta Cana: Especial de Otoño ',
    'expiration'=>'11/05/2018	', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'4',
    'destino'=>'punta-cana', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva y viajar en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva ahora tus próximas vacaciones!',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Aprovecha esta oferta en la que recibirás un asombroso descuento especial en tu reservación en plan Todo Incluido o Sólo Hospedaje, en cualquiera de los resorts de lujo en Punta Cana.',

    'label_resort' => '',
    'main_points' => [
        0=>'48% Dto.',
        1=>'Todo Incluido o Solo Habitación',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            &iquest;Quieres viajar a Punta Cana pronto? Tenemos una oferta perfecta especial para ti: Reserva tu estancia en cualquiera de nuestros resorts de lujo en Punta Cana por Royal Reservations: Casa de Campo Resort and Villas, Del Mar by Joy Resorts o AlSol Luxury Village Cap Cana Resort y recibe un descuento especial en tu Plan Todo Incluido, Plan con Desayuno incluido o Plan Europeo. <br />Deja que la brisa del mar te haga sentir libre, despierta con el sonido de las olas, deleita tu paladar en alguno de los reconocidos restaurantes internacionales, camina por la playa al atardecer, y &iexcl;disfruta todos esos momentos con las personas que m&aacute;s amas! &iexcl;Vuela a Punta Cana este a&ntilde;o o el siguiente con esta oportunidad &uacute;nica y vive esas vacaciones que has anhelado por tanto tiempo!  
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Hasta 440 d&oacute;lares en Resort Credits</li>
                        <li>Descuento especial al reservar</li>
                        <li>Alimentos y bebidas ilimitados</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'4',
                    'img'=>'alsol-luxury-village',
                    'price'=>'343',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627347',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>El Resort Credit solo aplica para reservaciones en hoteles AlSol</li>
                        <li>Al reservar Todo Incluido en AlSol Luxury Village obt&eacute;n 440 USD en Resort Credits</li>
                        <li>Requiere un m&iacute;nimo de 4 noches de estancia</li>
                    </ul>
            ',
        ],
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Hasta 350 USD en Resort Credits</li>
                        <li>Descuento especial al reservar</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'4',
                    'img'=>'alsol-luxury-village',
                    'price'=>'300',
                    'resort_id'=>'85285',
                    'ihotelier_id'=>'2627349',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'Del Mar By Joy Resorts',
                    'stars'=>'4',
                    'img'=>'del-mar',
                    'price'=>'354',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                    <ul>
                        <li>El Resort Credit solo aplica para reservaciones en hoteles AlSol</li>
                        <li>Al reservar s&oacute;lo habitaci&oacute;n en Luxury Village obt&eacute;n 350 USD en Resort Credits</li>
                        <li>Requiere un m&iacute;nimo de 4 noches de estancia</li>
                    </ul>
            ',
        ],
    ],
    'code'=>'',
];
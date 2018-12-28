<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
	'metadescription' => 'Disfruta de unas vacaciones en familia en uno de los mejores hoteles de la Riviera Maya con desayuno incluido. ¡Aprovecha esta promoción!',
	'alt_seo' => 'Hotel con desayuno en Riviera Maya',
	'title_seo' => 'Hotel en Riviera Maya con desayuno incluido',	
    'title' => 'RIVIERA MAYA - Hospedaje + Desayuno Premium',
    'subtitle' => '¡Viaja en cualquier fecha entre Hoy y el 4 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'slug' => 'hospedaje-desayuno-premium-grand-residences',
    'thumbnail' => asset('img/deals/hospedaje-desayuno-premium-grand-residences.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
        
    'main_points' => [
        0=>'Transportación Redonda Premium',
        1=>'Desayuno Buffet Gratis',
        2=>'Niños se hospedan gratis',
        
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'35', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Con nuestro Plan Bed & Breakfast, podrás degustar de un agradable desayuno en uno de nuestros restaurantes o si no quieres salir de tu suite, puedes solicitar el servicio a la habitación sin costo adicional. Además disfrutarás el gimnasio con servicio las 24 horas y entrenador personal, servicios concierge para tus solicitudes especiales y la maravillosa proximidad a Puerto Morelos, que se encuentra a sólo 5 minutos en automóvil.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Premium Bed & Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>Desayuno Gourmet Incluido para todos</li>
                            <li>Transportación redonda Premium para todos desde y hacia el aeropuerto incluida en tarifa de habitación (1 pick-up)</li>
                            <li>Botella de tequila gratis</li>
                            <li>Gimnasio las 24 horas</li>
                            <li>Servicio de Concierge</li>
                            <li>Frutas frescas y frutos secos en tu habitación todos los días</li>
                        </ul>

                          ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Se requiere 1 noche de estadía mínima</p

            ',
            'resorts_area_title'=>'Hoteles con Desayuno Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun Resort',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'400',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'1996424',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ], 
            ],
        ],  
    ],

    'blackouts'=>[
        0=>[ 'inicio'=>'01/05/2020', 'fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'1',
    'code'=>'',
];
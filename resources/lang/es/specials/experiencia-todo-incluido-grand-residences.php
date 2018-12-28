<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
	'metadescription' => 'Disfruta este resort de la Riviera Maya todo incluido, con alimentos gourmet, transportación al aeropuerto, y muchos beneficios más. ¡Reserva ahora!',
	'alt_seo' => 'Resort todo incluido Riviera Maya',
	'title_seo' => 'Riviera Maya Experiencia Todo Incluido',	
    'title' => 'RIVIERA MAYA - Experiencia Todo Incluido',
    'subtitle' => '¡Viaja en cualquier fecha entre Hoy y el 4 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'slug' => 'experiencia-todo-incluido-grand-residences',
    'thumbnail' => asset('img/deals/experiencia-todo-incluido-grand-residences.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
        
    'main_points' => [
        0=>'Transportación Redonda Premium',
        1=>'Plan Gourmet Todo Incluido',
        2=>'Niños se hospedan gratis',
        
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Puede obtener lo mejor de todo: Cocina Gourmet y las mejores amenidades en nuestro resort, Grand Residences Riviera Cancun, la corona de nuestra familia y calificado en diversas ocasiones como el hotel #1 en Puerto Morelos en la Riviera Maya por Tripadvisor. Disfrute beneficios exclusivos:
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Gourmet Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Servicio ilimitado a la habitación las 24 horas</li>
                            <li>Bebidas Premium de la Casa</li>
                            <li>Comida y bebidas gourmet</li>
                            <li>Centro de Acondicionamiento Físico totalmente equipado con acceso de cortesía las 24 horas</li>
                            <li>Servicios de Concierge</li>
                            <li>Un servicio de Transportación en Viaje Redondo desde y hacia el Aeropuerto</li>
                            <li>Botella de Tequila de cortesía</li>
                            <li>Fruta fresca y seca todos los días</li>
                            <li>Los niños menores de 12 años, comen y se hospedan gratis</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Se requiere 1 noche de estadía mínima</p>

            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences Riviera Cancun',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'454',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'1551276',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],

    'blackouts'=>[
        0=>['inicio'=>'01/05/2020','fin'=>'12/31/2020',],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',
];
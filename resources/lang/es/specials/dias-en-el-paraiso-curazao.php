<?php

return [
	'metadescription' => 'En Royal Reservations hemos preparado una oferta especial con la que pasarás unas maravillosas vacaciones familiares en Curazao.',
	'alt_seo' => 'Especial de Vacaciones en Curacao',
	'title_seo' => 'Días en el paraíso: Curacao',	
    'title' => 'Días en el Paraíso: Curazao',
    'slug' => 'dias-en-el-paraiso-curazao',
    'thumbnail' => asset('img/deals/dias-en-el-paraiso-curazao.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'curacao',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>',
    
    'main_points' => [
        0=>'Descuento especial en tu reservación',
        1=>'Desayuno diario gratis para todos',
        2=>'WiFi en la habitación y áreas comunes',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Descuento del 38%, mientras disfrutas de amenidades y servicios estupendos, así como desayunos diarios de cortesía para los ocupantes de la suite, gracias a nuestro excelente plan de Hospedaje con Desayunos Incluidos en el increíble resort The Royal Sea Aquarium en Curazao.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial en tu reservación en la suite de tu preferencia</li>
                            <li>Desayuno diario gratis para todos</li>
                            <li>WiFi en la habitación y áreas comunes</li>
                        </ul>

                          ',
            'resorts_area_title'=>'Resorts Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'181',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2789569',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package                    
                ],
                
            ],

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Se requiere 1 noche de estadía mínima</p>

    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'1',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
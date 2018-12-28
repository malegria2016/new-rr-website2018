<?php

return [
    'slug' => 'cuatro-de-julio-curacao',
    'title' => 'Curacao: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-curacao.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'curacao',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>',
    
    'title_seo' => 'Oferta de 4 de Julio Curacao | Royal Reservations',
    'alt_seo' => 'oferta de 4 de Julio Curacao',
	'metadescription' => 'Empieza hoy a planear tus vacaciones familiares en el destino paradisiaco de Curacao en el Caribe con nuestra venta especial del 4 de Julio',
    'main_points' => [
        0=>'Descuento especial al reservar',
        1=>'Wi-Fi gratis en la habitación y áreas comunes',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Empieza hoy a planear tus vacaciones familiares en el destino paradisiaco de Curacao en el Caribe con nuestra venta especial del 4 de Julio en la que además de disfrutar de las playas de arena blanca y la tranquilidad de este pintoresco destino caribeño, también disfrutarás de una cómoda estancia en The Royal Sea Aquarium Resort.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Wi-Fi gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium Resort',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-royal-sea-aquarium.jpg'),
                    'price'=>'177',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        Se requieren 1 noche de estadía mínima
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'cuatro-de-julio-sint-maarten',
    'title' => 'St Maarten: 4 de Julio',
    'thumbnail' => asset('img/deals/cuatro-de-julio-sint-maarten.jpg'),
    'expiration'=>'07/09/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'label_resort' => '',

    'title_seo' => 'Oferta de 4 de Julio St. Maarten | Royal Reservations',
    'alt_seo' => 'Oferta de 4 de Julio St. Maarten',
	'metadescription' => 'Empieza hoy a planear tus vacaciones familiares en St. Maarten con nuestra Venta flash del 4 de Julio',
    'main_points' => [
        0=>'Descuento especial al reservar',
        1=>'Wi-Fi gratis en la habitación y áreas comunes',
        
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Empieza hoy a planear tus vacaciones familiares en St. Maarten con nuestra Venta flash del 4 de Julio en la que además de disfrutar de las playas de arena blanca y el mejor entretenimiento de este increíble destino caribeño, también disfrutarás de una excelente estancia en Simpson Bay Beach Resort o The Villas at Simpson Bay. Además, al aprovechar esta increíble oferta, válida solo por tiempo limitado, recibirás un fabuloso descuento del 50% en tu reservación para vivir tus tan deseadas vacaciones familiares.
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
                    'name'=>'Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/simpson-bay-resort.jpg'),
                    'price'=>'119',
                    'resort_id'=>'86179',
                    'ihotelier_id'=>'2808359',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/the-villas-at-simpson-bay-resort.jpg'),
                    'price'=>'149',
                    'resort_id'=>'86180',
                    'ihotelier_id'=>'2808366',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        Se requieren 3 noches de estadía mínima
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
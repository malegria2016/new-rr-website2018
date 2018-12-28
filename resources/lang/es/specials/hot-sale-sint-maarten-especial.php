<?php

return [
    'slug' => 'hot-sale-sint-maarten-especial',
    'title' => 'Hot Sale: St Maarten',
    'thumbnail' => asset('img/deals/hot-sale-sint-maarten-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/16/2018', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'sint-maarten',
    'title_seo' => 'Hot Sale St Maarten',
    'alt_seo' => 'Oferta Hot Sale St Maarten',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por St Maarten y Obtén hasta un 51% de descuento al reservar',
    'label_resort' => '',
    'main_points' => [
        0=>'Descuento Especial',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'50', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha los grandes descuento que nuestra Hot Sale  tiene para ti, en la que además de disfrutar de las playas, entretenimiento tanto dentro como fuera del agua y las maravillas naturales de este increíble destino caribeño, también disfrutarás de un magnífico hospedaje en Simpson Bay Beach Resort o en The Villas at Simpson Bay. Además, aprovechando esta grandiosa oferta, válida por tiempo limitado, recibirás un estupendo descuento del 51% en tu reservación para vivir tus vacaciones en familia en cualquier época del año.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Special Discount</li>
                            <li>Wi-Fi in rooms & common areas</li>
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
        Estadía mínima de 3 Noches
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
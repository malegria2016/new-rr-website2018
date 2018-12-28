<?php

return [
    'slug' => 'hot-sale-curacao-especial',
    'title' => 'Hot Sale: Curacao',
    'thumbnail' => asset('img/deals/hot-sale-curacao-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'02/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'curacao',
    'title_seo' => 'Hot Sale Curacao',
    'alt_seo' => 'Hot Sale Curacao',
	'metadescription' => 'Vive una experiencia única en las playas de Curacao con nuestra promoción especial por la Hot Sale',
    'label_resort' => '',
    'main_points' => [
        0=>'Descuento Especial',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'41', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Royal Reservations se una a la Hot Sale para que comiences a planear unas vacaciones inolvidables en la paradisíaca isla de Curacao, en el Caribe, ya que recibirás un estupendo descuento del 40% en tu reservación para hospedarte en The Royal Sea Aquarium Resort, en cualquier época del año. Además, disfrutarás de las hermosas playas, el mar, las actividades y atracciones fenomenales que este destino turístico idílico tiene para ti y tu familia.
            Reserva hoy mismo y vive una experiencia vacacional única con esta magnífica oferta que Royal Reservations ha creado para ti.
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
        Estadía mínima de 1 Noche
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'verano-punta-cana',
    'title' => 'Punta Cana: Verano Todo el Año',
    'subtitle' => '¡Viaja en cualquier fecha entre Hoy y el 31 de Enero, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/verano-punta-cana.jpg'),
    'expiration'=>'10/01/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[ 'inicio'=>'02/01/2019','fin'=>'12/31/2020', ], // mm/dd/yyyy
    ],
    'destino'=>'punta-cana',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Del Mar Resort</span>',
    'title_seo' => 'Punta Cana Oferta de Verano | Royal Reservations',
    'alt_seo' => 'Punta Cana Oferta de Verano',
	'metadescription' => 'Aprovecha esta maravillosa promoción que tenemos para ti y recibe un fabuloso descuento en tu reservación, disfrutando del mejor plan Todo Incluido',
    'main_points' => [
        0=>'48% de Descuento',
        1=>'Plan: Solo Habitación',
        2=>'Niños se hospedan gratis',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Nada como planear con tiempo tus vacaciones en familia a Punta Cana, para sacarles el mayor provecho y disfrutar al máximo de las increíbles playas de arena suave, el apacible y cristalino mar azul del Caribe y las experiencias únicas que vivirás con tu familia en los tours y actividades divertidas que podrás hacer en este bella isla del Caribe, en República Dominicana. Aprovecha esta maravillosa promoción que tenemos para ti y recibe un fabuloso descuento en tu reservación.
        </p>

    ',
    'rates'=>[
        
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial en tu reservación</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                    <li>Se requiere 1 noche de estadía mínima.</li>
                    <li>Reserva desde: <b>Hoy</b> y hasta el <b>10/01/2018</b>.</li>
                    <li>Viaja entre <b>Hoy</b> y hasta el <b>01/31/2019</b>.</li>
                    </ul>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar Resort by Joy Resorts',
                    'stars'=>'4',
                    'img'=>'del-mar',
                    'price'=>'354',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ],
    ],
    'code'=>'',
];
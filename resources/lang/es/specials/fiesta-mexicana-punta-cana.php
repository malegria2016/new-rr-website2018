<?php

return [
    'slug' => 'fiesta-mexicana-punta-cana',
    'title' => 'Fiesta Mexicana: Punta Cana',
    'thumbnail' => asset('img/deals/fiesta-mexicana-punta-cana.jpg'),
    'expiration'=>'9/18/2018', // mm/dd/yyyy
    'minimo_noches'=>'1',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'punta-cana',
    'title_seo' => 'Fiesta Mexicana Punta Cana | Royal Reservations',
    'alt_seo' => 'Fiesta Mexicana Punta Cana',
    'metadescription' => 'La Fiesta Mexicana con una increíble promoción para que pases las mejores vacaciones familiares en Punta Cana.',
    'label_resort' => '',
    'main_points' => [
        0=>'48% de Descuento',
        
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'48% de DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Las mejores vacaciones en familia en Punta Cana est&aacute;n aqu&iacute; con la venta rel&aacute;mpago que tenemos para ti este mes. <br /><br />Si quieres vivir unas vacaciones de lujo en Punta Cana, en cualquier fecha de este o el pr&oacute;ximo a&ntilde;o y recibir un descuento especial, entonces tienes que aprovechar esta incre&iacute;ble oferta, disponible por tiempo limitado, en la que disfrutar&aacute;s no s&oacute;lo de estos beneficios, sino tambi&eacute;n de hospedaje de lujo con amenidades exclusivas, hermosas playas de arena dorada, la cocina t&iacute;pica de la isla y actividades divertidas. S&oacute;lo reserva la suite o villa de tu preferencia en plan Todo Incluido, Hospedaje con Desayunos o S&oacute;lo Hospedaje, en cualquiera de los 4 fabulosos resorts disponibles en Royal Reservations. <br /><br />Reserva ahora y comienza a empacar para vivir unas vacaciones inolvidables.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>Alimentos y bebidas ilimitados</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'AlSol Luxury Village Cap Cana Resort',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/alsol-luxury-village.jpg'),
                    'price'=>'220',
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
                            <li>Descuento especial en tu reservación</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Del Mar by Joy Resorts',
                    'stars'=>'4',
                    'img'=>asset('img/resorts/deals/del-mar.jpg'),
                    'price'=>'260',
                    'resort_id'=>'86117',
                    'ihotelier_id'=>'2627301',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <p>Estad&iacute;a m&iacute;nima de 1 Noche</p>
        <p>Reserva Desde: Hoy hasta 9/18/2018</p>
        <p>Viaja desde: Hoy hasta 3/31/2019</p>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
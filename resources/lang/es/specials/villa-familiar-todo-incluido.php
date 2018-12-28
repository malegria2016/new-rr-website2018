<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
	'metadescription' => 'Vacaciones en el Caribe Mexicano | Villas Equipadas con Todo Incluido',
	'alt_seo' => 'Vacaciones en el Caribe Mexicano',
	'title_seo' => 'Villas Familiares en el Caribe Todo Incluido',	
    'title' => 'PLAYA DEL CARMEN - Villa Familiar con Todo Incluido',
    'subtitle' => '¡Viaja en cualquier fecha entre Hoy y el 4 de Enero, de 2020!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'slug' => 'villa-familiar-todo-incluido',
    'thumbnail' => asset('img/deals/villa-familiar-todo-incluido.jpg'),
    'expiration'=>'12/31/2018', // mm/dd/yyyy
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'destino'=>'cancun',
    'label_resort' => '',

    'main_points' => [
        0=>'40% de Descuento',
        1=>'Plan Todo Incluido',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis de alta velocidad',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'40% OFF', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¿Qué tal una villa de alto valor y con excelente tarifa para viajar en grupo con su familia o amigos a Cancún o Playa del Carmen, además de que los niños menores de 12 años se hospedan sin costo adicional? Nuestros resorts The Royal Sands en Cancún y The Royal Haciendas en Playa del Carmen ofrecen una selección de cómodas y bellas suites rodeadas de impresionantes paisajes naturales.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Villa Familiar con Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Alimentos y Bebidas Incluidos</li>
                            <li>Niños se hospedan y comen gratis</li>
                            <li>Servicio gratuito de internet inalámbrico.</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <p>Puede estar sujeto a un mínimo de noches por estancia, de acuerdo a las políticas de cada hotel.</p>
            ',
            'resorts_area_title'=>'Hoteles con plan Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sands',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-sands.jpg'),
                    'price'=>'493',
                    'resort_id'=>'86169',
                    'ihotelier_id'=>'1788698',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                1=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'480',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'1788733',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ], 
    ],

    'blackouts'=>[
        0=>[ 'inicio'=>'01/05/2020','fin'=>'12/31/2020',], 
    ],
    'minimo_noches'=>'1',
    'code'=>'',
];
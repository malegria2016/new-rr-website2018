<?php

return [
    'slug' => 'verano-playa-del-carmen',
    'title' => 'Playa del Carmen: Verano Todo el Año',
    'thumbnail' => asset('img/deals/verano-playa-del-carmen.jpg'),
    'expiration'=>'07/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'4',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'title_seo' => 'Playa del Carmen Oferta de Verano | Royal Reservations',
    'alt_seo' => 'Playa del Carmen Oferta de Verano',
	'metadescription' => 'Recibe un estupendo descuento especial de 44% en tu reservación en Plan Todo Incluido, un Resort Credit por $150 dólares y más beneficios.',
    'main_points' => [
        0=>'44% DTO',
        1=>'100 USD RESORT CREDIT',
        2=>'50 USD TOUR CREDIT',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Unas vacaciones familiares inolvidables te esperan en el Caribe Mexicano con nuestra increíble promoción especial “Verano Todo el Año”. Disfruta de caminatas por la Quinta Avenida, hermosas playas, atracciones, actividades increíbles y más, durante tus vacaciones en Playa del Carmen. Sólo tienes que aprovechar esta oferta única para viajar en cualquier época del año y hospedarte en nuestro fabuloso resort frente al mar, The Royal Haciendas, recibiendo un estupendo descuento especial de hasta 44% en tu reservación en Plan Todo Incluido, un Resort Credit por $150 dólares para que lo utilices en tours, masajes relajantes y productos de nuestro Royal Market. 
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Transportación de aeropuerto redonda gratis para todos. (en servicio compartido)</li>
                            <li>150 Dólares en Resort Credits divididos en:</li>
                            <ul>
                                <li>100 dólares de resort Credit</li>
                                <li>50 dólares de Tour Credit.</li>
                            </ul>
                            <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service las 24 horas.</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis.</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2959083',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <ul>
            <li>Tanto el Resort Credit como el Tour Credit son por reservación.</li>
            <li>Tanto el Resort Credit como el Tour Credit no deben ser considerados como dinero en efectivo</li>
            <li>Estos créditos no podrán combinarse con otras promociones ni descuentos.</li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
<?php

return [
    'slug' => 'hot-sale-playa-del-carmen-especial',
    'title' => 'Hot Sale: Playa del Carmen',
    'thumbnail' => asset('img/deals/hot-sale-playa-del-carmen-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'12/31/2019', // mm/dd/yyyy
            'fin'=>'', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'playa-del-carmen',
    'title_seo' => 'Hot Sale Playa del Carmen!',
    'alt_seo' => '¡Hot Sale Playa del Carmen!',
	'metadescription' => '¡Apresúrate y aprovecha esta oferta especial por tiempo limitado que hemos planeado por la Hot Sale y Obtén hasta un 47% de descuento al reservar',
    'label_resort' => '',
    'main_points' => [
        0=>'47% OFF',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'47', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Comience a empacar porque, con esta increíble promoción que tenemos para ti, tú y tu familia vivirán las mejores vacaciones familiares en Playa del Carmen. Disfruta no solo del clima maravillosamente cálido del Caribe mexicano, las playas y las innumerables actividades, sino también de las increíbles comodidades e instalaciones que The Royal Haciendas tiene para ofrecerte. Además, obtén un descuento del 47% al hacer tu reservación en plan Todo Incluido, y viaja en cualquier época del año. Todo eso y más te espera en tus próximas vacaciones en Playa del Carmen.
            Reserva hoy y comienza a vivir unas vacaciones familiares inolvidables con Royal Reservations y esta increíble promoción.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento especial al reservar</li>
                            <li>Alimentos y bebidas ilimitados (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                            <li>Room Service las 24 horas</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'240',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2808328',
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
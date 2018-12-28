<?php

return [
	'metadescription' => 'Comienza a planear las vacaciones a Playa del Carmen que siempre has soñado, con esta magnífica oferta especial que Royal Reservations trae para ti.',
	'alt_seo' => 'Vacaciones sin Límite en Playa del Carmen',
	'title_seo' => 'Vacaciones sin Límite en Playa del Carmen',	
    'title' => 'Playa del Carmen: Paquete Ilimitado',
    'slug' => 'paquete-ilimitado-playa-del-carmen',
    'thumbnail' => asset('img/deals/paquete-ilimitado-playa-del-carmen.jpg'),
    'expiration'=>'07/02/2018', // mm/dd/yyyy
    'destino'=>'playa-del-carmen',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Haciendas</span>',
    'main_points' => [
        0=>'100 USD en Resort Credit',
        1=>'50 USD en Tour Credit',
        2=>'Transportación Redonda Incluida',
        
    ],
    'label_color'=>'2', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'44', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Tú y tus seres queridos vivirán unas inigualables vacaciones familiares en Playa del Carmen, disfrutando del mar y las hermosas playas de este increíble destino vacacional. Además, al aprovechar esta fabulosa promoción, recibirás un súper descuento del 44% al hacer tu reservación en Plan Todo Incluido, que además incluye transportación redonda del aeropuerto al hotel y 150 dólares de Resort Credit para que los utilices en emocionantes tours, masajes relajantes en nuestro Spa y productos de The Royal Market.
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
                        <li>100 dólares de resort credit</li>
                        <li>50 dólares de Tour Credit.</li>
                    </ul>
                    <li>Alimentos y bebidas ilimitados. (aplican cargos adicionales por alimentos y bebidas Premium)</li>
                    <li>Room Service las 24 horas.</li>
                    <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y comen gratis.</li>
                    <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                </ul>

                ',
            'resorts_area_title'=>'RESORTS ALL INCLUSIVE',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Haciendas All Suites Resort & Spa',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/the-royal-haciendas.jpg'),
                    'price'=>'230',
                    'resort_id'=>'86184',
                    'ihotelier_id'=>'2880592',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y condiciones',
    'conditions'=>'
        <p>Tanto el Resort Credit como el Tour Credit son por reservación.</p>
        <p>Tanto el Resort Credit como el Tour Credit no deben ser considerados como dinero en efectivo</p>
        <p>Estos créditos no podrán combinarse con otras promociones ni descuentos.</p>
    ',

    'blackouts'=>[
        0=>[
            'inicio'=>'07/03/2018',
            'fin'=>'31/12/2019',
        ],
        
    ],
    'minimo_noches'=>'4',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
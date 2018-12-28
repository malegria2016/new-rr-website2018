<?php

return [
    'slug' => 'hot-sale-riviera-maya-especial',
    'title' => 'Hot Sale: Riviera Maya',
    'thumbnail' => asset('img/deals/hot-sale-riviera-maya-especial.jpg'),
    'expiration'=>'30/07/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[
            'inicio'=>'01/05/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'title_seo' => '¡Hot Sale Riviera Maya!',
    'alt_seo' => '¡Hot Sale Riviera Maya!',
	'metadescription' => 'Royal Reservations ha preparado una oferta inigualable con la que vivirás unas vacaciones familiares de lujo en Grand Residences Riviera Cancun',
    'main_points' => [
        0=>'Descuento Especial en tu Reservación',
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Cualquier motivo es bueno para vivir las mejores vacaciones de lujo en la playa y con nuestra nuestros descuentos de Hot Sale, vas a tener mil y un razones para que aproveches esta oferta y te animes a disfrutar de unas increíbles vacaciones acompañados de espléndidas amenidades y actividades dentro de las fastuosas instalaciones de Grand Residences Riviera Cancun, reserva ya y obtén un descuento del 45% al reservar tu lujosa suite o villa en Plan Todo Incluido,además recibe nuestra transportación aeroportuaria Premium redonda.
            Reserva ya esta oferta increíble y comienza a planear tus vacaciones en un resort familiar de lujo en la Riviera Maya.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>Descuento Especial en tu reservación</li>
                            <li>Alimentos y bocadillos gourmet ilimitados</li>
                            <li>Bebidas Premium de la casa</li>
                            <li>Servicio a la Habitación ilimitado las 24 horas</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años de edad se hospedan y comen GRATIS (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>asset('img/resorts/deals/grand-residences-riviera-cancun.jpg'),
                    'price'=>'444',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2808347',
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
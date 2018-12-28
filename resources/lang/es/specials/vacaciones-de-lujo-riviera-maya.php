<?php

return [
    'slug' => 'vacaciones-de-lujo-riviera-maya',
    'title' => 'RIVIERA MAYA - Vacaciones de Lujo',
    'thumbnail' => asset('img/deals/vacaciones-de-lujo-riviera-maya.jpg'),
    'expiration'=>'8/31/2018', // mm/dd/yyyy
    'minimo_noches'=>'',
    'blackouts'=>[
        0=>[
            'inicio'=>'04/01/2019', // mm/dd/yyyy
            'fin'=>'12/31/2019', // mm/dd/yyyy
        ],
        
    ],
    'destino'=>'riviera-maya',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> Grand Residences Riviera Cancun</span>',
    'title_seo' => 'Vacaciones de Lujo Riviera Maya | Royal Reservations',
    'alt_seo' => 'Vacaciones de Verano en Riviera Maya',
	'metadescription' => 'Recibe un descuento especial y un grandioso Resort Credit por 200 dólares válido para alimentos y bebidas, tratamientos de SPA y finos productos en el  Gourmet Food Market.',
    'main_points' => [
        0=>'$200 USD de Resort Credit',
        1=>'Transportación Redonda Premium',
        2=>'Todo Incluido, Habitación con Desayunos o Solo Habitación',
        
        
    ],
    'label_color'=>'', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            ¿Estás soñando con unas vacaciones libres de estrés en un lugar frente al mar y con servicios de primera? Grand Residences es tu refugio para olvidarte de todo, y ahora es el momento de reservar tu suite pues te brindamos la mejor Oferta de este Verano! Recibe un descuento especial y un grandioso Resort Credit por 200 dólares válido para alimentos y bebidas, tratamientos de SPA y finos productos en el  Gourmet Food Market. Elige entre nuestros 3 planes: Todo Incluido, Bed & Breakfast, y Sólo Hospedaje.
            Nuestro resort de playa de la Riviera Maya, ha sido galardonado varias veces por TripAdvisor debido a sus servicios de primera, así como a sus amenidades de lujo que encantarán a cualquier viajero que esté acostumbrado a lo mejor. ¡Reserva ahora tus vacaciones y viaja cuando quieras!
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Todo Incluido',
            'icon'=>asset('img/img-specials/drink.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Todo Incluido',
            'description'=>'
                        
                        <ul>
                            <li>$200 dólares de Resort Credit por reservación</li>
                            <li>Alimentos y bocadillos gourmet ilimitados</li>
                            <li>Bebidas Premium de la casa</li>
                            <li>Servicio a la Habitación Ilimitado las 24 horas</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años de edad se hospedan y comen gratis (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Todo Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'472',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959470',
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
                            <li>$200 dólares de Resort Credit</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'325',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959479',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        2=>[
            'tab'=>'Bed & Breakfast',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Bed & Breakfast',
            'description'=>'
                        
                        <ul>
                            <li>$200 dólares de Resort Credit por reservación</li>
                            <li>Desayunos diarios para los huéspedes registrados</li>
                            <li>Viaje redondo en Transportación Premium (Aeropuerto - Hotel - Aeropuerto)</li>
                            <li>Botella de Tequila</li>
                            <li>Frutas Frescas y Frutos Secos todos los días</li>
                            <li>Niños de hasta 12 años de edad se hospedan y toman su desayuno gratis junto a mamá y papá (usando camas existentes)</li>
                            <li>Acceso a Internet de alta velocidad en la habitación y áreas comunes</li>
                        </ul>

                ',
            'resorts_area_title'=>'RESORTS Bed & Breakfast',
            'resorts'=>[
                0=>[
                    'name'=>'Grand Residences',
                    'stars'=>'5',
                    'img'=>'grand-residences-riviera-cancun',
                    'price'=>'300',
                    'resort_id'=>'95939',
                    'ihotelier_id'=>'2959484',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
                
            ],            

        ],
        
    ],
    'title_conditions'=>'Términos y Condiciones',
    'conditions'=>'
        <ul>
            <li>El Resort Credit es por reservación y solo es válido en Grand Residences</li>
            <li>El crédito puede ser utilizado para pagar alimentos y bebidas, servicios del spa y productos del Gourmet Food Market</li>
            <li>El Resort Credit no debe ser considerado como dinero en efectivo</li>
            <li>El Resort Credit solo es válido para esta reservación y deberá utilizarse en una sola transacción al momento del pago de la cuenta al check out. Si en su momento no se utiliza, no estará disponible para su uso en el futuro, no se reembolsará, ni se transferirá a otra reservación. Si el valor del producto es mayor al valor del Crédito, la diferencia deberá ser cubierta por el cliente.</li>
            <li>El crédito no podrá combinarse con otras promociones ni descuentos</li>
            <li>Reserva desde: <b>Hoy</b> y hasta el <b>08/31/2018</b>.</li>
            <li>Viaja entre <b>Hoy</b> y hasta el <b>01/04/2019</b>.</li>
        </ul>
    ',
    'code'=>'',

    // ...  Añadir las keys necesarias para las internas
];
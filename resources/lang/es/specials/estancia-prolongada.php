<?php

return [
    'alturaRateplan'=>'10',//8 líneas ó 10 líneas
    'slug' => 'estancia-prolongada',
    'title' => 'CANCUN - Quédate Más De 14 Noches y Ahorra',
    'subtitle'=>'¡Viaja en cualquier fecha entre el 30 de Octubre de 2018 y el 30 de Abril, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/estancia-prolongada.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'14',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018','fin'=>'10/29/2018',], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019','fin'=>'12/31/2019',], // mm/dd/yyyy
        
    ],
    'destino'=>'cancun',
    'title_seo' => 'The Royal Caribbean Hotel en Cancún Oferta | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Hotel en Cancún Oferta',
    'metadescription' => 'Reserva una estancia larga y recibe un 50% de descuento en tu reservación y traslados incluidos al aeropuerto. Además si te quedas 14 noches o más, recibe un 15% adicional, o si te quedas 30 noches o más, recibe un 30% adicional.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'main_points' => [
        0=>'+14 noches o más = 50% + 15% de Descuento sobre Tarifa Base',
        1=>'+30 noches o más = 50% + 30% de Descuento sobre Tarifa Base',
        2=>'Transportación Redonda',
        

        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NUEVO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            El Royal Caribbean es tu mejor opción de resort de playa; ideal para viajeros que buscan días soleados y tranquilos frente a las aguas turquesas del Caribe. Nuestros servicios y amenidades serán todo lo que necesites. Además, Cancún es un destino multifacético que seguro disfrutarás mucho.
            Porque cuando estás de vacaciones los días nunca son suficientes. ¡Ven al Caribe mexicano y reconéctate con la naturaleza y tus seres queridos con esta promoción especial para largas estancias! Reserva tus vacaciones de 14 noches o más y elige entre solo hospedaje o habitación con desayunos y recibe un 50% de descuento en su reservación más transportación de aeropuerto y además un 15% de descuento adicional sobre el descuento base. Pero espera, hay más; a partir de 30 noches se pone mejor, reserva tus vacaciones por 30 noches o más y en lugar del 15% obtén un 30% de descuento adicional sobre Tarifa Base. ¡Sí, has leído bien! Reserva ahora y viaja en cualquier momento. ¡Comienza a disfrutar tus vacaciones en la playa ahora mismo!
        </p>

    ',
    'rates'=>[
        1=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>50% de descuento + hasta un 30% de descuento adicional sobre Tarifa Base</li>
                            <li>Transportación gratis para todos los ocupantes</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis usando camas existentes</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <ul>
                    <li>Estancias con una duración de entre 14 y hasta 29 noches recibirán un descuento adicional del 15% además del 50% de descuento base.</li>
                    <li>Estancias a partir de 30 noches recibirán un descuento adicional del 30% además del 50% de descuento base.</li>
                    <li>Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación.</li>
                    <li>La transportación será otorgada en servicio compartido.</li>
                    <li>El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las  9pm.</li>
                    <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo.</li>
                    <li>Esta promoción no incluye alimentos ni bebidas, sin embargo, sólo al reservar Hospedaje más desayunos, la promoción incluirá un desayuno buffet diario por persona confirmada en su carta de confirmación. Alimentos y bebida adicionales tendrán un costo adicional.</li>
                    <li>Reserva desde: <b>Hoy</b> y hasta el <b>09/30/2018</b>.</li>
                    <li>Viaja entre <b>10/30/2018</b> y hasta el <b>04/30/2019</b>.</li>            
                </ul>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'89',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021317',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Quédate 14 noches o más y ahorra', // etiqueta temporal en el caribbean
                ],
                1=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'73',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021340',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Quédate 30 noches o más y ahorra', // etiqueta temporal en el caribbean
                ],
                
            ],            

        ],
        0=>[
            'tab'=>'Habitación y Desayuno',
            'icon'=>asset('img/img-specials/b_b.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Habitación y Desayuno',
            'description'=>'
                        
                        <ul>
                            <li>50% de descuento + hasta un 30% de descuento adicional sobre Tarifa Base</li>
                            <li>Desayuno buffet diariamente para todos los huéspedes confirmados</li>
                            <li>Transportación gratis para todos los ocupantes</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis usando camas existentes</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <ul>
                    <li>Estancias con una duración de entre 14 y hasta 29 noches recibirán un descuento adicional del 15% además del 50% de descuento base.</li>
                    <li>Estancias a partir de 30 noches recibirán un descuento adicional del 30% además del 50% de descuento base.</li>
                    <li>Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación.</li>
                    <li>La transportación será otorgada en servicio compartido.</li>
                    <li>El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las  9pm.</li>
                    <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo.</li>
                    <li>Esta promoción no incluye alimentos ni bebidas, sin embargo, sólo al reservar Hospedaje más desayunos, la promoción incluirá un desayuno buffet diario por persona confirmada en su carta de confirmación. Alimentos y bebida adicionales tendrán un costo adicional.</li>
                    <li>Reserva desde: <b>Hoy</b> y hasta el <b>09/30/2018</b>.</li>
                    <li>Viaja entre <b>10/30/2018</b> y hasta el <b>04/30/2019</b>.</li>            
                </ul>
            ',
            'resorts_area_title'=>'Hoteles con Desayuno Incluido',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'113',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021321',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Quédate 14 noches o más y ahorra', // etiqueta temporal en el caribbean
                ],
                1=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'97',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021350',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                    'adicional'=>'Quédate 30 noches o más y ahorra', // etiqueta temporal en el caribbean
                ],
                
            ],            

        ],
        
    ],
    'code'=>'',
];
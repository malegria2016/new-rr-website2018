<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'habitacion-desayuno',
    'title' => 'CANCUN - Habitación + Desayuno',
    'subtitle'=>'¡Viaja en cualquier fecha entre el 30 de Octubre del 2018 y el 30 de Abril, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/habitacion-desayuno.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'10/29/2018', ],// mm/dd/yyyy
        1=>[ 'inicio'=>'01/04/2020', 'fin'=>'12/31/2020', ],// mm/dd/yyyy 
    ],
    'destino'=>'cancun',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'title_seo' => 'The Royal Caribbean Hotel en Cancún + Desayunos | Royal Reservations',
    'alt_seo' => 'The Royal Caribbean Hotel en Cancún con desayunos',
    'metadescription' => 'Disfruta de tus vacaciones con esta oferta y recibe un descuento especial de 50% más un 10% adicional al reservar la suite de tu preferencia en The Royal Caribbean hotel en Cancún, además te regalamos los desayunos buffet diarios.',    
    'main_points' => [
        0=>'50% + 10% de Descuento sobre Tarifa Base',
        1=>'Desayuno Gratis Para Todos',
        2=>'Planes: Habitación con Desayunos o Solo Habitación',
        
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NUEVO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Aprovecha esta magnífica promoción y viaja a las hermosas playas de arena blanca de Cancún. Sumérgete en el azul del océano, diviértete con las actividades acuáticas y terrestres, degusta la deliciosa cocina mexicana e internacional, y aprende sobre la cultura del destino. Disfruta de tus vacaciones con esta oferta y recibe un descuento especial de 50% más un 10% adicional sobre Tarifa Base, al reservar la suite de tu preferencia en The Royal Caribbean, resort familiar frente al mar en Cancún, además te regalamos los desayunos buffet diarios.
            Reserva ahora tus vacaciones y viaja en cualquier momento para experimentar las vacaciones familiares perfectas en la playa con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>50% de descuento + 10% de descuento adicional sobre Tarifa Base</li>
                            <li>Desayuno buffet gratis diariamente para todos los huéspedes confirmados</li>
                            <li>Niños de hasta 12 años de edad se hospedan (usando camas existentes) y toman su desayuno gratis.</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes.</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <ul>
                    <li>Esta promoción incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmación.</li>
                    <li>Alimentos y bebidas adicionales tendrán un costo adicional.</li>
                    <li>Reserva desde: <b>Hoy</b> y hasta el <b>09/30/2018</b>.</li>
                    <li>Viaja entre <b>10/30/2018</b> y hasta el <b>04/30/2019</b>.</li>
                    <li>Se requiere 3 noches de estadía para aplicar esta oferta.</li>
                </ul>
            ',
            'resorts_area_title'=>'Hoteles con plan Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Caribbean',
                    'stars'=>'4',
                    'img'=>'the-royal-caribbean',
                    'price'=>'94',
                    'resort_id'=>'86175',
                    'ihotelier_id'=>'3021205',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],            
        ],
    ],
    'code'=>'',
];
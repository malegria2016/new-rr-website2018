<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'habitacion-traslado',
    'title' => 'CANCUN - Habitación + Transportación',
    'subtitle' => '¡Viaja en cualquier fecha entre 30 de Octubre 2018 y el 30 de Abril, de 2019!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta!',
    'thumbnail' => asset('img/deals/habitacion-traslado.jpg'),
    'expiration'=>'9/30/2018', // mm/dd/yyyy
    'minimo_noches'=>'3',
    'blackouts'=>[
        0=>[ 'inicio'=>'09/01/2018', 'fin'=>'10/29/2018', ], // mm/dd/yyyy
        1=>[ 'inicio'=>'05/01/2019', 'fin'=>'12/31/2019', ], // mm/dd/yyyy 
    ],
    'destino'=>'cancun',
    'title_seo' => 'The Royal Caribbean Hotel en Cancún + Traslados | Royal Reservations',
    'alt_seo' => 'Oferta The Royal Caribbean Hotel en Cancún',
    'metadescription' => 'Mira esta increíble promoción que incluye un descuento del 50% más un descuento adicional del 10% al hospedarte en The Royal Caribbean Resort en la suite de tu elección, además recibe transportación redonda al aeropuerto.',
    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Caribbean</span>',
    'main_points' => [
        0=>'50% + 10% de Descuento sobre Tarifa Base',
        1=>'Transportación Redonda',
        2=>'Planes: Habitación con Desayunos o Solo Habitación',
        
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'NUEVO', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje


    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Las playas de Cancún están a tu alcance con nuestra increíble promoción que incluye un descuento del 50% más un descuento adicional del 10% sobre Tarifa Base, al hospedarte en The Royal Caribbean Resort en la suite de tu elección, además recibe transportación redonda de aeropuerto. Vive días de ensueño en la libertad de los paisajes tropicales y las amplias dunas de arena blanca, relajándome, nadando o simplemente disfrutando tu bebida favorita bajo la sombra de una palmera.
            Nuestro hermoso resort de playa es ideal para familias y parejas que buscan un lugar hermoso y tranquilo. Además, el escenario perfecto de Cancún, no solo contiene nuestro paraíso privado sino muchos otros lugares interesantes y atracciones como parques temáticos, clubes, restaurantes y más. Disfruta las impecables instalaciones, servicios y amenidades característicos de The Royal Caribbean All Suites Resort con Royal Reservations.
        </p>

    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                        <ul>
                            <li>50% de descuento + 10% de descuento adicional</li>
                            <li>Transportación gratis para todos los ocupantes</li>
                            <li>Niños de hasta 12 años de edad se hospedan gratis usando camas existentes</li>
                            <li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                        </ul>

                ',
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                <ul>
                    <li>Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación.</li>
                    <li>La transportación será otorgada en servicio compartido.</li>
                    <li>El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las  9pm.</li>
                    <li>El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo.</li>
                    <li>Esta promoción no incluye alimentos ni bebidas.</li>
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
                    'ihotelier_id'=>'3021296',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ], 
            ],
        ], 
    ],
    'code'=>'',
];
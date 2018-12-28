<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-navidad-curacao',
    'thumbnail' => asset('img/deals/especial-de-navidad-curacao.jpg'),
    'title' => 'Curacao: Especial de Navidad',
    'expiration'=>'12/19/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/11/2018', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora esta Oferta Especial de Navidad!',
    'box_benefits'=>'¡No pierdas la oportunidad de Reservar Ahora tus próximas vacaciones en Curacao!',
    'title_seo' => 'Oferta de Navidad en Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Reserva la suite de tu elección para obtener un descuento del 35% + nuestro descuento exclusivo del 7%',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>', //<span class="av-skyblue"><b>Resort:</b> Simpson Bay / The Villas at Simpson Bay</span>
    'main_points' => [
        0=>'35%+7% Dto.',
        1=>'Niños se hospedan gratis',
        2=>'Wi-Fi gratis',
        
    ],
    'label_color'=>'3', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Christmas Flash Sale Curacao <br />Royal Reservations has an incredible special offer for you to live an amazing vacation in the Caribbean island of Curacao! <br /><br />This flash sale available only for a few days will be the best Christmas gift for you to experience an amazing beach vacation. Just book the suite of your choice in European Plan with Royal Reservations and get a special discount of 35% + our 7% exclusive discount to stay at The Royal Sea Aquarium in Curacao and enjoy your vacation during this or the next year. <br /><br />Book now!  
        </p>


    ',
    'rates'=>[
        0=>[
            'tab'=>'Solo Habitación',
            'icon'=>asset('img/img-specials/bed.png'), // AI = drink.png -- EP = bed.png -- BB = b_b.png
            'title'=>'Solo Habitación',
            'description'=>'
                        
                    <ul>
                        <li>Descuento especial en tu reservaci&oacute;n</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',            
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium ',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'137',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
            
                
            ',
        ],
    ],
    'code'=>'',
];
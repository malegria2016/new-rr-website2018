<?php

return [
    'alturaRateplan'=>'8',//8 líneas ó 10 líneas
    'slug' => 'especial-de-otono-curacao',
    'thumbnail' => asset('img/deals/especial-de-otono-curacao.jpg'),
    'title' => 'Curacao: Especial de Otoño',
    'expiration'=>'11/05/2018', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy	
    ],
    'minimo_noches'=>'1',
    'destino'=>'curacao', //cancun, riviera-maya, playa-del-carmen, sint-maarten, curacao, punta-cana

    'subtitle' => '¡Reserva ahora y viaja en cualquier fecha del año!',
    'box_benefits'=>'¡Aprovecha los beneficios exclusivos de esta oferta y Reserva Ahora tus vacaciones!',
    'title_seo' => 'Oferta de Vacaciones a Curacao | Royal Reservations',
    'alt_seo' => 'Oferta de Vacaciones a Curacao',
	'metadescription' => 'Aprovecha esta promoción exclusiva en la cual recibirás un descuento especial del 38% en tu reservación, la cual incluye también desayunos gratis para todos los ocupantes de la habitación en el hotel The Royal Sea Aquarium en Curacao.',

    'label_resort' => '<span class="av-skyblue"><b>Resort:</b> The Royal Sea Aquarium</span>',
    'main_points' => [
        0=>'38% Dto.',
        1=>'Desayuno Gratis para Todos',
        2=>'Niños se hospedan gratis',
        3=>'Wi-Fi gratis',
    ],
    'label_color'=>'1', //1 Verde - 2 Naranja  -  3 Rojo   - 0 ó vacio no lleva etiqueta
    'label_percent_off'=>'38% DTO.', // Si label_color => 3 se pondrá last minute deal y no tomara esta porcentaje

    'description'=>'
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">
            Visita uno de los mejores destinos para practicar snorkel o buceo: Curacao, una hermosa isla en medio del Caribe con playas de fina arena y aguas cristalinas y poco profundas ideales para ni&ntilde;os. As&iacute; que si necesitas unas vacaciones con tu familia, este es un buen lugar para pasarla bien. Adem&aacute;s, sus bellos edificios e interesante historia son las razones por las que est&aacute; considerado un Patrimonio de la Humanidad por la UNESCO. <br />Hosp&eacute;date en el Royal Sea Aquarium y obt&eacute;n un descuento del 38% si reservas ahora tu estancia. Royal Reservations tambi&eacute;n te incluye los desayunos de cortes&iacute;a diariamente para todos los hu&eacute;spedes de la habitaci&oacute;n&hellip; &iexcl;para que puedan iniciar sus d&iacute;as soleados con toda la energ&iacute;a! &iexcl;No esperes m&aacute;s y disfruta las vacaciones que mereces y que quieres compartir con tus seres queridos!            
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
                        <li>Desayuno diario gratis para todos</li>
                        <li>WiFi en la habitaci&oacute;n y &aacute;reas comunes</li>
                    </ul>

                ',
            'resorts_area_title'=>'RESORTS Solo Habitación',
            'resorts'=>[
                0=>[
                    'name'=>'The Royal Sea Aquarium',
                    'stars'=>'4',
                    'img'=>'the-royal-sea-aquarium',
                    'price'=>'160',
                    'resort_id'=>'86181',
                    'ihotelier_id'=>'2808377',
                    'tipo'=>'1', // 1 RatePlanID   --  2 Package
                ],
            ],
            'title_conditions'=>'Términos y Condiciones',
            'conditions'=>'
                    <ul>
                        <li>Esta promoci&oacute;n incluye un desayuno diario gratis por persona confirmada en su carta de confirmaci&oacute;n.</li>
                        <li>Alimentos y bebidas adicionales tendr&aacute;n un costo adicional.</li>
                    </ul>
            ',
        ],
        
    ],
    'code'=>'',
];
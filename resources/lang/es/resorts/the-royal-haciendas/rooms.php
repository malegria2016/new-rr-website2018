<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en The Royal Haciendas Resort | Royal Reservations',
            'metadescription'=>'Disfruta de todos los beneficios en The Royal Haciendas, ya que todas las habitaciones están bellamente decoradas, y además  brindan amenidades como Wi-Fi de cortesía, teléfono, televisión de pantalla plana, DVD, horno de microondas, plancha y más.',
        ], 
    'title' => 'Habitaciones En The Royal Haciendas',
    'description' => 'Entra a tu propio remanso privado de paz en cualquiera de las suites y villas bellamente decoradas y distribuidas en The Royal Haciendas All Suites Resort & Spa. Cada suite y villa cuenta con amenidades Premium como Wi-Fi de cortesía, teléfono, televisión, DVD, microondas, plancha y más.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-haciendas/hoteles-en-playa-del-carmen-con-habitaciones-familiares',

    //descripción landing interna
    'title_interna_rooms' => 'Habitaciones De Lujo en The Royal Haciendas',
    //descripción landing interna
    'description_interna_rooms' => '<p>No habr&aacute; nada mejor que disfrutar d&iacute;as de relajaci&oacute;n, diversi&oacute;n y placer en tu amplia y elegante suite o villa &nbsp;mientras conoces lo mejor de Playa del Carmen. Disfruta de todos los beneficios de un hospedaje de primera calidad con excelentes amenidades complementadas con servicios excelentes que brinda siempre el equipo de &nbsp;<strong>The Royal Haciendas All Suites Resort &amp; Spa</strong>.</p>
    <p>Explora tu propio rinc&oacute;n de paz en tu Hermosa suite o villa en The Royal Haciendas. Todas las habitaciones est&aacute;n bellamente distribuidas y decoradas, y adem&aacute;s &nbsp;brindan buenas y &uacute;tiles amenidades como Wi-Fi de cortes&iacute;a, tel&eacute;fono, televisi&oacute;n de pantalla plana, DVD, horno de microondas, plancha y m&aacute;s. </p>',    


    'rooms' => [
        0=>[
            'title' => 'Deluxe Junior Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '229',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-junior-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adultos y 2 niños',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 42 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'1 baño completo',
                    'icon'=>'bathroom',
                ],
                5=>[
                    'title'=>'Regadera',
                    'icon'=>'shower',
                ],
                6=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],        
                
            ],
            'image' => [
                    'title' => 'Deluxe Junior Suites',
                    'alt' => 'Deluxe Junior Suites',
                    'src' => 'deluxe-junior-suite.jpg',
            ],
            'carrusel' => [
                0 => 'deluxe-junior-suite-a.jpg',
                1 => 'deluxe-junior-suite-b.jpg',
                2 => 'deluxe-junior-suite-c.jpg',
            ],  
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Unidades con vista al Mar o Frente al Mar.',
                1=>'Cocineta con horno de microondas, cafetera y minibar',
                2=>'Baño completo con amenidades',
                3=>'Conexión de alta velocidad a internet Wi-Fi',
            ],             
        ],

        1=>[
            'title' => 'Suite Deluxe de Una Recámara',
            'price' => [
                'currency' => 'USD',
                'amount' => '289',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-one-bedroom-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'4 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King, 2 tipo Murphy',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 82 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 baño completo',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],        
            ],
            'image' => [
                    'title' => 'Suite Deluxe de Una Recámara',
                    'alt' => 'Suite Deluxe de Una Recámara',
                    'src' => 'deluxe-one-bedroom-suite.jpg',
            ],
            'carrusel' => [
                0 => 'deluxe-one-bedroom-suite-a.jpg',
                1 => 'deluxe-one-bedroom-suite-b.jpg',
                2 => 'deluxe-one-bedroom-suite-c.jpg',
            ],           
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Terraza privada con Jacuzzi',
                1=>'Unidades con vista al Mar o Frente al Mar ',
                2=>'Baño completo con amenidades',
                3=>'Conexión de alta velocidad a internet Wi-Fi',
            ],            
        ],        
        2=>[
            'title' => 'Suite Deluxe de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '399',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-two-bedroom-master-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 cama king size, 2 camas tipo Murphy, 2 camas matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área:  150 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 baños completos',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'2 balcones',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],
                
            ],
            'image' => [
                    'title' => 'Suite Deluxe de Dos Recámaras',
                    'alt' => 'Suite Deluxe de Dos Recámaras',
                    'src' => 'deluxe-two-bedroom-master-suite.jpg',
            ],
            'carrusel' => [
                0 => 'deluxe-two-bedroom-master-suite-a.jpg',
                1 => 'deluxe-two-bedroom-master-suite-b.jpg',
                2 => 'deluxe-two-bedroom-master-suite-c.jpg',
            ],              
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Terraza Privada con Jacuzzi',
                1=>'Suites con vista al Mar o Frente al Mar',
                2=>'Baño completo con amenidades',
                3=>'Amplios espacios en sala y comedor',
            ],            
        ],
    ],
];
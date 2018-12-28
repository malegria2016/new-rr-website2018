<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en The Royal Sands Resort | Royal Reservations',
            'metadescription'=>'Cada una de nuestras habitaciones y suites brinda el mejor alojamiento y cuenta con su propio balcón o terraza privados, así como con conexión Wi-Fi de alta velocidad gratuito, ropa de cama y amenidades de baño de primera categoría.',
        ],
    'title' => 'Habitaciones En The Royal Sands',
    'description' => 'En cualquiera de las 680 amplias suites y villas bellamente decoradas y amuebladas, nuestros huéspedes encontrarán un refugio privado en The Royal Sands Resort & Spa All inclusive. Cada suite cuenta con TV y DVD, conexión a Wi-Fi gratuito, terraza o balcón privados con maravillosas vistas al mar o frente a la hermosa playa, y mucho más.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-sands/hoteles-en-cancun-con-habitaciones-familiares',

     //descripción landing interna
    'title_interna_rooms' => 'Habitaciones y Suites en The Royal Sands',
    //descripción landing interna
    'description_interna_rooms' => '<p>Presentando habitaciones amplias y con mobiliario c&oacute;modo, adem&aacute;s de elegantes suites y villas familiares totalmente equipadas, los hu&eacute;spedes de <strong>The Royal Sands Resort &amp; Spa All Inclusive</strong> vivir&aacute;n una estancia agradable rodeada de una decoraci&oacute;n moderna que brinda relajaci&oacute;n y confort, as&iacute; como amenidades exclusivas, complementadas con incre&iacute;bles vistas al Mar Caribe que te quitar&aacute;n el aliento.</p>
    <p>Cada una de nuestras habitaciones y suites brinda el mejor alojamiento y cuenta con su propio balc&oacute;n o terraza privados, as&iacute; como con conexi&oacute;n Wi-Fi de alta velocidad gratuito, ropa de cama y amenidades de ba&ntilde;o de primera.</p>',

    'rooms' => [
        0=>[
            'title' => 'Junior Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '239',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RS-junior-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adultos y 1 niño',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 40 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'mini-bar',
                ],
                4=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],
                5=>[
                    'title'=>'1 Baño',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Tina y regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],
            ],
            'image' => [
                    'title' => 'Junior Suites',
                    'alt' => 'Junior Suites',
                    'src' => 'junior-suite.jpg',
            ],
            'carrusel' => [
                    0 => 'junior-suite-a.jpg',
                    1 => 'junior-suite-b.jpg',
                    2 => 'junior-suite-c.jpg',
            ],            
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocineta con microondas, cafetera, minibar',
                2=>'Baño completo con amenidades de baño',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],            
        ],

        1=>[
            'title' => 'Suites de una Habitación',
            'price' => [
                'currency' => 'USD',
                'amount' => '299',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('/img/rooms/RS-one-bedroom-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'4 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size, 2 tipo Murphy',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 81m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Baño',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'1 Terraza',
                    'icon'=>'terrace',
                ],
                6=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],        
                
            ],
            'image' => [
                    'title' => 'Suites de una Habitación',
                    'alt' => 'Suites de una Habitación',
                    'src' => 'one-bedroom-suite.jpg',
            ],
            'carrusel' => [
                0 => 'one-bedroom-suite-a.jpg',
                1 => 'one-bedroom-suite-b.jpg',
                2 => 'one-bedroom-suite-c.jpg',
            ],  
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina equipada con electrodomésticos',
                2=>'Baño completo con amenidades de baño',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],            
        ],        
        2=>[
            'title' => 'Master Suites de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '409',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RS-two-bedroom-master-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size, 2 tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 140 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 Baños',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'1 Balcón',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],
                8=>[
                    'title'=>'1 Terraza',
                    'icon'=>'terrace',
                ],
                
            ],
            'image' => [
                    'title' => 'Master Suites de Dos Recámaras',
                    'alt' => 'Master Suites de Dos Recámaras',
                    'src' => 'two-bedroom-master-suite.jpg',
            ],
            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],           
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina totalmente equipada',
                2=>'Sala y Comedor amplios',
                3=>'Baño completo con amenidades de baño',
            ],
        ],
    ],
];
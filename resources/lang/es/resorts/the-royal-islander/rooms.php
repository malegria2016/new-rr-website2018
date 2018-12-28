<?php

return [
    'seo'=>
        [
            'title'=>'The Royal Islander Resort Habitaciones | Royal Reservations',
            'metadescription'=>'Las impecables instalaciones de este resort ofrecen servicios de clase mundial con increíbles amenidades en todas sus habitaciones bellamente decoradas, y con fantásticas vistas del Mar Caribe.',
        ], 
    'title' => 'Habitaciones en The Royal Islander',
    'description' => 'Todas las habitaciones, suites y villas familiares en The Royal Islander, ofrecen alojamiento cómodo en espacios totalmente amueblados que brindan vistas impresionantes al Mar Caribe. En nuestra variada gama de habitaciones contarás con Wi-Fi gratuito, TV de pantalla plana con DVD, caja de seguridad, teléfono, aire acondicionado central y balcón o terraza privados, entre otras amenidades exclusivas.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-islander/hoteles-en-cancun-con-habitaciones-familiares',

        //descripción landing interna
    'title_interna_rooms' => 'Habitaciones y Suites en The Royal Islander',
    //descripción landing interna
    'description_interna_rooms' => '<p>Experimenta el mejor alojamiento en nuestro resort de Canc&uacute;n, <strong>The Royal Islander All Suites Resort</strong>, que ofrece habitaciones, suites y villas con una decoraci&oacute;n moderna y vistas incre&iacute;bles del Mar Caribe, en amplios y c&oacute;modos espacios que brindan a los ocupantes el descanso y la relajaci&oacute;n que tanto anhelan durante sus vacaciones familiares en Canc&uacute;n</p>
    <p>Entre nuestras opciones de alojamiento en Canc&uacute;n podr&aacute;s elegir una Junior Suite ideal para 2 personas, que incluye c&oacute;modas camas, ba&ntilde;o completo, cocineta y balc&oacute;n; mientras que nuestras Suites de Una o Dos Rec&aacute;maras incluyen cocina totalmente equipada, sala y comedor, ba&ntilde;o completo y terraza. Adem&aacute;s, dentro de las amenidades exclusivas de tu habitaci&oacute;n encontrar&aacute;s conexi&oacute;n a Wi-Fi de alta velocidad. </p>
    <p>Rel&aacute;jate y disfruta del mejor alojamiento s&oacute;lo en <strong>The Royal Islander All Suites Resort</strong>!</p>',

    'rooms' => [
        0=>[
            'title' => 'Junior Suites Dobles',
            'price' => [
                'currency' => 'USD',
                'amount' => '103',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RI-standard-room-ov.jpg'),
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
                    'title'=>'Área: 39 m2',
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
                    'title' => 'Junior Suites Dobles',
                    'alt' => 'Junior Suites Dobles',
                    'src' => 'double-standard-room.jpg',
            ],
            'carrusel' => [
                    0 => 'double-standar-room-a.jpg',
                    1 => 'double-standar-room-b.jpg',
                    2 => 'double-standar-room-c.jpg',
            ],  
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '27',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocineta con microondas, cafetera, minibar',
                2=>'Baño completo con secadora para cabello',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],             
        ],

        1=>[
            'title' => 'Suites de Una Recámara',
            'price' => [
                'currency' => 'USD',
                'amount' => '140',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RI-one-bedroom-suite-ov.jpg'),
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
                    'title'=>'Área: 74 m2',
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
                    'icon'=>'balcony',
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
                    'title' => 'Suites de Una Recámara',
                    'alt' => 'Suites de Una Recámara',
                    'src' => 'one-bedroom-suite.jpg',
            ],
            'carrusel' => [
                    0 => 'one-bedroom-suite-a.jpg',
                    1 => 'one-bedroom-suite-b.jpg',
                    2 => 'one-bedroom-suite-c.jpg',
            ],                         
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '26',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina equipada con electrodomésticos',
                2=>'Baño completo con tina',
                3=>'Wi-Fi de alta velocidad en la habitación',
            ],             
        ],        
        2=>[
            'title' => 'Master Suites de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '247',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RI-two-bedroom-master-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King, 2 tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 138 m2',
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
                    'src' => 'two-dedroom-master-suite.jpg',
            ],
            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],                
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '27',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina totalmente equipada',
                2=>'Sala y Comedor amplios',
                3=>'Balcón privado con sillas y mesa',
            ],
        ],
    ],
];
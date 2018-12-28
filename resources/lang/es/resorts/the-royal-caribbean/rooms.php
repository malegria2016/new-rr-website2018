<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en The Royal Caribbean Resort | Royal Reservations',
            'metadescription'=>'Este hotel en Cancún cuenta con hermosas habitaciones familiares para que disfrutes tus vacaciones en el Caribe. Déjate consentir por la comodidad y el servicio de The Royal Caribbean Resort.',
        ], 
    'title' => 'Habitaciones en The Royal Caribbean',
    'description' => 'Las suites y villas de The Royal Caribbean All Suites Resort le brindarán alojamiento cómodo, con vistas increíbles al Mar Caribe. Todas nuestras habitaciones cuentan con Wi-Fi gratuito, TV de pantalla plana con DVD, teléfono, A/C y balcón o terraza privados, entre otras estupendas amenidades.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-caribbean/hoteles-en-cancun-con-habitaciones-familiares',

    //descripción landing interna
    'title_interna_rooms' => 'Habitaciones y Suites en The Royal Caribbean',
    //descripción landing interna
    'description_interna_rooms' => '<p>Ofreciendo estupendo alojamiento en los incre&iacute;bles espacios de nuestras Junior Suites y Suites de Una y Dos Rec&aacute;maras totalmente equipadas, en este resort frente al mar contar&aacute;s con una excelente distribuci&oacute;n que brinda gran amplitud, amenidades exclusivas, impresionantes vistas del Caribe en cualquiera de sus ubicaciones y todo lo que pudieras necesitar para vivir una agradable experiencia vacacional durante tu estancia en <strong>The Royal Caribbean All Suites Resort</strong>. En este hermoso resort de Canc&uacute;n te ofrecemos la mayor comodidad y la alegr&iacute;a de pasar momentos tanto divertidos como relajantes con tu familia y amigos.</p>
    <p>Imag&iacute;nate descansando en un confortable para&iacute;so privado frente a un impresionante oasis caribe&ntilde;o. Si&eacute;ntete como en casa en cualquiera de nuestras habitaciones, suites o villas familiares y deja que <strong>The Royal Caribbean All Suites Resort</strong> te consienta durante tus vacaciones <strong>familiares en Canc&uacute;n</strong>.</p>',    

    'rooms' => [
        0=>[
            'title' => 'Habitaciones Dobles',
            'price' => [
                'currency' => 'USD',
                'amount' => '99',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-standard-room-ov.jpg'),
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
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],
                5=>[
                    'title'=>'1 Baño completo',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Tina y regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>' TV de pantalla plana',
                    'icon'=>'tv',
                ],        
                
            ],
            'image' => [
                    'title' => 'Habitaciones Dobles',
                    'alt' => 'Habitaciones Dobles',
                    'src' => 'double-standard-room.jpg',
            ],
            'carrusel' => [
                0 => 'double-standard-room-a.jpg',
                1 => 'double-standard-room-b.jpg',
                2 => 'double-standard-room-c.jpg',
            ],
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '22',
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
                'amount' => '149',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-one-bedroom-suite-ov.jpg'),
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
                    'title'=>'1 Baño completo',
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
                'amount' => '30',
                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina equipada con electrodomésticos',
                2=>'Baño completo con secadora para cabello',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],
        ],        
        2=>[
            'title' => 'Master Suites De Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '216',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-two-bedroom-master-suite-ov.jpg'),
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
                    'title'=>'Área: 138 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 Baños completos',
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
                    'title' => 'Master Suites De Dos Recámaras',
                    'alt' => 'Master Suites De Dos Recámaras',
                    'src' => 'two-bedroom-master-suite.jpg',
            ],
            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],              
            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '40',
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